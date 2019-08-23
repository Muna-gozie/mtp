<?php
require('api_config.php');
include('page_function.php');
date_default_timezone_set("Africa/Lagos");

$api = new Api;
$response = $api->getKey();
$url = $response['url'];
$key = $response['key'];

// echo $key.$url;

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
        'ispin' => '0'
      );

    // print_r($buy_policy_params);
    // echo '<br><br>';

    if($policy_start_date !== false){
        try{
          $client = new SoapClient($url);
          $result = $client->BuyPolicy($buy_policy_params);
          print_r($result);

          foreach($result->BuyPolicyResult as $item){
              if(!is_numeric($item->PolicyNumber)){
                $policy_number = $item->PolicyNumber;
                $status_message = $item->StatusmSG;
              }else{
                $policy_number = $item->PolicyNumber;
                $insured_id = $item->CustomerReference;
                $fullname = $item->Fullname;
                $policy_expiry_date = $item->ExpiryDate;
                $status_message = $item->StatusmSG;
                $certificate_number = $item->CertificateNos;
                $product = $item->Product;
              }
            }

          // echo $insured_id.' '.$policy_number.' '.$fullname.' '.$policy_expiry_date.' '.$status_message.' '.$certificate_number.' '.$product;

          // Set session variables
          // $_SESSION['policy_number'] = $policy_number;
          // $_SESSION['status'] = $status_message;
          // $_SESSION['insured_id'] = $insured_id;
          // $_SESSION['fullname'] = $fullname;
          // $_SESSION['expiry_date'] = $policy_expiry_date;
          // $_SESSION['cert_no'] = $certificate_number;
          // $_SESSION['product'] = $product;

           $success_data = [
             'policy_number' => $policy_number,
             'status' => $status_message,
             'insured_id' => $insured_id,
             'fullname' => $fullname,
             'expiry_date' => $policy_expiry_date,
             'cert_no' => $certificate_number,
             'product' => $product,
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

          // header('Location:http://localhost:81/projects/mtp/success/?policy-number='.$policy_number.'&status='.$status_message); // Change to domain url address

          header('Location:http://localhost:81/projects/mtp/success/?'.$query); // Change to domain url address

      }catch(SoapFault $e){
          $error = $e->getMessage();
      }
    }else{
        echo'<script> window.history.back(alert("Enter a valid policy start date")); </script>';
    }
 
    

   
}

