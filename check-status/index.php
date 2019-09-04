<link href="style.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<?php
require('../api_config.php');
$api =  new Api;
$response = $api->getKey();
$url = $response['url'];
// $api_param = $response['api_param'];
$key = $response['key'];

error_reporting(0);

$serialno = $_GET['serialno'];

if(!$_GET['serialno'])
{
	echo '<script type="text/javascript">alert("ERROR!!! UNAUTHORIZED BYPASS ACCESS");
		 window.location.assign("../")
		</script>';
			exit();		
}
$data2 = '<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:tem="http://tempuri.org/">
   <soapenv:Header/>
   <soapenv:Body>
      <tem:Cardstatus>
         <!--Optional:-->
         <tem:MerchantReference>'.$key.'</tem:MerchantReference>
         <!--Optional:-->
         <tem:SerialNo>'.$serialno.'</tem:SerialNo>
      </tem:Cardstatus>
   </soapenv:Body>
</soapenv:Envelope>';


$header = 
array(

"Content-type: text/xml;charset=\"utf-8\"",

"Accept: text/xml",

"Cache-Control: no-cache",

"Pragma: no-cache",

"SOAPAction: \"http://tempuri.org/Cardstatus\"",

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


//var_dump($err);

//ob_start();
//var_dump($result);
//$output = ob_get_clean();

//$checker = "PolicyNumber";

#$xml=simplexml_load_string($result) or die("Error: Cannot create object");

// Free up the resources $curl is using


curl_close($curl);

$doc = new DOMDocument();
$doc->loadXML($result);

$status = $doc->getElementsByTagName( "Agent" );
$status = $status->item(0)->nodeValue;


$id = $doc->getElementsByTagName( "AgentID" );
$id = $id->item(0)->nodeValue;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

	
	<html xmlns="http://www.w3.org/1999/xhtml">

	
	<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="../img/favicon.png">
	
	<title>MOTOR THIRD PARTY ONLINE INSURANCE</title>
	
	<style type="text/css">
	
	<!--
	
	.style6 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
	
	.style7 {
	
	font-family: Arial, Helvetica, sans-serif;
	
	font-size: 16px;
	
	font-weight: bold;
	
	}
	
	.style14 {
	
	font-size: 13px;
	
	font-weight: bold;
	
	}
	
	.style16 {
	
	font-family: Arial, Helvetica, sans-serif;
	
	font-size: 20px;
	
	font-weight: bold;
	
	color: #000000;
	
	}
	
	.style18 {color: #FF0000}
	
	.style19 {
	
	font-size: 10px
	
	}
	
	.style20 {
	
	font-family: Arial, Helvetica, sans-serif;
	
	font-size: 20px;
	
	font-weight: bold;
	
	}
	
	-->
	
	</style>
	
	<style type="text/css" media="print">
	
	.NonPrintable, #Menu, #Footer, #Header
	
	{
	
	display: none;
	
	}
	
	</style>
	
	<style type="text/css">
	
	
/* 	
	.style21 {font-size: 10}
	 */
	
	
	</style>
	
	<link href="css.css" rel="stylesheet" type="text/css" />
	
	</head>
	
	
	
	<body>
    <p>
        <?php 
            if($status != '' && $id == 2)
            {
            echo '<br><br><br><br><br><br><br><br><br>
            <table width="100%">
            <tr>
            <td width="80%">&nbsp;</td>
            <td><section id="plans">
            <div class="container">
            <div class="row">

            <!-- item -->
            <div class="col-md-8 text-center">
                <div class="panel panel-danger panel-pricing">
                    <div class="panel-heading">
                        <i class="fa fa-desktop"></i>
                        <img src="failed.fw.png" width="92" height="120"></h3>
                    </div>
                    <div class="panel-body text-center">
                        <h3><strong>THIS PIN HAS BEEN USED, SEE DETAILS BELOW </strong></h3>
                    </div>
                    <ul class="list-group text-center">
                        <li style="color:#000;" class="list-group-item"><i class="fa fa-check"></i>'.$status.'</li>
                    </ul>
                    <div class="panel-footer" align="center">
                        <a onclick="self.close()" href="../" class="btn btn-lg btn-block btn-danger" style="width:150px; font-size:15px;" href="#">GO BACK!</a>
                    </div>
                </div>
            </div>
            <!-- /item -->

            </div>
            </div>
            </section></td>
            </tr>
            </table>';
            }
            elseif($status != '' && $id == 2)
            {
            echo '<br><br><br><br><br><br><br><br><br>
            <table width="100%">
            <tr>
            <td width="80%">&nbsp;</td>
            <td><section id="plans">
            <div class="container">
            <div class="row">

            <!-- item -->
            <div class="col-md-8 text-center">
                <div class="panel panel-danger panel-pricing">
                    <div class="panel-heading">
                        <i class="fa fa-desktop"></i>
                        <img src="failed.fw.png" width="92" height="120"></h3>
                    </div>
                    <div class="panel-body text-center">
                        <h3><strong>THIS PIN HAS BEEN USED, SEE DETAILS BELOW </strong></h3>
                    </div>
                    <ul class="list-group text-center">
                        <li style="color:#000;" class="list-group-item"><i class="fa fa-check"></i>'.$status.'</li>
                    </ul>
                    <div class="panel-footer" align="center">
                        <a onclick="self.close()" href="../" class="btn btn-lg btn-block btn-danger" style="width:150px; font-size:15px;" href="#">GO BACK!</a>
                    </div>
                </div>
            </div>
            <!-- /item -->

            </div>
            </div>
            </section></td>
            </tr>
            </table>';
            }

            elseif($status != '' && $id == 1)
            {
            echo '<br><br><br><br><br><br><br><br><br>
            <table width="100%">
            <tr>
            <td width="80%">&nbsp;</td>
            <td><section id="plans">
            <div class="container">
            <div class="row">

            <!-- item -->
            <div class="col-md-8 text-center">
                <div class="panel panel-success panel-pricing">
                    <div class="panel-heading">
                        <i class="fa fa-desktop"></i>
                        <img src="happy.fw.png" width="92" height="92"></h3>
                    </div>
                    <div class="panel-body text-center">
                        <h3><strong>THIS PIN IS STILL VALID AND YET TO BE USED</strong></h3>
                    </div>
                    <ul class="list-group text-center">
                        <li style="color:#000;" class="list-group-item"><i class="fa fa-check"></i>'.strtoupper($status).'</li>
                    </ul>
                    <div class="panel-footer" align="center">
                        <a onclick="self.close()" href="../" class="btn btn-lg btn-block btn-success" style="width:150px; font-size:15px;" href="#">GO BACK!</a>
                    </div>
                </div>
            </div>
            <!-- /item -->

            </div>
            </div>
            </section></td>
            </tr>
            </table>';
            }
            elseif($status == '')
            {
            echo '<br><br><br><br><br><br><br><br><br>
            <table width="100%">
            <tr>
            <td width="80%">&nbsp;</td>
            <td><section id="plans">
            <div class="container">
            <div class="row">

            <!-- item -->
            <div class="col-md-8 text-center">
                <div class="panel panel-danger panel-pricing">
                    <div class="panel-heading">
                        <i class="fa fa-desktop"></i>
                        <img src="failed.fw.png" width="92" height="120"></h3>
                    </div>
                    <div class="panel-body text-center">
                        <h3><strong>THE SERIAL NUMBER PROVIDED DOES NOT EXIST, PLEASE CHECK AND TRY AGAIN</strong></h3>
                    </div>
                    <ul class="list-group text-center">
                        <li style="color:#000;" class="list-group-item"><i class="fa fa-check"></i>'.$status.'</li>
                    </ul>
                    <div class="panel-footer" align="center">
                        <a onclick="self.close()" href="../" class="btn btn-lg btn-block btn-danger" style="width:150px; font-size:15px;" href="#">GO BACK!</a>
                    </div>
                </div>
            </div>
            <!-- /item -->

            </div>
            </div>
            </section></td>
            </tr>
            </table>';
            }
        ?>
    </p>
   	</body>
	
	</html>