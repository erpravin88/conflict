<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Common
{

    /**
     * @author PravinKumar
     * @param $fcmtokens,$type {"AGAINST"Or "WITH" Or "FOLLOW"},$message,$user_id,$post_or_follow_user_id
     * $fcmtokens = ["cGxew_XZ8e4:APA91bH-dLLUX6Ow-aAZ1Kl9C62mRrD9MNYc7FnuvJHd2DHuqtAK7oWsrc1BxpLI2TJfHiUTP3au7IFmZBcMmCnuMzIZKZxf4fItbKSaoaErvWqh4cw6dYtYgdxubxOptjzfwm_q5CjG"], $post_or_follow_user_ids = [2], $type = "FOLLOW", $message = "Hello thia is first message.",$title = "Welcome to Conflict", $user_id = 1
     * use this function to send notifications
     */
    public function sendnotifiction($fcmtokens, $post_or_follow_user_ids, $type, $message, $title, $user_id)
    {

        $fcmtoken = implode(',', $fcmtokens);
        $fields = ["notification" => ["title" => $title, "body" => $message, "icon" => "/firebase.png", "click_action" => "http://localhost/conflict/"], "to" => 'cBCzYPgpib0:APA91bFEX9mnATaHcg40JmNsunCW39By1g3lm47NPqUGKtqRi6BzeEMya7tsDZE628YZl3r2jSNrO0alC6KS3UC2WyiWfOHd52ROUOeNDUVT7sk9k3viZ6n29g_294E8AnnwUe1x0K9V'];

        $headers = array(
            'Authorization: key=AIzaSyBTr7Cc3jwYzTO4IS7QFGOiazFCdBCl_24',
            'Content-Type: application/json',
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
        $result = curl_exec($ch);
        if ($result === false) {
            die('Oops! FCM Send Error: ' . curl_error($ch));
        }
        curl_close($ch);
        echo $result;
        return null;

    }
    public function curlfetch($url, $headers, $fields, $method = 'GET')
    {

        $ch = curl_init();
       
        if ($method == 'GET') {
            $query = http_build_query($fields);
            curl_setopt($ch, CURLOPT_URL, $url . "?" . $query);
            curl_setopt($ch, CURLOPT_HTTPGET, 1);
        } else {
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
        }
print_r($url);print_r( json_encode($fields));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($ch);
        if ($result === false) {
            die('Oops! FCM Send Error: ' . curl_error($ch));
        }
        curl_close($ch);
        //echo $result;
        return json_decode($result);

    }
}
