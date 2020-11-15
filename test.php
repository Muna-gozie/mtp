<?php
require('api_config.php');
error_reporting(0);

// Get api params
$api = new Api;
$response = $api->getKey();

$url = $response['url'];
$api_param = $response['api_params'];
$key = $response['key'];
 
// print_r($response);
$params = [
    'MerchantReference' => 'x76o-XInterAP',
    'certno' => '19091156959'
];

$client = new SoapClient($url,$api_param);
$res = $client->GetInsuredCert($params);
$result = $res->GetInsuredCertResult->InsuredCert;


print_r($result);