<?php
require('../api_config.php');
error_reporting(0);

// Get api params
$api = new Api;
$response = $api->getKey();

$url = $response['url'];
$api_param = $response['api_params'];
$key = $response['key'];


$cert = $_GET['Encrypt'];

if(!$_GET['Encrypt'])
{
	echo '<script type="text/javascript">alert("ERROR!!! UNAUTHORIZED BYPASS ACCESS");
		 window.location.assign("../")
		</script>';
			exit();		
}

$params = [
   'MerchantReference' => $key,
   'certno' => $cert
];

$client = new SoapClient($url,$api_param);
$res = $client->GetInsuredCert($params);
$result = $res->GetInsuredCertResult->InsuredCert;


// print_r($result);

// certificate error
if($result->BizOps == 'Failed'){
   $cert_error = $result->CertificateNos;

   // echo $cert_error;

   // error response
   $error = [
      'error_type' => 'Certificate Error',
      'message' => ucwords($cert_error)
   ];

   $query = http_build_query($error);
   header('Location:../error/?'.$query);

   return false;
}

// valid certificate
// redirect to certificate page
header('Location:certificate.php/?Encrypt='.$cert);



// $data2 = '<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:tem="http://tempuri.org/">
//    <soapenv:Header/>
//    <soapenv:Body>
//       <tem:GetInsuredCert>
//          <!--Optional:-->
//          <tem:MerchantReference>'.$key.'</tem:MerchantReference>
//          <!--Optional:-->
//          <tem:certno>'.$cert.'</tem:certno>
//       </tem:GetInsuredCert>
//    </soapenv:Body>
// </soapenv:Envelope>';


// $header = 
// array(

// "Content-type: text/xml;charset=\"utf-8\"",

// "Accept: text/xml",

// "Cache-Control: no-cache",

// "Pragma: no-cache",

// "SOAPAction: \"http://tempuri.org/GetInsuredCert\"",

// "Content-length: ".strlen($data2),

// );

// $curl = curl_init();

// curl_setopt($curl, CURLOPT_URL, $url);
// // Set the url path we want to call

// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // Make it so the data coming back is put into a string
// curl_setopt($curl, CURLOPT_POST, 1); //Choosing the POST method
// curl_setopt($curl, CURLOPT_POSTFIELDS, $data2); // Insert the data
// curl_setopt($curl, CURLOPT_HTTPHEADER, $header);

// //This sends the request
// $result = curl_exec($curl);

// $err = curl_error($curl);


// curl_close($curl);

// if($err){
// 	echo $err;
// }

// print_r($result);

// $doc = new DOMDocument();
// $doc->loadXML($result);

// $policy = $doc->getElementsByTagName( "PolicyNumber" );
// $policy = $policy->item(0)->nodeValue;

// $make = $doc->getElementsByTagName( "CarBrand" );
// $make = $make->item(0)->nodeValue;

// $certno = $doc->getElementsByTagName( "CertificateNos" );
// $certno = $certno->item(0)->nodeValue;

// $brand = $doc->getElementsByTagName( "CarType" );
// $brand = $brand->item(0)->nodeValue;

// $year = $doc->getElementsByTagName( "CarModel" );
// $year = $year->item(0)->nodeValue;

// $fname = $doc->getElementsByTagName( "Fullname" );
// $fname = $fname->item(0)->nodeValue;

// $start = $doc->getElementsByTagName( "StartDate" );
// $start = $start->item(0)->nodeValue;

// $expire = $doc->getElementsByTagName( "ExpiryDate" );
// $expire = $expire->item(0)->nodeValue;

// $parameter = $doc->getElementsByTagName( "BizOps" );
// $parameter = $parameter->item(0)->nodeValue;

// $regno = $doc->getElementsByTagName( "RegNo" );
// $regno = $regno->item(0)->nodeValue;

// $amount = $doc->getElementsByTagName( "Premium" );
// $amount = $amount->item(0)->nodeValue;


?>

