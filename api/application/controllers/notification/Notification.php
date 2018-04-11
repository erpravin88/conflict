<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Notification extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database('default');
        // $this->load->model('NotificationModel');
    }
    public function index()
    {

        $this->load->view('dashboard/dashboard_view');
    }
    /**
     * @author PravinKumar
     * @param $token, $auth_user
     *
     */
    public function addupdatefcmtoken()
    {

        try {
            // $user_id = 1;
            $dataObj = json_decode($this->input->raw_input_stream, true);
            print_r($dataObj);exit;
            if (!isset($dataObj['fcmtoken'])) {
                echo json_encode(['fcmtoken' => 'Please send this key with data']);
                return null;
            }
            if (!isset($dataObj['user_id'])) {
                echo json_encode(['user_id' => 'Please send this key with data']);
                return null;
            }

            $result = $this->NotificationModel->addupdatefcmtoken($dataObj['user_id'], $dataObj['fcmtoken']);
            echo json_encode($result);
            return null;
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage(), "\n";
        }
    }
    public function deletefcmtoken()
    {

        try {
            // $user_id = 1;
            $dataObj = json_decode($this->input->raw_input_stream, true);
            if (!isset($dataObj['fcmtoken'])) {
                echo json_encode(['fcmtoken' => 'Please send this key with data']);
                return null;
            }

            $result = $this->NotificationModel->deletefcmtoken($dataObj['fcmtoken']);
            echo json_encode($result);
            return null;
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage(), "\n";
        }
    }
    /**
     * @author PravinKumar
     * @param $fcmtokens,$type {"AGAINST"Or "WITH" Or "FOLLOW"},$message,$user_id,$post_or_follow_user_id
     * $fcmtokens = ["cGxew_XZ8e4:APA91bH-dLLUX6Ow-aAZ1Kl9C62mRrD9MNYc7FnuvJHd2DHuqtAK7oWsrc1BxpLI2TJfHiUTP3au7IFmZBcMmCnuMzIZKZxf4fItbKSaoaErvWqh4cw6dYtYgdxubxOptjzfwm_q5CjG"], $post_or_follow_user_ids = [2], $type = "FOLLOW", $message = "Hello thia is first message.",$title = "Welcome to Conflict", $user_id = 1
     * use this function to send notifications
     */
    function sendnotifiction($fcmtokens = ["cGxew_XZ8e4:APA91bH-dLLUX6Ow-aAZ1Kl9C62mRrD9MNYc7FnuvJHd2DHuqtAK7oWsrc1BxpLI2TJfHiUTP3au7IFmZBcMmCnuMzIZKZxf4fItbKSaoaErvWqh4cw6dYtYgdxubxOptjzfwm_q5CjG"], $post_or_follow_user_ids = [2], $type = "FOLLOW", $message = "Hello thia is first message.",$title = "Welcome to Conflict", $user_id = 1)
    {
        if (isset($post_or_follow_user_ids) && is_array($post_or_follow_user_ids)) {
            foreach ($post_or_follow_user_ids as $post_or_follow_user_id) {
                $result = $this->NotificationModel->savenotification(["user_id" => $user_id, "post_or_follow_user_id" => $post_or_follow_user_id, "type" => $type, "message" => $message,"updated_at"=>gmdate('Y-m-d\TH:i:s\Z')]);
                //echo json_encode($result);

            }
        }
        //libraries/common.php
        $this->common->sendnotifiction($fcmtokens, $post_or_follow_user_ids, $type, $message,$title, $user_id);

    }

}
