<?php 
// Set date to appropriate format

function set_policy_date($date){
    $today_date = date('Y-m-d');
    if(!empty($date)){
        // Format date to input acceptable by renew policy api
        $today_stamp = strtotime($today_date);
        $user_date = strtotime($date);
        if($user_date < $today_stamp){
            return false;
        }else{
            $date = explode("/",$date);
            $date = $date[2].'-'.$date[0].'-'.$date[1];
            return (string) $date;
        }
    }else{
        return $today_date;
    }
}