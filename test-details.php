<?php
require('api_config.php');

$api = new Api;
$response = $api->getKey();
$url = $response['url'];
$key = $response['key'];


// if($_GET['cat'] == 'Truck - 10000.00')
// {
// 	$car = substr($_GET['cat'], 0, 5);
// }
// elseif(($_GET['cat'] == 'Jeep - 5000.00') || $_GET['cat'] == 'Keke - 2500.00')
// {
// 	$car = substr($_GET['cat'], 0, 4);
// }
// else $car = substr($_GET['cat'], 0, 3);

$address = $_GET['address'];
$fname = $_GET['fname'];
$lname = $_GET['lname'];
$premium = $_GET['amount'];
$email =  $_GET['email'];
$dob = $_GET['dob'];
$location = $_GET['location'];
$phone = $_GET['phone'];
$occupation = $_GET['occupation'];
$id = $_GET['id'];
$id_no = $_GET['id_no'];
$vehicle_type = 'car';
$vehicle_name = $_GET['vehicle_name'];
$vehicle_model = $_GET['vehicle_model'];
$reg_no = $_GET['reg_no'];
$engine_no = $_GET['engine_no'];
$chassis_no =$_GET['chassis_no'];
$color = $_GET['color'];
$manufacture_year = $_GET['year'];
$registered_state = $_GET['registered_state'];
$insurance_category = $_GET['insurance_category'];
$usage = $_GET['usage'];
$insured_type = $_GET['insured_type'];
$policy_date = date("Y-m-d");
$ref = '0033111303';

echo $fname.' '.$address.' '.$email.' '.$dob.' '.$location.' '.$phone.' '.$occupation.' '.$id.' '.$id_no.' '.$vehicle_name.' '.$vehicle_model.' '.$reg_no.' '.$engine_no.' '.$chassis_no.' '.$color.' '.$manufacture_year.' '.$registered_state.' '.$insurance_category.' '.$usage.' '.$insured_type.' '.$policy_date; 


if(isset($_POST['submit'])){
    // $title = $_POST['title'];
    $fname = $_POST['fname'];
    $address = $_POST['address'];
    $email =  $_POST['email'];
    $dob = $_POST['dob'];
    $location = $_POST['loc'];
    $phone = $_POST['phone'];
    $occupation =$_POST['occu'];
    $id = $_POST['id'];
    $id_no = $_POST['id_no'];
    $vehicle_type = 'car';
    $vehicle_name = $_POST['car'];
    $vehicle_model = $_POST['model'];
    $reg_no = $_POST['reg_no'];
    $engine_no = $_POST['engine_no'];
    $chassis_no  = $_POST['chasis_no'];
    $color = $_POST['color'];
    $manufacture_year = $_POST['year'];
    $registered_state = $_POST['state_reg'];
    $insurance_category = $_POST['cat'];
    $usage = $_POST['usage']; //private or commercial vehicle
    $insured_type = $_POST['type'];
    $policy_date = date("Y-m-d");
    $premium = $_GET['amount'];
    $ref = '0033111303';


      // $buy_policy_params = [
    //     'MTPApikey' => $key,
    //     'Title' => 'Mr',
    //     'Firstname' => $fname,
    //     'LastName' => '',
    //     'PhoneNos' => $phone,
    //     'Gender' => '',
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
    //     'SubmitbyID' => '27023031',
    //     'Payref' => $ref,
    //     'ispin' => 0

    // ];

    // try{
    //      // Buy Policy
    //     $client = new SoapClient($url);
    //     $result = $client->BuyPolicy($buy_policy_params);

    //     print_r($result);

    // }catch( Exception $e){
    //     $error = $e->getMessage();
    // }

   
}

// if(isset($_POST['preview'])){

//     echo "You hit the submit button";
//     echo $_POST['email'].'<br>';
//     echo $_POST['fname'].'<br>';
//     echo $_POST['address'].'<br>';
//     echo $_POST['dob'].'<br>';
//     echo $_POST['loc'];
// }