<?php
require('api_config.php');
include('page_function.php');
date_default_timezone_set("Africa/Lagos");

// log error
ini_set('log_errors',1);
ini_set('error_log',dirname(__FILE__).'/error_log.txt');

$api = new Api;
$response = $api->getKey();
$url = $response['url'];
$key = $response['key'];
$api_params = $response['api_params'];

// echo $key.$url;

// Policy renewal
if(isset($_POST['renew_now'])){

  $insurance_type = $_POST['insurance_type'];
  $premium = $_POST['amount'];
  $reg_number = $_POST['reg_no'];
  $pin = $_POST['cardno'];
  $policy_start_date = set_policy_date($_POST['new_start_date']);  
  $paymode = 'pin';
  $vehicle_brand = $_POST['vehicle_brand'];
  $vehicle_model = $_POST['vehicle_model'];

  // echo $vehicle_brand.'  '.$vehicle_model;


  $renewal_params = [
    'MerchantID' => $key,
    'policystarts' => $policy_start_date,
    'Regno' => $reg_number,
    'paymode' => $paymode,
    'paypin' => $pin
  ];

  // echo ' Hello world ';
  // print_r($renewal_params);

  if($policy_start_date != false){
    try{
      $client = new SoapClient($url,$api_params);
      $response = $client->RenewMotorPolicy($renewal_params);

      // echo '<pre>';
      // print_r($response);
      // echo '</pre>';

      $renew_response = $response->RenewMotorPolicyResult->InsuredPolicyDetails;

      // error
      if($renew_response->status == 'Failed'){
        $error = [
          'error_type' => 'Renewal Error',
          'message' => $renew_response->statusmsg
        ];
  
        $query = http_build_query($error);
        header('Location:error/?'.$query);
      }

      // success
      if($renew_response->status == 'ok' && $renew_response->statusmsg == 'success'){

        $policy_info = [
          'policy_number' => $renew_response->PolicyNumber,
          'fullname' => $renew_response->Firstname,
          'cert_no' => $renew_response->CertificateNos,
          'insurance_type' => $renew_response->InsuredType, 
          'premium' => $renew_response->Premium,
          'policy_start_date' => $renew_response->StartDate,
          'expiry_date' => $renew_response->ExpiryDate,
          'reg_no' => $reg_number,
          'vehicle_name' =>  $vehicle_brand,
          'vehicle_model' => $vehicle_model
        ];

        // print_r($policy_info);
        $query = http_build_query($policy_info);

        // header('Location:http://localhost:81/projects/mtp/success/?'.$query);
        header('Location:success/?'.$query);

      }           

    }catch(Exception $e){
      // $error_msg = $e->getMessage();
      $error_msg = 'Could not connect to host';
      // print_r($error_msg);
      // Send error back to page
      $error = [
        'error_type' => 'Renewal Error',
        'message' => $error_msg
      ];

      $query = http_build_query($error);
      header('Location:error/?'.$query);
    }   

  }else{
    echo'<script> window.history.back(alert("Enter a valid policy start date")); </script>';
  }

}

/** Buy New Policy */

if(isset($_POST['pin_pay'])){
    $title = $_POST['title'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $email =  $_POST['email'];
    $dob = $_POST['dob'];
    $location = $_POST['location'];
    $phone = $_POST['phone'];
    $occupation =$_POST['occupation'];
    $id = $_POST['id'];
    $id_no = $_POST['id_no'];
    $vehicle_type = 'car';
    $vehicle_name = $_POST['vehicle_name'];
    $vehicle_model = $_POST['vehicle_model'];
    $reg_no = $_POST['reg_no'];
    $engine_no = $_POST['engine_no'];
    $chassis_no  = $_POST['chassis_no'];
    $color = $_POST['color'];
    $manufacture_year = $_POST['year'];
    $registered_state = $_POST['registered_state'];
    $usage = $_POST['usage']; //private or commercial vehicle

    $premium = $_POST['premium'];
    $card_number = $_POST['cardno'];
    $agentid = $_POST['agentid'];
    $gender = $_POST['gender'];
    $insured_type = $_POST['insured_type'];
    $category = $_POST['insurance_category'];
    $insurance_category = substr($category,0,4);
    $policy_start_date = set_policy_date($_POST['start_date']);


    // echo $fname.' '.$lname.' '.$address.' '.$email.' '.$dob.' '.$location.' '.$phone.' '.$occupation.' '.$id.' '.$id_no.' '.$vehicle_name.' '.$vehicle_model.' '.$reg_no.' '.$engine_no.' '.$chassis_no.' '.$color.' '.$manufacture_year.' '.$registered_state.' '.$insurance_category.' '.$usage.' '.$insured_type.' '.$policy_start_date.' '.$card_number.' '.$agentid.' '.$gender.' '.$premium.'<br><br><br><br><br>'; 
     

      $buy_policy_params = array(
        'MTPApikey' => $key,
        'Title' => $title,
        'Firstname' => $fname,
        'LastName' => $lname,
        'PhoneNos' => $phone,
        'Gender' => $gender,
        'InsuredType' => $insured_type,
        'Email' => $email,
        'policystarts' => $policy_start_date,
        'DOB' => $dob,
        'Address' => $address,
        'Country' => 'Nigeria',
        'Occupation' => $occupation,
        'StateofResidence' => $location,
        'Vehicletype' => $vehicle_type,

        'TransactionRef' => 'MTP'.date('Ymdhis'),
        'CarRegNo' => $reg_no,
        'Carmake' => $vehicle_name,
        'CarModel' => $vehicle_model,
        'EngineNo' => $engine_no,
        'Caryear' => $manufacture_year,
        'CarColor' => $color,
        'CarRegState' => $registered_state,
        'VehicleUsagetype' => $usage,
        'ChassisNo' => $chassis_no,
        'Premium' => $premium,
        'MeansID' => $id,
        'MeansIDNo' => $id_no,
        'SubmitbyID' => $agentid,
        'Payref' => $card_number,
        'ispin' => '1'
      );

    
    if($policy_start_date !== false){
      try{
        $client = new SoapClient($url,$api_params);
        $result = $client->BuyPolicy($buy_policy_params);
        
        // echo '<pre>';
        // print_r($result);
        // echo '</pre>';
        
        $buy_response = $result->BuyPolicyResult->ReferenceID11;

        //purchase error
        if($buy_response->Status == 'Failed'){
          $error = [
            'error_type' => 'Purchase Error',
            'message' => $buy_response->StatusmSG
          ];
    
          $query = http_build_query($error);
          header('Location:error/?'.$query);
        }


        // successful purchase
        if($buy_response->Status == '00' && $buy_response->StatusmSG == 'OK' ){
          $success_data = [
            'policy_number' => $buy_response->PolicyNumber,
            'status' => $buy_response->StatusmSG,
            'insured_id' => $buy_response->CustomerReference,
            'fullname' => $buy_response->Fullname,
            'expiry_date' => $buy_response->ExpiryDate,
            'cert_no' => $buy_response->CertificateNos,
            'product' => $buy_response->Product,
            'phone_number' => $phone,
            'vehicle_name' => $vehicle_name,
            'reg_no' => $reg_no,
            'premium' => $premium,
            'vehicle_model' => $vehicle_model,
            'manufacture_year' => $manufacture_year,
            'policy_start_date' => $policy_start_date,
            'agent_id' => $agentid
          ]; 

          $query = http_build_query($success_data);
          // header('Location:http://localhost:81/projects/mtp/success/?'.$query); 
          header('Location:success/?'.$query);
          
        }      
       

      }catch(SoapFault $e){
          //  Api error
          // $error_msg = $e->getMessage();
          $error_msg = 'Could not connect to host';
          // print_r($error_msg);
          $error = [
            'error_type' => 'Purchase Error',
            'message' => $error_msg
          ];
          
          $query = http_build_query($error);
          header('Location:error/?'.$query);
      }
    }else{
        echo'<script> window.history.back(alert("Enter a valid policy start date")); </script>';
    }  
   
}

