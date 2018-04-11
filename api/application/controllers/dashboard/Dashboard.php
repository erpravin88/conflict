<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use Fusonic\OpenGraph\Consumer;
use Embed\Embed;

//error_reporting(E_ALL);
//ini_set('display_errors', 1);

class Dashboard extends CI_Controller {

    public function index() {

        $this->load->view('dashboard/dashboard_view');
    }

    private function getUrlContents($url, $maximumRedirections = null, $currentRedirection = 0) {
        $result = false;

        $contents = @file_get_contents($url);

        // Check if we need to go somewhere else

        if (isset($contents) && is_string($contents)) {
            preg_match_all('/<[\s]*meta[\s]*http-equiv="?REFRESH"?' . '[\s]*content="?[0-9]*;[\s]*URL[\s]*=[\s]*([^>"]*)"?' . '[\s]*[\/]?[\s]*>/si', $contents, $match);

            if (isset($match) && is_array($match) && count($match) == 2 && count($match[1]) == 1) {
                if (!isset($maximumRedirections) || $currentRedirection < $maximumRedirections) {
                    return $this->getUrlContents($match[1][0], $maximumRedirections, ++$currentRedirection);
                }

                $result = false;
            } else {
                $result = $contents;
            }
        }

        return $result;
    }

    public function fetchurl() {
        $raw = false;
        $dataObj = json_decode($this->input->raw_input_stream, true);
        $url = $dataObj['url'];
        //$url = "https://blog.kissmetrics.com/meta-description-magic/";
        // echo "<pre>"; print_r($url);
        $url = explode(',', $url);
        $url = urldecode($url[0]);

        $test = strpos($url, 'www.youtube.com/watch');
        $isvedio = 0;
        $default_domain = parse_url($url);
        if (strpos($url, 'www.youtube.com/watch') !== false) {
            $isvedio = 1;
        }

        if ($isvedio) {

            parse_str(parse_url($url, PHP_URL_QUERY), $my_array_of_vars);
            $consumer = new Consumer();
            $object = $consumer->loadUrl($url);

            // Basic information of the object
            $title = $object->title != '' ? $object->title : $default_domain['host'];


            $sitename = $object->siteName;
            $description = $object->description;
            $linkurl = $object->url;

            $image = $object->images[0];
            $imageurl = $image->url;

            $video = $object->videos[0];
            $embedurl = $video->url;
        } else {
            //Load any url:


            $info = Embed::create($url);
//            echo "<Pre>";print_r($info);exit;
            if ($info->title != '') {
                $title = $info->title;
            } else if ($title != '') {
                $title = $title;
            } else {
                $title = $default_domain['host'];
            }

            if ($info->description != '') {
                $description = $info->description;
            } else {
                $description = 'This is Great link to see please open';
            }

            if ($info->image != '') {
                $imageurl = $info->image;
            } else if ($info->providerIcon != '') {
                $imageurl = $info->providerIcon;
            } else {
                $imageurl = '';
            }
        }



//    echo "<pre>";print_r($result); exit;
        if ($url != '') {
            $response['title'] = $title;
            $response['description'] = $description;
            $response['url'] = $url;
            $response['domain'] = $default_domain['host'];
            $response['isvedio'] = $isvedio;
            $response['image_url'] = $imageurl;
            $response['embed_url'] = $isvedio ? $embedurl : '';
        } else {
            $response['error'] = 1;
            $response['required'] = 'POST url key with valid url.';
        }
        echo json_encode($response);
        exit(0);
    }

    public function checkUrlForMsgBody($msg) {
        $regex = "((https?|ftp)\:\/\/)?"; // SCHEME 
        $regex .= "([a-z0-9+!*(),;?&=\$_.-]+(\:[a-z0-9+!*(),;?&=\$_.-]+)?@)?"; // User and Pass 
        $regex .= "([a-z0-9-.]*)\.([a-z]{2,3})"; // Host or IP 
        $regex .= "(\:[0-9]{2,5})?"; // Port 
        $regex .= "(\/([a-z0-9+\$_-]\.?)+)*\/?"; // Path 
        $regex .= "(\?[a-z+&\$_.-][a-z0-9;:@&%=+\/\$_.-]*)?"; // GET Query 
        $regex .= "(#[a-z_.-][a-z0-9+\$_.-]*)?"; // Anchor 

        $msg = explode(" ", $msg)[0];
        if (preg_match("/^$regex$/i", $msg)) {
            // `i` flag for case-insensitive
            return $msg;
        }
    }

    public function getFollowersOfUser($user_id) {
        $this->db->where("follower_user_id", $user_id);
        $this->db->select("*");
        $this->db->from("followers");
        $result = $this->db->get()->result_array();
        $followersArr = array();
        $i = 0;
        $followersArr[0] = $user_id;
        $i++;
        foreach ($result as $value) {
            $followersArr[$i] = $value['following_user_id'];
            $i++;
        }
        return array_values(array_unique($followersArr));
    }

    public function gettimeDiff($postTime) {
        $start = date_create('2015-01-26 12:01:00');
        $end = date_create('2015-01-26 13:15:00');
        $diff = date_diff($end, $start);
        if ($diff->d > 0) {
            return date("M d", $postTime) . " at " . date("H:i a");
        } else if ($diff->h > 0) {
            return $diff->h . " Hours Ago";
        } else if ($diff->i > 0) {
            return $diff->i . " Min Ago";
        } else if ($diff->s > 0) {
            return $diff->s . " Sec Ago";
        }
        return $diff;
    }

    public function checkpostvote($postid, $userid) {
        $this->db->where("user_id", $user_id);
        $this->db->where("post_id", $postid);
        $this->db->where("tstatus", "TRUE");
        $this->db->select("*");
        $this->db->from("votes");
        $result = $this->db->get()->row_array();
        if (count($result) > 0) {
            return ["class" => "flipped"];
        } else {
            return "";
        }
    }

    public function voteforpost() {
        $dataObj = json_decode($this->input->raw_input_stream, true);
        $insertArr = array("post_id" => $dataObj['postid'], "vote_post_id" => $dataObj['type'], "user_id" => $this->session->userdata("id"));
        $this->db->insert("votes", $insertArr);
        echo "<pre>";
        print_r($dataObj);
        exit;
    }

    public function getposts() {
        $user_id = isset($this->session->userdata['id']) ? $this->session->userdata['id'] : 1;
        $followersArr = $this->getFollowersOfUser($user_id);
        $this->db->where_in("user_id", $followersArr);
        $this->db->select("t1.*,CONCAT(t2.first_name,' ', t2.last_name) as username,t2.email");
        $this->db->join('users as t2', 't1.user_id = t2.id', 'LEFT');
        $this->db->from("posts as t1");
        $result = $this->db->get()->result_array();
        $res = array();
        $postArr = array();
        $i = 0;
        $url = 'http://www.youtube.com/watch?v=rj18UQjPpGA&feature=player_embedded';
        foreach ($result as $value) {
            $postTime = $value['time_created'];

            if ($value['username'] == "") {
                $value['username'] = "vivek";
            }
            $postArr[$i] = $value;
            $postArr[$i]['url'] = $this->checkUrlForMsgBody($value['body']);
            $postArr[$i]['time_ago'] = $this->gettimeDiff($postTime);
            $postArr[$i]['class'] = $this->checkpostvote($value['id'], $this->session->userdata['id']);
            $i++;
        }
//        echo "<Pre>";
//        print_r($postArr);
//        exit;
        echo json_encode($postArr);
        exit;
//        echo "<Pre>";
//        print_r($postArr);
    }

}
