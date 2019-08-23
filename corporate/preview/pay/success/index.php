<?php
require('../../../../api_config.php');
$api = new Api;
$response = $api->getKey();
$url = $response['url'];
// $api_param = $response['api_param'];
$key = $response['key'];

if(!isset($_GET['email'])) 
{
echo '<script type="text/javascript">alert("ERROR!!! UNAUTHORIZED BYPASS ACCESS");
		 window.location.assign("../../")
		</script>';
			exit();	
}
error_reporting(0);


$amount = $_GET['amount'];
$email = strtoupper($_GET['email']);
$usage = $_GET['usage'];

if($_GET['cat'] == 'Truck - 10000.00')
{
	$car = substr($_GET['cat'], 0, 5);
}
elseif(($_GET['cat'] == 'Jeep - 5000.00') || $_GET['cat'] == 'Keke - 2500.00')
{
	$car = substr($_GET['cat'], 0, 4);
}
else $car = substr($_GET['cat'], 0, 3);

$gender = strtoupper($_GET['gender']);
$color = strtoupper($_GET['color']);
$chasis = strtoupper($_GET['chasis_no']);
$engine = strtoupper($_GET['engine_no']);
$regno = strtoupper($_GET['regno']);
$model = strtoupper(preg_replace('/&(amp;)?#?[a-z0-9]+;/i', '-', $_GET['model']));
$id_no = $_GET['id_no'];
$id = strtoupper($_GET['id']);
$occupation = strtoupper(preg_replace('/&(amp;)?#?[a-z0-9]+;/i', '-', $_GET['occu']));
$address = strtoupper(preg_replace('/&(amp;)?#?[a-z0-9]+;/i', '-', $_GET['address']));
$location = strtoupper($_GET['loc']);
$title = strtoupper($_GET['title']);
$dob = $_GET['dob'];
$vehicle_name = strtoupper($_GET['cartype']);
$mob = $_GET['phone'];
$lname = strtoupper(preg_replace('/&(amp;)?#?[a-z0-9]+;/i', '-', $_GET['lname']));
$fname = strtoupper(preg_replace('/&(amp;)?#?[a-z0-9]+;/i', '-', $_GET['fname']));
$state_reg = strtoupper($_GET['state_reg']);
$year = $_GET['year'];
$agentid = $_GET['agentid'];
$agentname = $_GET['agentname'];
$card = $_GET['cardno'];
$ref = $_GET['ref'];
$type = $_GET['type'];
$category = $_GET['cat'];
$policy_start_date = date('Y-m-d');
$transaction_ref = 'MTP'.date('Ymdhis');


echo 'Amount'.$amount.' Email'.$email.' Car'.$car.' Gender'.$gender.' Color '.$color.' Chasis No.'.$chasis.' Engine No.'.$engine.' Reg_no'.$regno.' Model.'.$model.' ID Type'.$id.' ID no.'.$id_no.' Occupation.'.$occupation.' Address'.$address.' Location.'.$location.' Title'.$title.' DOB.'.$dob.' Vehicle Name.'.$vehicle_name.' Mobile No.'.$mob.' LastName.'.$lname.' FirstName.'.$fname.' Registered State.'.$state_reg.' Year made'.$year.' Agent ID'.$agentid.' Agent Name.'.$agentname.' Card number.'.$card.'Pay ref'.$transaction_ref.' Type.'.$type.' Usage'.$usage.' Category '.$category.' Policy start date '.$policy_start_date.'<br>'; 


// Call Buy policy webservice

$buy_policy_params = array(
  'MTPApikey' => $key,
  'Title' => '',
  'Firstname' => $fname,
  'LastName' => $lname,
  'PhoneNos' => $mob,
  'Gender' => $gender,
  'InsuredType' => $type,
  'Email' => $email,
  'policystarts' => $policy_start_date,
  'DOB' => $dob,
  'Address' => $address,
  'Country' => 'Nigeria',
  'Occupation' => $occupation,
  'StateofResidence' => $location,
  'Vehicletype' => $car,

  'TransactionRef' => $transaction_ref,
  'CarRegNo' => $regno,
  'Carmake' => $vehicle_name,
  'CarModel' => $model,
  'EngineNo' => $engine,
  'Caryear' => $year,
  'CarColor' => $color,
  'CarRegState' => $state_reg,
  'VehicleUsagetype' => $usage,
  'ChassisNo' => $chasis,
  'Premium' => $amount,
  'MeansID' => $id,
  'MeansIDNo' => $id_no,
  'SubmitbyID' => $agentid,
  'Payref' => $card,
  'ispin' => '0'
);

$client = new SoapClient($url);
  $response = $client->BuyPolicy($buy_policy_params);

  print_r($response);

try{
  // $client = new SoapClient($url);
  // $response = $client->BuyPolicy($buy_policy_params);

  // print_r($response);

  // foreach($response->BuyPolicyResult as $item){
  //   if(!is_numeric($item->PolicyNumber)){
  //     $policy_number = $item->PolicyNumber;
  //     $status_message = $item->StatusmSG;
  //   }else{
  //     $policy_number = $item->PolicyNumber;
  //     $insured_id = $item->CustomerReference;
  //     $fullname = $item->Fullname;
  //     $policy_expiry_date = $item->ExpiryDate;
  //     $status_message = $item->StatusmSG;
  //     $certificate_number = $item->CertificateNos;
  //     $product = $item->Product;
  //   }
  // }

  // echo $policy_number.' '.$status_message.' '.$insured_id.' '.$fullname;

}catch(SoapFault $e){
  $e->getMessage();
}


?>

