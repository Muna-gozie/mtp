<?php
require('../../../../api_config.php');
// Get api details

$api = new Api;
$response = $api->getKey();
$url = $response['url'];
// $api_param = $response['api_param'];
$key = $response['key'];

// if(!isset($_GET['email'])) 
// {
// echo '<script type="text/javascript">alert("ERROR!!! UNAUTHORIZED BYPASS ACCESS");
// 		 window.location.assign("../../")
// 		</script>';
// 			exit();	
// }
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


echo 'Amount'.$amount.' Email'.$email.' Car'.$car.' Gender'.$gender.' Color '.$color.' Chasis No.'.$chasis.' Engine No.'.$engine.' Reg_no'.$regno.' Model.'.$model.' ID Type'.$id.' ID no.'.$id_no.' Occupation.'.$occupation.' Address'.$address.' Location.'.$location.' Title'.$title.' DOB.'.$dob.' Vehicle Name.'.$vehicle_name.' Mobile No.'.$mob.' LastName.'.$lname.' FirstName.'.$fname.' Registered State.'.$state_reg.' Year made'.$year.' Agent ID'.$agentid.' Agent Name.'.$agentname.' Card number.'.$card.'Pay ref'.$transaction_ref.' Type.'.$type.' Usage'.$usage.' Category '.$category.' Policy start date '.$policy_start_date; 


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


try{
  $client = new SoapClient($url);
  $response = $client->BuyPolicy($buy_policy_params);

  print_r($response);

  foreach($response->BuyPolicyResult as $result){
    
  }

}catch(SoapFault $e){
  $e->getMessage();
}

/*
$data2 = '<?xml version="1.0" encoding="utf-8"?>

<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">

<soap:Body>
    <BuyPolicy xmlns="http://tempuri.org/">
      <MTPApikey>'.$key.'</MTPApikey>
      <Title></Title>
      <Firstname>'.$fname.'</Firstname>
      <LastName>'.$lname.'</LastName>
      <PhoneNos>'.$mob.'</PhoneNos>
      <Gender>'.$gender.'</Gender>
      <InsuredType>'.$type.'</InsuredType>
      <Email>'.$email.'</Email>
      <policystarts>'.$policy_start_date.'</policystarts>
      <DOB>'.$dob.'</DOB>
      <Address>'.$address.'</Address>
      <Country>Nigeria</Country>
      <Occupation>'.$occupation.'</Occupation>
      <StateofResidence>'.$location.'</StateofResidence>
      <Vehicletype>'.$car.'</Vehicletype>
      <TransactionRef>'.$transaction_ref.'</TransactionRef>
      <CarRegNo>'.$regno.'</CarRegNo>
      <Carmake>'.$vehicle_name.'</Carmake>
      <CarModel>'.$model.'</CarModel>
      <EngineNo>'.$engine.'</EngineNo>
      <Caryear>'.$year.'</Caryear>
      <CarColor>'.$color.'</CarColor>
      <CarRegState>'.$state_reg.'</CarRegState>
      <VehicleUsagetype>'.$usage.'</VehicleUsagetype>
      <ChassisNo>'.$chasis.'</ChassisNo>
      <Premium>'.$amount.'</Premium>
      <MeansID>'.$id.'</MeansID>
      <MeansIDNo>'.$id_no.'</MeansIDNo>
      <SubmitbyID>27033119</SubmitbyID>
      <Payref>0080970080</Payref>
      <ispin>0</ispin>
    </BuyPolicy>
  </soap:Body>

</soap:Envelope>';


$header = 
array(

"Content-type: text/xml;charset=\"utf-8\"",

"Accept: text/xml",

"Cache-Control: no-cache",

"Pragma: no-cache",

"SOAPAction: \"http://tempuri.org/BuyPolicy\"",

"Content-length: ".strlen($data2),

);

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL,$url);
// Set the url path we want to call

curl_setopt($curl, CURLOPT_RETURNTRANSFER,
true); // Make it so the data coming back is put into a string

curl_setopt($curl, CURLOPT_POST,
1); //Choosing the POST method

curl_setopt($curl, CURLOPT_POSTFIELDS,
$data2); // Insert the data

curl_setopt($curl, CURLOPT_HTTPHEADER,
$header);

//This sends the request

$result = curl_exec($curl);


$err = curl_error($curl);

var_dump($result);



curl_close($curl);

print_r($result);

*/





?>
