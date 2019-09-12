<?php
require('../api_config.php');
$api =  new Api;
$response = $api->getKey();
$url = $response['url'];
$api_param = $response['api_params'];
$key = $response['key'];

error_reporting(0);



if(!$_GET['serialno'])
{
	echo '<script type="text/javascript">alert("ERROR!!! UNAUTHORIZED BYPASS ACCESS");
		 window.location.assign("../")
		</script>';
			exit();		
}

$serialno = $_GET['serialno'];

$data = '<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
<soap:Body>
    <Cardstatus xmlns="http://tempuri.org/">
    <MerchantID>'.$key.'</MerchantID>
    <serialno>'.$serialno.'</serialno>
    </Cardstatus>
</soap:Body>
</soap:Envelope>';

$header = ['Content-type: text/xml'];

$curl = curl_init();

curl_setopt($curl,CURLOPT_URL,$url);
curl_setopt($curl,CURLOPT_POST,1);
curl_setopt($curl,CURLOPT_POSTFIELDS,$data);
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
curl_setopt($curl,CURLOPT_HTTPHEADER,$header);

$response = curl_exec($curl);
$error = curl_error($curl);

if($error){
    echo $error;
}

// print_r($response);

$field = new DOMDocument;
$field->loadXML($response);

$batch_no = $field->getElementsByTagName('BatchNo');
$batch_no = $batch_no->item(0)->nodeValue;

$card_serial_no = $field->getElementsByTagName('SerialNo');
$card_serial_no = $card_serial_no->item(0)->nodeValue;

$amount = $field->getElementsByTagName('Amount');
$amount = $amount->item(0)->nodeValue;

$status = $field->getElementsByTagName('Status');
$status = $status->item(0)->nodeValue;

$date_printed = $field->getElementsByTagName('PrintDate');
$date_printed = $date_printed->item(0)->nodeValue;

$used_date = $field->getElementsByTagName('UsedDate');
$used_date = $used_date->item(0)->nodeValue;

$used_by = $field->getElementsByTagName('UsedBy');
$used_by = $used_by->item(0)->nodeValue;

// print_r($batch_no);
// print_r($card_serial_no);

// echo 'Batch No: '.$batch_no.' Serial No: '.$card_serial_no.' Amount: '.$amount.' Status: '.$status.' Date printed: '.$date_printed.' Used by: '.$used_by.' Used date: '.$used_date;



?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

	
	<html xmlns="http://www.w3.org/1999/xhtml">

	
	<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="../img/favicon.png">
    <link href="css.css" rel="stylesheet" type="text/css" />
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	
	<title>MOTOR THIRD PARTY ONLINE INSURANCE</title>
	
	<style type="text/css">
	
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
	
		
	</style>
	
	<style type="text/css" media="print">
	
	.NonPrintable, #Menu, #Footer, #Header
	
	{
	
	display: none;
	
	}
	
	</style>

	</head>
	
	
	
	<body>
    <p>
        <?php 
            if($status != '' && $status == 2)
            {
          ?>      
            <br><br><br><br><br><br><br><br><br>
            <table width="100%">
            <tr>
            <td width="80%">&nbsp;</td>
            <td><section id="plans">
            <div class="container">
            <div class="row">

            <!-- item -->
            <div class="col-md-8 text-center">
                <div class="panel panel-danger panel-pricing" style="margin-top: -10em;">
                    <div class="panel-heading">
                        <i class="fa fa-desktop"></i>
                        <img src="failed.fw.png" width="92" height="120"></h3>
                    </div>
                    <div class="panel-body text-center">
                        <h3><strong>THIS PIN HAS BEEN USED, SEE DETAILS BELOW </strong></h3>
                    </div>
                    <ul class="list-group text-center">
                        <li style="color:#000;" class="list-group-item"><i class="fa fa-check"></i>&nbsp; Used By: &nbsp;
                         <?php echo $used_by ?></li>

                         <li style="color:#000;" class="list-group-item"><i class="fa fa-check"></i> &nbsp; Printed Date: &nbsp;
                         <?php echo $date_printed ?></li>

                         <li style="color:#000;" class="list-group-item"><i class="fa fa-check"></i> &nbsp; Date of Usage: &nbsp;
                         <?php echo $used_date ?></li>

                        <li style="color:#000;" class="list-group-item"><i class="fa fa-check"></i> &nbsp; Batch Number: &nbsp;
                            <?php echo $batch_no ?></li>

                        <li style="color:#000;" class="list-group-item"><i class="fa fa-check"></i> &nbsp; Serial Number: &nbsp;
                         <?php echo $card_serial_no ?></li>

                         <li style="color:#000;" class="list-group-item"><i class="fa fa-check"></i> &nbsp; Amount: &nbsp;
                         <?php echo $amount ?></li>

                         <li style="color:#000;" class="list-group-item"><i class="fa fa-check"></i> &nbsp; Card Status: &nbsp;
                         <?php echo $status == 2 ? 'Used' : 'Un-used' ?></li>

                         <li style="color:#000;" class="list-group-item"><i class="fa fa-check"></i> &nbsp; Printed Date: &nbsp;
                         <?php echo $date_printed ?></li>

                         <li style="color:#000;" class="list-group-item"><i class="fa fa-check"></i> &nbsp; Date of Usage: &nbsp;
                         <?php echo $used_date ?></li>

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
            </table>

            <?php
            }

            elseif($status != '' && $status == 1)
            {
             ?>   

            <br><br><br><br><br><br><br><br><br>
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
                        <h3><strong>THIS PIN IS VALID AND UN-USED</strong></h3>
                    </div>
                    <ul class="list-group text-center">
                        <li style="color:#000;" class="list-group-item"><i class="fa fa-check"></i> &nbsp; Card Status: &nbsp;
                            <?php echo $status == 2 ? 'Used' : 'Un-used' ?></li>
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
            </table>

            <?php
            }
            elseif($status == '' || $status == 'Failed')
            {
             ?>

            <br><br><br><br><br><br><br><br><br>
            <table width="100%">
            <tr>
            <td width="80%">&nbsp;</td>
            <td><section id="plans">
            <div class="container">
            <div class="row">
            <div class="col-md-4"></div>
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
                    <li style="color:#000;" class="list-group-item"><i class="fa fa-check"></i> &nbsp; Card Status: &nbsp;
                         <?php echo  $status ?></li>

                        <!-- <li style="color:#000;" class="list-group-item"><i class="fa fa-check"></i> <?php echo $status ?></li> -->
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
            </table>
          <?php  
            }
        ?>
    </p>
   	</body>
	
	</html>

