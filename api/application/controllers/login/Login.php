<?php

defined('BASEPATH') or exit('No direct script access allowed');

// use GuzzleHttp;
use GuzzleHttp\Subscriber\Oauth\Oauth1;

class Login extends CI_Controller
{

    public function index()
    {
        $this->load->view('login/login_view');
    }

    public function checkaccess()
    {
        if ($this->session->userdata("id")) {
            $userdata = $this->session->userdata();
            unset($userdata['__ci_last_regenerate']);
            echo json_encode(["type" => "success", "msg" => "Logged In", "value" => $userdata]);
            exit;
        } else {
            echo json_encode(["type" => "failed", "msg" => "Not Logged In", "value" => -1]);
            exit;
        }
    }

    public function generate_username($string_name = "Mike Tyson", $rand_no = 2000)
    {
        $username_parts = array_filter(explode(" ", strtolower($string_name))); //explode and lowercase name
        $username_parts = array_slice($username_parts, 0, 2); //return only first two arry part

        $part1 = (!empty($username_parts[0])) ? substr($username_parts[0], 0, 8) : ""; //cut first name to 8 letters
        $part2 = (!empty($username_parts[1])) ? substr($username_parts[1], 0, 10) : ""; //cut second name to 5 letters
        $part3 = ($rand_no) ? rand(0, $rand_no) : "";

        $username = $part1 . $part3 . "@" . ($part2); //str_shuffle to randomly shuffle all characters
        $this->db->select("user_name");
        $this->db->from("users");
        $this->db->where("user_name", $username);
        $userNameResult = $this->db->get()->row_array();
        if (count($userNameResult) > 0) {
            generate_username($string_name);
        }
        return $username;
    }

    public function registeruser()
    {
        $data = json_decode(urldecode($this->input->raw_input_stream), true);
        $email = $data['email'];
        $this->db->select("email");
        $this->db->from("users");
        $this->db->where(["email" => $email, "app_profile_id" => null]);
        $emailResult = $this->db->get()->row_array();
        if (count($emailResult) > 0) {
            $response = array("type" => "failed", "msg" => "Email Id Already Exist", "value" => -1);
            echo json_encode($response);
        } else {
            if (!isset($data['user_name'])) {
                $data['user_name'] = $this->generate_username($data['first_name'] . " " . $data['last_name']);
            }
            $data['password'] = base64_encode($data['password']);
            $data['type'] ='normal';
//            echo "<pre>";print_r($data);exit;
            $this->db->insert("users", $data);
            if ($this->db->affected_rows()) {
                $response = array("type" => "succes", "msg" => "User Regsitered", "value" => -1);
                echo json_encode($response);
            }
        }
    }

    public function loginuser()
    {
        $this->load->library('session');
        $data = json_decode(urldecode($this->input->raw_input_stream), true);
        print_r($data);exit;
        $email = $data['email'];
        $data['password'] = base64_encode($data['password']);
        $this->db->select("*");
        $this->db->from("users");
        $this->db->where(["email" => $email, "password" => $data['password'],"type" =>'normal']);
        $userResult = $this->db->get()->row_array();
        if (count($userResult) > 0) {
            $this->session->set_userdata($userResult);
            echo json_encode(["type" => "success", "msg" => "Login Succesfull", "value" => 1]);
            exit;
        }
    }
    /**
     * Login with Facebook.
     */
    public function facebooklogin()
    {

        $headers = array(
            'Accept: application/json',
            'Content-Type: application/x-www-form-urlencoded',
        );
        $Requestdata = json_decode(urldecode($this->input->raw_input_stream), true);

        $query['code'] = $Requestdata['code'];
        $query['client_id'] = $Requestdata['clientId'];
        $query['redirect_uri'] = $Requestdata['redirectUri'];
        $query['client_secret'] = 'f9651e8e6e64da505d6d63c738d95b5d';

        $accessTokenResponse = $this->common->curlfetch('https://graph.facebook.com/v2.5/oauth/access_token', $headers, $query, 'GET');

        $fields = 'id,email,first_name,last_name,link,name,birthday,gender';
        $profileResponse = $this->common->curlfetch('https://graph.facebook.com/v2.5/me', $headers, [
            'access_token' => $accessTokenResponse->access_token,
            'fields' => $fields], "GET");

        $app_profile_id = $profileResponse->id;
        $this->db->select("*");
        $this->db->from("users");
        $this->db->where(["app_profile_id=" => $profileResponse->id, "type=" => "facebook"]);
        $userResult = $this->db->get()->row_array();
        if (count($userResult) > 0) {
            $this->session->set_userdata($userResult);
            echo json_encode(["type" => "success", "msg" => "Login Succesfull", "value" => 1]);
            exit;
        } else {
            $data['email'] = property_exists($profileResponse, 'email') ? $profileResponse->email : 'dummyvalue@dummyvalue.com';
            $data['app_profile_id'] = $profileResponse->id;
            $data['first_name'] = property_exists($profileResponse, 'first_name') ? $profileResponse->first_name : 'conflict';
            $data['last_name'] = property_exists($profileResponse, 'last_name') ? $profileResponse->last_name : 'Ask';
            $data['user_name'] = $this->generate_username($data['first_name'] . " " . $data['last_name']);

            // random password here
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < 10; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            $data['password'] = md5($randomString);
            $data['gender'] = property_exists($profileResponse, 'gender') ? $profileResponse->gender : '';
            $data['birthday'] = property_exists($profileResponse, 'birthday') ? $profileResponse->birthday : '';
            $data['type'] = 'facebook';

            $this->db->insert("users", $data);
            if ($this->db->affected_rows()) {
                $app_profile_id = $profileResponse->id;
                $this->db->select("*");
                $this->db->from("users");
                $this->db->where(["app_profile_id" => $profileResponse->id, "type" => "facebook"]);
                $userResult = $this->db->get()->row_array();
                if (count($userResult) > 0) {
                    $this->session->set_userdata($userResult);
                    echo json_encode(["type" => "success", "msg" => "Login Succesfull", "value" => 1]);
                    exit;
                }
            }
        }

    }
    public function twitterlogin()
    {

        $Requestdata = json_decode(urldecode($this->input->raw_input_stream), true);

        $stack = GuzzleHttp\HandlerStack::create();
        // Part 1 of 2: Initial request from Satellizer.
        if (!isset($Requestdata['oauth_token']) || !isset($Requestdata['oauth_verifier'])) {
            $stack = GuzzleHttp\HandlerStack::create();
            $requestTokenOauth = new Oauth1([
                'consumer_key' => 'IlCl0k8VddokhsdHgeLiNPvlV',
                'consumer_secret' => 'CABP9GissXwCelhTzH5l4WJGPyu6Kna8l4m4RLH6LcUui9APxg',
                'callback' => $Requestdata['redirectUri'],
                'token' => '',
                'token_secret' => '',
            ]);
            $stack->push($requestTokenOauth);
            $client = new GuzzleHttp\Client([
                'handler' => $stack,
            ]);
            // Step 1. Obtain request token for the authorization popup.
            $requestTokenResponse = $client->request('POST', 'https://api.twitter.com/oauth/request_token', [
                'auth' => 'oauth',
            ]);
            $oauthToken = array();
            parse_str($requestTokenResponse->getBody(), $oauthToken);
            // Step 2. Send OAuth token back to open the authorization screen.
            // print_r($oauthToken);die;
            echo json_encode($oauthToken);
            return true;
        }
        // Part 2 of 2: Second request after Authorize app is clicked.
        else {
            $accessTokenOauth = new Oauth1([
                'consumer_key' => 'IlCl0k8VddokhsdHgeLiNPvlV',
                'consumer_secret' => 'CABP9GissXwCelhTzH5l4WJGPyu6Kna8l4m4RLH6LcUui9APxg',
                'token' => $Requestdata['oauth_token'],
                'verifier' => $Requestdata['oauth_verifier'],
                'token_secret' => '',
            ]);
            $stack->push($accessTokenOauth);
            $client = new GuzzleHttp\Client([
                'handler' => $stack,
            ]);
            // Step 3. Exchange oauth token and oauth verifier for access token.
            $accessTokenResponse = $client->request('POST', 'https://api.twitter.com/oauth/access_token', [
                'auth' => 'oauth',
            ]);
            $accessToken = array();
            parse_str($accessTokenResponse->getBody(), $accessToken);
            $profileOauth = new Oauth1([
                'consumer_key' => 'IlCl0k8VddokhsdHgeLiNPvlV',
                'consumer_secret' => 'CABP9GissXwCelhTzH5l4WJGPyu6Kna8l4m4RLH6LcUui9APxg',
                'oauth_token' => $accessToken['oauth_token'],
                'token_secret' => '',
            ]);
            $stack->push($profileOauth);
            $client = new GuzzleHttp\Client([
                'handler' => $stack,
            ]);
            // Step 4. Retrieve profile information about the current user.
            $profileResponse = $client->request('GET', 'https://api.twitter.com/1.1/users/show.json?screen_name=' . $accessToken['screen_name'], [
                'auth' => 'oauth',
            ]);
            $profileResponse = json_decode($profileResponse->getBody(), true);
            // Step 5a. Link user accounts.
            $this->db->select("*");
            $this->db->from("users");
            $this->db->where(["app_profile_id=" => $profileResponse['id'], "type=" => "twitter"]);
            $userResult = $this->db->get()->row_array();
            if (count($userResult) > 0) {
                $this->session->set_userdata($userResult);
                echo json_encode(["type" => "success", "msg" => "Login Succesfull", "value" => 1]);
                exit;
            } else {
                $data['email'] = '';
                $data['app_profile_id'] =$profileResponse['id'];
                $profileResponse['name'] = explode(' ',$profileResponse['name']);
                $data['first_name'] = isset($profileResponse['name'][0]) ? $profileResponse['name'][0]  : 'conflict';
                $data['last_name'] = isset($profileResponse['name'][1])  ? $profileResponse['name'][1]  : 'Ask';
                $data['user_name'] = $this->generate_username($data['first_name'] . " " . $data['last_name']);

                // random password here
                $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $charactersLength = strlen($characters);
                $randomString = '';
                for ($i = 0; $i < 10; $i++) {
                    $randomString .= $characters[rand(0, $charactersLength - 1)];
                }
                $data['password'] = md5($randomString);
                $data['gender'] = '';
                $data['birthday'] = '';
                $data['type'] = 'twitter';

                $this->db->insert("users", $data);
                if ($this->db->affected_rows()) {
                    $app_profile_id = $profileResponse['id'];
                    $this->db->select("*");
                    $this->db->from("users");
                    $this->db->where(["app_profile_id=" => $profileResponse['id'], "type=" => "twitter"]);
                    $userResult = $this->db->get()->row_array();
                    if (count($userResult) > 0) {
                        $this->session->set_userdata($userResult);
                        echo json_encode(["type" => "success", "msg" => "Login Succesfull", "value" => 1]);
                        exit;
                    }
                }
            }
        }
    }

}
