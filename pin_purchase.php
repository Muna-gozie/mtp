<?php
require('api_config.php');
include('page_function.php');

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
    // $policy_date = date("Y-m-d");

    $premium = $_POST['premium'];
    $card_number = $_POST['cardno'];
    $agentid = $_POST['agentid'];
    $gender = $_POST['gender'];
    $insured_type = $_POST['insured_type'];
    $category = $_POST['insurance_category'];
    $insurance_category = substr($category,0,4);
    $policy_start_date = set_policy_date($_POST['start_date']);


    echo $fname.' '.$lname.' '.$address.' '.$email.' '.$dob.' '.$location.' '.$phone.' '.$occupation.' '.$id.' '.$id_no.' '.$vehicle_name.' '.$vehicle_model.' '.$reg_no.' '.$engine_no.' '.$chassis_no.' '.$color.' '.$manufacture_year.' '.$registered_state.' '.$insurance_category.' '.$usage.' '.$insured_type.' '.$policy_start_date.' '.$card_number.' '.$agentid.' '.$gender.' '.$premium.'<br><br><br><br><br>'; 
     

    //   $buy_policy_params = array(
    //     'MTPApikey' => $key,
    //     'Title' => '',
    //     'Firstname' => $fname,
    //     'LastName' => $lname,
    //     'PhoneNos' => $phone,
    //     'Gender' => $gender,
    //     'InsuredType' => $insured_type,
    //     'Email' => $email,
    //     'policystarts' => $policy_date,
    //     'DOB' => $dob,
    //     'Address' => $address,
    //     'Country' => 'Nigeria',
    //     'Occupation' => $occupation,
    //     'StateofResidence' => $location,
    //     'Vehicletype' => $vehicle_type,

    //     'TransactionRef' => 'pay_ref',
    //     'CarRegNo' => $reg_no,
    //     'Carmake' => $vehicle_name,
    //     'CarModel' => $vehicle_model,
    //     'EngineNo' => $engine_no,
    //     'Caryear' => $manufacture_year,
    //     'CarColor' => $color,
    //     'CarRegState' => $registered_state,
    //     'VehicleUsagetype' => $usage,
    //     'ChassisNo' => $chassis_no,
    //     'Premium' => $premium,
    //     'MeansID' => $id,
    //     'MeansIDNo' => $id_no,
    //     'SubmitbyID' => $agentid,
    //     'Payref' => $card_number,
    //     'ispin' => '0'
    //   );

    // print_r($buy_policy_params);
    // echo '<br><br>';
   
    // $client = new SoapClient($url);
    //  $result = $client->BuyPolicy($buy_policy_params);
    // print_r($result);

//     $data = '
//     <soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
//     <soap:Body>
//       <FindPremiumThirdParty xmlns="http://tempuri.org/">
//         <MerchantReference>x76o-XInterAP</MerchantReference>
//         <Vehicle>bus</Vehicle>
//       </FindPremiumThirdParty>
//     </soap:Body>
//   </soap:Envelope>
//     ';

//     $header = array('Content-Type:text/xml; charset=utf-8');

//     $ch = curl_init();
//     curl_setopt($ch,CURLOPT_URL,$url);
//     curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
//     curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
//     curl_setopt($ch,CURLOPT_HEADER,$header);
//     $result = curl_exec($ch);
//      $error =  curl_error($ch);
//     if($error){
//         echo $error;
//     }
//     print_r($result);
     
    try{
    
        // foreach($result->BuyPolicyResult as $item){
        //     $insured_id = $item->CustomerReference;
        //     $policy_number = $item->PolicyNumber;
        //     $fullname = $item->Fullname;
        //     $policy_expiry_date = $item->ExpiryDate;
        //     $status_message = $item->StatusmSG;
        //     $certificate_number = $item->CertificateNos;
        //     $product = $item->Product;
        //   }

        // echo $insured_id.' '.$policy_number.' '.$fullname.' '.$policy_expiry_date.' '.$status_message.' '.$certificate_number.' '.$product;



    }catch(SoapFault $e){
        $error = $e->getMessage();
    }

   
}

