<?php
defined('BASEPATH') or exit('No direct script access allowed');

class NotificationModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
       
    }

    public function addupdatefcmtoken($user_id,$fcmtoken)
    {
        // $user_id= 123;
        // $fcmtoken = 'hellosjdlbvljbcv';
        $query = $this->db->get_where('fcmtokens',["fcm_token"=>$fcmtoken]);
        $result = $query->result() ;
        // foreach (as $row) {
           
            //print_r($row);exit;
        // }
        $data=[];
        if(isset($result[0]) ){
           // print_r($result[0];exit;
            $dataObject = $result[0];            
            
            if( $dataObject->user_id !=$user_id){
            $this->db->where('id', $dataObject->id);
            $this->db->update('fcmtokens',["user_id"=>$user_id,"updated_at"=> gmdate("Y-m-d\TH:i:s\Z")]);
            }
        }else{
            $this->db->insert('fcmtokens', ["user_id"=>$user_id,"fcm_token"=>$fcmtoken,"updated_at"=> gmdate("Y-m-d\TH:i:s\Z")]);
        }
        $error_check =$this->db->error();
        if($error_check['code']===0){
            return ['status'=>'success','message'=>'You are subscribed successfully'];
        }else{
            return ['status'=>'error','message'=>$error_check['message']];
        }
        

        // echo $row->website_name;
    }
    public function deletefcmtoken($fcmtoken)
    {
        // $user_id= 123;
        // $fcmtoken = 'hellosjdlbvljbcv';
        $query = 	
        $this->db->delete('fcmtokens',["fcm_token"=>$fcmtoken]);
       
        $error_check =$this->db->error();
        if($error_check['code']===0){
            return ['status'=>'success','message'=>'You are unsubscribed successfully'];
        }else{
            return ['status'=>'error','message'=>$error_check['message']];
        }
        

        // echo $row->website_name;
    }
    public function savenotification($payload)
    {
        
        $query = $this->db->insert('notifications',$payload);
       
        $error_check =$this->db->error();
        if($error_check['code']===0){
            return ['status'=>'success','message'=>'You are notification saved successfully'];
        }else{
            return ['status'=>'error','message'=>$error_check['message']];
        }
        

        // echo $row->website_name;
    }

}
