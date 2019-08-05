<?php
require('../../../api_config.php');

$api = new Api;
$response = $api->getKey();
$url = $response['url'];
$api_param = $response['api_param'];
$key = $response['key'];

if(!isset($_GET['email'])) 
{
echo '<script type="text/javascript">alert("ERROR!!! UNAUTHORIZED BYPASS ACCESS");
		 window.location.assign("../")
		</script>';
			exit();	
}
error_reporting(0);
/*
//dob ymd
//$dob = substr($_GET["dob"],5,0);

*/

$amount = $_GET['amount'];
$email = $_GET['email'];
$usage = $_GET['usage'];

if($_GET['cat'] == 'Truck - 10000.00')
{
	$cat = substr($_GET['cat'], 0, 5);
}
elseif($_GET['cat'] == 'Jeep - 5000.00')
{
	$cat = substr($_GET['cat'], 0, 5);
}
else $cat = substr($_GET['cat'], 0, 3);

$color = $_GET['color'];
$chasis = $_GET['chasis_no'];
$engine = $_GET['engine_no'];
$regno = $_GET['regno'];
$model = $_GET['model'];
$car = $_GET['car'];
$id_no = $_GET['id_no'];
$id = $_GET['id'];
$occu = $_GET['occu'];
$add = $_GET['address'];
$loc = $_GET['loc'];
$title = $_GET['title'];

$doby = substr($_GET['dob'], 0, 4);
$dobm = substr($_GET['dob'], 4, 3);
$dobd = substr($_GET['dob'], 7, 9);
$dob = $doby.$dobm.$dobd;

$phone = $_GET['phone'];
$lname = $_GET['lname'];
$fname = $_GET['fname'];
$state_reg = $_GET['state_reg'];
$regno = $_GET['$regno'];
$year = $_GET['$year'];
$agentid = $_GET['agentid'];
$agentname = $_GET['agentname'];
$card = $_GET['cardno'];

$data2 = '<?xml version="1.0" encoding="utf-8"?>

<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">

<soap:Body>

<BuyPolicy xmlns="http://tempuri.org/">

<Firstname>'.$fname.'</Firstname>

<LastName>'.$lname.'</LastName>

<PhoneNos>'.$phone.'</PhoneNos>

<Email>'.$email.'</Email>

<DOB>'.$dob.'</DOB>

<Address>'.$address.'</Address>

<Country>Nigeria</Country>

<Occupation>'.$occu.'</Occupation>

<StateofResidence>'.$loc.'</StateofResidence>

<Usage>PRIVATE</Usage>

<MerchantReference>TR300</MerchantReference>

<InsuranceClass>THIRD PARTY</InsuranceClass>

<Vehicle>'.$cat.'</Vehicle>

<Excess>WITH EXCESS</Excess>

<SumValue>1000000</SumValue>

<TransactionID>test</TransactionID>

<CarRegNos>'.$regno.'</CarRegNos>

<Carbrand>'.$car.'</Carbrand>

<CarType>'.$model.'</CarType>

<CarModel>'.$year.'</CarModel>

<CarColor>'.$color.'</CarColor>

<Registration_State>'.$state_reg.'</Registration_State>

<ChasisNos>'.$chasis_no.'</ChasisNos> 

<Amount>'.$amount.'</Amount>

<Submitby>'.$agentname.'</Submitby>

<SubmitbyID>'.$agentid.'</SubmitbyID>

<Carstuff>'.$card.'</Carstuff>

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

curl_setopt($curl, CURLOPT_URL, $url);
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

curl_close($curl);



//var_dump($err);

//ob_start();
//var_dump($result);
//$output = ob_get_clean();

//$checker = "PolicyNumber";

#$xml=simplexml_load_string($result) or die("Error: Cannot create object");

// Free up the resources $curl is using






$doc = new DOMDocument();
$doc->loadXML($result);

$fullname = $doc->getElementsByTagName( "Fullname" );
$fullname = $fullname->item(0)->nodeValue;

$policy = $doc->getElementsByTagName( "PolicyNumber" );
echo $policy = $policy->item(0)->nodeValue;

$phone = $doc->getElementsByTagName( "PhoneNos" );
$phone = $phone->item(0)->nodeValue;

$expiry = $doc->getElementsByTagName( "ExpiryDate" );
$expiry = $expiry->item(0)->nodeValue;
$expiry1 = substr($expiry, 0, 10);

$cert = $doc->getElementsByTagName( "CertificateNos" );
echo $cert = $cert->item(0)->nodeValue;
?>