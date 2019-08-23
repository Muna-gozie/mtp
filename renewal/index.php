<?php
require('../api_config.php');

error_reporting(0);
if(isset($_POST['Regno'])) 
{
	$Regno = $_POST['Regno'];
}

$api = new Api;
$response = $api->getKey();

// Get Api details
$url = $response['url'];
// $api_param = $response['api_param'];
$key = $response['key'];

$data2 = '<?xml version="1.0" encoding="utf-8"?>

<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
    <soap:Body>
        <GetInsuredInfo xmlns="http://tempuri.org/">
            <MerchantReference>'.$key.'</MerchantReference>
            <regno>'.$Regno.'</regno>
        </GetInsuredInfo>
    </soap:Body>
</soap:Envelope>';

/*
$data2 = '<?xml version="1.0" encoding="utf-8"?>

<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">

<soap:Body>

<GetPolicyForRenewalResult xmlns="http://tempuri.org/">

<MerchantReference>'.$key.'</MerchantReference>

<Regno>'.$Regno.'</Regno>

</GetPolicyForRenewalResult>

</soap:Body>

</soap:Envelope>';
*/

$header = array(
"Content-type: text/xml;charset=\"utf-8\"",

"Accept: text/xml",

"Cache-Control: no-cache",

"Pragma: no-cache",

"Content-length: ".strlen($data2),

);


$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, $url); // Set the url path we want to call

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // Make it so the data coming back is put into a string

curl_setopt($curl, CURLOPT_POST, 1); //Choosing the POST method

curl_setopt($curl, CURLOPT_POSTFIELDS, $data2); // Insert the data

curl_setopt($curl, CURLOPT_HTTPHEADER, $header); //This sends the request

$result = curl_exec($curl);

$err = curl_error($curl);


//var_dump($err);

//ob_start();
//var_dump($result);
//$output = ob_get_clean();

//$checker = "PolicyNumber";

#$xml=simplexml_load_string($result) or die("Error: Cannot create object");

// Free up the resources $curl is using

// print_r($result);

curl_close($curl);

$doc = new DOMDocument();
$doc->loadXML($result);

$title = $doc->getElementsByTagName( "Title" );
$title = $title->item(0)->nodeValue;

$fname = $doc->getElementsByTagName( "Firstname" );
$fname = $fname->item(0)->nodeValue;

$lname = $doc->getElementsByTagName( "Lastname" );
$lname = $lname->item(0)->nodeValue;

$phone = $doc->getElementsByTagName( "Phone" );
$phone = $phone->item(0)->nodeValue;

$dob = $doc->getElementsByTagName( "DOB" );
$dob = $dob->item(0)->nodeValue;

$gender = $doc->getElementsByTagName( "Gender" );
$gender = $gender->item(0)->nodeValue;

$loc = $doc->getElementsByTagName( "State" );
$loc = $loc->item(0)->nodeValue;

$type = $doc->getElementsByTagName( "InsuredType" );
$type = $type->item(0)->nodeValue;

$add = $doc->getElementsByTagName( "Address" );
$add = $add->item(0)->nodeValue;

$email = $doc->getElementsByTagName( "Email" );
$email = $email->item(0)->nodeValue;

$occu = $doc->getElementsByTagName( "Occupation" );
$occu = $occu->item(0)->nodeValue;

$id = $doc->getElementsByTagName( "MeansId" );
$id = $id->item(0)->nodeValue;

$idno = $doc->getElementsByTagName( "MeansIdNo" );
$idno = $idno->item(0)->nodeValue;
?>

<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="../img/favicon.png">
		<!-- Author Meta -->
		<meta name="author" content="www.chiplc.com">
		<!-- Meta Description -->
		<meta name="description" content="Motor Third Party Insurance, By Consolidated Hallmark Insurance Plc.">
		<!-- Meta Keyword -->
		<meta name="keywords" content="Insurance in Nigeria, Motor third party insurance, Motor insurance in Nigeria, Motor insurance, Motor 3rd party insurance in Nigeria, Motor 3rd party insurance, Motor insurance in Lagos">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Motor Third Party Insurance</title>

		<!--CSS ============================================= -->
			<link rel="stylesheet" href="../css/linearicons.css">
			<link rel="stylesheet" href="../css/font-awesome.min.css">
			<link rel="stylesheet" href="../css/jquery.DonutWidget.min.css">
			<link rel="stylesheet" href="../css/bootstrap.css">
			<link rel="stylesheet" href="../css/owl.carousel.css">
			<link rel="stylesheet" href="../css/main.css">
            
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
            
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href="../_css/responsive-layered-slider.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../_scripts/jquery-2.0.2.min.js"></script>
<script type="text/javascript" src="../_scripts/jquery-ui-1.10.4.min.js"></script>
<script type="text/javascript" src="../_scripts/responsive-layered-slider.js"></script> 

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="css/style.css">

<script type="text/javascript" src="js.js"></script>
<script type="text/javascript" src="../jquery.min.js"></script>

<link href="facebox.css" media="screen" rel="stylesheet" type="text/css" />
 <script src="../js/jquery.js" type="text/javascript"></script>
  <script src="../js/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : '../img/ajax-loader2.gif',
        closeImage   : '../img/close.png'
      })
    })
  </script>	
  
<style>

	span{
		font-size: 25px;
		font-family: cursive;
		color: white;
		animation: blink 1s linear infinite;
	}
@keyframes blink{
0%{opacity: 0.2;}
50%{opacity: .5;}
100%{opacity: 1;}
}

/* New style */
/* .input-1{
	width:230px;
	margin-right:10px;
}
.input-2{
	width:230px;
} */
.form-title{
	font-size:18px;
	font-weight:bold; 
	color:#000;
	padding: 1em 0;
	color: #86192c;
}

</style>
</head>
		<body>

			<!-- Start Header Area -->
			<header class="default-header">
				<nav class="navbar navbar-expand-lg  navbar-light">
					<div class="container">
						  <a class="navbar-brand" href="http://motorthirdpartyonline.com">
						  	<img src="../img/logo.png" alt="" style="height:60px;">
						  </a>
						  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						    <div class="navbar-toggler-icon"></div>
						  </button>

						  <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
						    <ul class="navbar-nav">
								<li><a href="https://motorthirdpartyonline.com/">Home</a></li>
						    </ul>
						  </div>						
					</div>
				</nav>
			</header>
			<!-- End Header Area -->
				
			
			<!-- start service Area-->
            <br><br><br><br><br>
			<section class="service-area pt-100 pb-150" id="service" style="margin-top:-100px;">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center" align="center">
								<h1 class="mb-10" style="font-size:24px; font-weight:bold; color:#891C2E">MOTOR THIRD PARTY INSURANCE</h1>
							</div>
						</div>
					</div>	
					<div class="col-lg-12 col-md-12">
					<main id="main" style="height:1170px;">
	<section id="left">
		<div id="head">
			<marquee direction="up" behavior="slide"><p align="center" style="font-size:20px; font-weight:bold; color:#891C2E;">
            <?php
	if($phone != '')
	{
          echo 'Confirm Your Details &raquo;&raquo;';
	}
	elseif($phone == '')
	{
          echo 'No Details Found &raquo;&raquo;';
	}
	?>	  
		  </p></marquee>
		</div>
	</section>
	<section id="right">
    <?php
	if(($phone != '') && ($type == 'Individual'))
	{
	?>
    <div align="center"><h1 style="font-size:18px; font-weight:bold; color:#008C23;"><img src="happy.fw.png" width="80" height="80"><br>WELCOME BACK, <?php echo strtoupper($lname.' '.$fname); ?></h1></div> <hr>
<h1 class="form-title">PERSONAL INFORMATION</h1><br>
		<?php
		if(isset($_POST['submit']))
		{
		?>
        <form name="form" id="form" action="../customer/preview" method="POST">
        <input type="hidden" name="type" value="<?php echo $type; ?>" />
		

<table border="0" style="width:auto;">
  <tr>
    <!-- Hidden title --> 
	<input type="hidden" id="title" name="title" maxlength="19" value="<?php echo $title; ?>">
	
	<div id="form-card" class="form-field full-width">
		<label for="fname">Full name:</label>
		<input id="fname" name="fname" maxlength="19" value="<?php echo $fname; ?>" required disabled>
		<!-- Required hidden input for next page -->
		<input type="hidden" id="fname" name="fname" maxlength="19" value="<?php echo $fname; ?>">
	</div>
	
  </tr>

  <tr>
		<div id="form-card" class="form-field full-width">
			<label for="address">Address:</label>
			<input id="address" name="address" maxlength="100" value="<?php echo $add; ?>" disabled required>
			<!-- Hidden -->
			<input type="hidden" id="address" name="address" maxlength="100" value="<?php echo $add; ?>">
		</div>
		
		<!-- <td>
			<div id="form-card" class="form-field">
				<label for="phone">Phone:</label>
				<input id="phone" name="phone" maxlength="11" value="<?php echo $phone; ?>" required>
			</div>
		</td> -->
  </tr>

  <tr>
		<div id="form-card" class="form-field full-width" >
			<label for="email">Email:</label>
			<input id="email" name="email" maxlength="50" value="<?php echo $email; ?>" required disabled>
			<!-- Hidden -->
			<input type="hidden" id="email" name="email" maxlength="50" value="<?php echo $email; ?>" >
		</div>
	
		<!-- <td>
			<div id="form-card" class="form-field">
				<label for="occupation">Occupation:</label>
				<input id="occu" name="occu" maxlength="50" value="<?php echo $occu; ?>" required>
			</div>
		</td> -->
  </tr>

<tr>
	<td>
		<div id="form-card" class="form-field">
			<label for="dateofbirth">Date of Birth:</label>
			<input id="dob" name="dob" class="input-1" value="<?php echo substr($dob, 0, 10); ?>" required disabled>
			<!-- Hidden -->
			<input type="hidden" id="dob" name="dob" value="<?php echo substr($dob, 0, 10); ?>" >
		</div>
	</td>

	<td>
		<div id="form-card" class="form-field">
			<label for="location">Location:</label>
			<input  name="loc" class="input-2" value="<?php echo $loc; ?>" required disabled>
			<!-- Hidden -->
			<input type="hidden"  name="loc" class="input-2" value="<?php echo $loc; ?>">
		</div>
	</td>
</tr>
  

<tr>
	<td>
		<div id="form-card" class="form-field">
			<label for="phone">Phone:</label>
			<input id="phone" class="input-1" name="phone" maxlength="11" value="<?php echo $phone; ?>" disabled required>
			<!-- Hidden -->
			<input type="hidden" id="phone" class="input-1" name="phone" maxlength="11" value="<?php echo $phone; ?>">
		</div>
	</td>
	
	<td>
		<div id="form-card" class="form-field">
			<label for="occupation">Occupation:</label>
			<input id="occu" class="input-2"  name="occu" maxlength="50" value="<?php echo $occu; ?>" disabled required>
			<!-- Hidden -->
			<input type="hidden" id="occu" class="input-2"  name="occu" maxlength="50" value="<?php echo $occu; ?>" >
		</div>
	</td>	
</tr>
  
<tr>
<td>
	<div id="form-card" class="form-field">
		<label for="email">Means of Identification:</label>
		<input id="id_no" class="input-1" name="id" maxlength="50" value="<?php if(empty($id)){echo'Not applicable';}echo $id; ?>" disabled required>
		<!-- Hidden-->
		<input type="hidden" id="id_no" class="input-1" name="id" maxlength="50" value="<?php if(empty($id)){echo'Not applicable';}echo $id; ?>">	
		
	</div>
</td>

<td>
	<div id="form-card" class="form-field">
		<label for="ID Number">ID Number:</label>
		<input id="id_no" class="input-2" name="id_no" maxlength="50" value="<?php if(empty($idno)){echo'Not applicable';}echo $idno; ?>" required disabled>
		<!-- Hidden -->
		<input type="hidden" id="id_no" class="input-2" name="id_no" maxlength="50" value="<?php if(empty($idno)){echo'Not applicable';}echo $idno; ?>" >
	</div>
</td>

</tr>
</table>

<!-- Enter Vehicle Information -->

<br><h1 class="form-title">VEHICLE INFORMATION</h1>
<br><br>
<table border="0" style="width:auto;">
 
 <tr>
  <td>
	<div id="form-card" class="form-field">
		<label for="car">Car:</label>
		<input type="hidden" name="car" id="car" />
		<select class="input-1" name="country" id="country" required onchange="form.car.value=this.options[this.selectedIndex].text">
			<option value=''>Vehicle Type</option>
			<?php 
			include("../db.php");

			$sql = "select * from `cars` order by cars asc";
			$res = mysqli_query($con, $sql);
			if(mysqli_num_rows($res) > 0) {
				while($row = mysqli_fetch_object($res)) {
					echo "<option value='".$row->id."'>".$row->cars."</option>";
				}
			}
			?>
		</select>
	</div>
  </td>

  <td>
	<div id="form-card" class="form-field">
		<label for="model">Model:</label>
		<input type="hidden" name="model" id="model" />
		<select class="input-2" name="state" id="state" required onchange="form.model.value=this.options[this.selectedIndex].text">
		</select>
	</div>	
  </td>
  </tr>
  
	<tr>
		<td>
			<div id="form-card" class="form-field">
				<label for="reg_no">Registration No:</label>
				<input id="reg_no" class="input-1" name="reg_no" maxlength="20" value="<?php echo $_POST['reg_no']; ?>" required>
			</div>
		</td>
		<td>
			<div id="form-card" class="form-field">
				<label for="engine_no">Engine No:</label>
				<input id="engine_no" class="input-2" name="engine_no"  maxlength="50" value="<?php echo $_POST['engine_no']; ?>" required>
			</div>
		</td>

  	</tr>

  <tr>
    <td>
		<div id="form-card" class="form-field">
			<label for="chasis_no">Chasis No:</label>
			<input id="chasis_no" class="input-1" name="chasis_no" maxlength="17" value="<?php echo $_POST['chasis_no']; ?>" required>
		</div>
	</td>
    <td>
		<div id="form-card" class="form-field">
			<label for="color">Colour:</label>
			<input id="color" class="input-2" name="color" maxlength="20" value="<?php echo $_POST['colour']; ?>" required>
		</div>
	</td>
  </tr>
  
  <tr>
    <td>
	<div id="form-card" class="form-field">
		<label for="year">Year of Make:</label>
		<select class="input-1" name="year" id="year" required>
		<option></option>
		<?php
		$yr = 2019;

		while($yr >=1999)
		{
			echo '<option>'. $yr. '</option>';
			--$yr;
		}

		?>
		</select>
	</div>
	</td>

    <td>
		<div id="form-card" class="form-field">
			<label for="state_reg">State of Registration:</label>
			<select class="input-2" name="state_reg" required id="state_reg">
			<option></option>
			<option>ABUJA FCT</option>
			<option>ABIA</option>
			<option>ADAMAWA</option>
			<option>AKWA IBOM</option>
			<option>ANAMBRA</option>
			<option>BAUCHI</option>
			<option>BAYELSA</option>
			<option>BENUE</option>
			<option>BORNO</option>
			<option>CROSS RIVER</option>
			<option>DELTA</option>
			<option>EBONYI</option>
			<option>EDO</option>
			<option>EKITI</option>
			<option>ENUGU</option>
			<option>GOMBE</option>
			<option>IMO</option>
			<option>JIGAWA</option>
			<option>KADUNA</option>
			<option>KANO</option>
			<option>KATSINA</option>
			<option>KEBBI</option>
			<option>KOGI</option>
			<option>KWARA</option>
			<option>LAGOS</option>
			<option>NASSARAWA</option>
			<option>NIGER</option>
			<option>OGUN</option>
			<option>ONDO</option>
			<option>OSUN</option>
			<option>OYO</option>
			<option>PLATEAU</option>
			<option>RIVERS</option>
			<option>SOKOTO</option>
			<option>TARABA</option>
			<option>YOBE</option>
			<option>ZAMFARA</option>
			</select>
		</div>
	</td>
  </tr>

  <tr>
    <td>
		<div id="form-card" class="form-field">
			<label for="category">Category:</label>
			<select class="input-1" required name="category">
			<option></option>
			<option title="Excluding Commercial Buses !!!"><?php 

			// $url = "http://52.209.59.16:3001/webservice/interapp.asmx?WSDL";
			$client = new SoapClient($url);


			$res2 = $client->FindPremiumThirdParty(array('Vehicle' => 'bus'));
			echo substr(ucfirst(strtolower($res2->FindPremiumThirdPartyResult->ThirdPartyPremium->InsuranceClass)), 0, 4); 
			echo " - ";
			echo $res2->FindPremiumThirdPartyResult->ThirdPartyPremium->Premium; 
			?></option>

			<option><?php 
			$res = $client->FindPremiumThirdParty(array('Vehicle' => 'car'));
			echo substr(ucfirst(strtolower($res->FindPremiumThirdPartyResult->ThirdPartyPremium->InsuranceClass)), 0, 4); 
			echo " - ";
			echo $res->FindPremiumThirdPartyResult->ThirdPartyPremium->Premium; 

			?></option>


			<option><?php 
			$res4 = $client->FindPremiumThirdParty(array('Vehicle' => 'jeep'));
			echo substr(ucfirst(strtolower($res4->FindPremiumThirdPartyResult->ThirdPartyPremium->InsuranceClass)), 0, 4); 
			echo " - ";
			echo $res4->FindPremiumThirdPartyResult->ThirdPartyPremium->Premium; 
			?></option>


			<option><?php 
			$res7 = $client->FindPremiumThirdParty(array('Vehicle' => 'keke'));
			echo substr(ucfirst(strtolower($res7->FindPremiumThirdPartyResult->ThirdPartyPremium->InsuranceClass)), 0, 5); 
			echo " - ";
			echo $res7->FindPremiumThirdPartyResult->ThirdPartyPremium->Premium; 

			?></option>

			<option><?php 
			$res3 = $client->FindPremiumThirdParty(array('Vehicle' => 'suv'));
			echo substr(ucfirst(strtolower($res3->FindPremiumThirdPartyResult->ThirdPartyPremium->InsuranceClass)), 0, 4); 
			echo " - ";
			echo $res3->FindPremiumThirdPartyResult->ThirdPartyPremium->Premium; 
			?></option>

			<option><?php 
			$res6 = $client->FindPremiumThirdParty(array('Vehicle' => 'truck'));
			echo substr(ucfirst(strtolower($res6->FindPremiumThirdPartyResult->ThirdPartyPremium->InsuranceClass)), 0, 5); 
			echo " - ";
			echo $res6->FindPremiumThirdPartyResult->ThirdPartyPremium->Premium; 

			?>
			</option>
			</select>
	</div>
</td>

    <td>
		<div id="form-card" class="form-field">
			<label for="usage">Usage:</label>
			<select  name="usage" class="input-2">
			<option>Private</option>
			<option>Commercial</option>
			</select>
		</div>
	</td>
  </tr>
</table>
			
	<br><br>
		

   <table width="100%">
  <tr>
    <td colspan="2" align="center"><input type="submit" style="background: linear-gradient(135deg, #ccc 0%, #891C2E 100%);
  padding: 10px; border: none; border-radius: 50px; width:200px; color: white; font-weight: 400; font-size: 12pt;" name="preview" value="Preview Details"></td>
  </tr>
</table>  

  
 		</form>
<?php
}

}
//**************************************************  CORPORATE  ********************************************************************		
if(($phone != '') && ($type == 'Corporate'))
	{
	?>
    <div align="center"><h1 style="font-size:18px; font-weight:bold; color:#008C23;"><img src="happy.fw.png" width="80" height="80"><br>WELCOME BACK, <?php echo strtoupper($lname.' '.$fname); ?></h1></div> <hr>
<h1 class="form-title">CORPORATE INFORMATION</h1><br>
		<?php
		if(isset($_POST['submit']))
		{
		?>
        <!-- <form name="form1" id="form1" action="preview/" method="POST"> -->
		<form name="form1" id="form1" action="preview/" method="POST">
        <input type="hidden" name="type" value="<?php echo $type; ?>" />
	<table border="0" style="width:auto;">  
  	<tr>
		<div id="form-card" class="form-field full-width">
			<label for="fname">Name Of Organization:</label>
			<input id="fname" name="fname" maxlength="19" value="<?php echo $fname; ?>" disabled required />
			<!-- Hidden -->
			<input type="hidden" id="fname" name="fname" maxlength="19" value="<?php echo $fname; ?>"/>
		</div>
  	</tr>
	
	<tr>
		<div id="form-card" class="form-field full-width">
		<label for="email">Email:</label>
		<input id="email" name="email" maxlength="50" value="<?php echo $email; ?>" required disabled>
		<!-- Hidden -->
		<input type="hidden" id="email" name="email" maxlength="50" value="<?php echo $email; ?>">
		</div>
		

	</tr>

	<tr>
		<div id="form-card" class="form-field full-width">
			<label for="address">Address:</label>
			<input id="address" name="address" maxlength="100" value="<?php echo $add; ?>" disabled required>
			<!-- Hidden -->
			<input type="hidden" id="address" name="address" maxlength="100" value="<?php echo $add; ?>">
		</div>
    
  </tr>

	<tr>
		<td>
			<div id="form-card" class="form-field">
				<label for="dateofbirth">Date of Incorporation:</label>
				<input id="dob" class="input-1" name="dob" value="<?php echo substr($dob, 0, 10); ?>" required disabled>
				<!-- Hidden -->
				<input type="hidden" id="dob" class="input-1" name="dob" value="<?php echo substr($dob, 0, 10); ?>" >
			</div>
		</td>

    <td>
		<div id="form-card" class="form-field">
			<label for="location">Location:</label>
			<input class="input-2" id="loc" name="loc" value="<?php echo $loc; ?>" required disabled>
			<!-- Hidden -->
			<input type="hidden" class="input-2" id="loc" name="loc" value="<?php echo $loc; ?>">
		</div>
	</td>
</tr>

<tr>
	<td>
		<div id="form-card" class="form-field">
			<label for="occupation">RC Number:</label>
			<input class="input-1" id="id" name="id" maxlength="50" value="<?php echo $idno; ?>" disabled required>
			<!-- Hidden -->
			<input type="hidden" class="input-1" id="id" name="id" maxlength="50" value="<?php echo $idno; ?>">
		</div>										
	</td>

	<td>
		<div id="form-card" class="form-field">
			<label for="phone">Phone:</label>
			<input class="input-2" id="phone" name="phone" maxlength="11" value="<?php echo $phone; ?>" disabled required>
			<!-- Hidden -->
			<input type="hidden" class="input-2" id="phone" name="phone" maxlength="11" value="<?php echo $phone; ?>">
		</div>
	</td>
</tr>

  
 
</table>

<br>

<div><h1 class="form-title">VEHICLE INFORMATION</h1></div><br><br>
<table border="0" style="width:auto;">
  <!-- <tr>
  <td colspan="2">Insurance Class: <font color="#FF0000">Motor Third Party</font><br><br></td>
  </tr> -->
 
 <tr>
  <td>
  <div id="form-card" class="form-field">
		<label for="car">Car:</label>
		<input type="hidden" name="car" id="car" />
		<select name="country" id="country" class="input-1" required onchange="form.car.value=this.options[this.selectedIndex].text">
		<option value=''>Select Car</option>
		<?php 
		include("../db.php");

		$sql = "select * from `cars` order by cars asc";
		$res = mysqli_query($con, $sql);
		if(mysqli_num_rows($res) > 0) {
		while($row = mysqli_fetch_object($res)) {
			echo "<option value='".$row->id."'>".$row->cars."</option>";
		}
		}
		?>
		</select>
	</div>
	</td>

  <td>
	<div id="form-card" class="form-field">
		<label for="model">Model:</label>
		<input type="hidden" name="model" id="model" />
		<select class="input-2" name="state" id="state" required onchange="form.model.value=this.options[this.selectedIndex].text">
		</select>
	</div>
  </td>
  </tr>
  
	<tr>
	<td>
		<div id="form-card" class="form-field">
			<label for="reg_no">Registration No:</label>
			<input class="input-1" id="reg_no" name="reg_no" maxlength="20" value="<?php echo $_POST['reg_no']; ?>" required>
		</div>
	</td>
	<td>
		<div id="form-card" class="form-field">
			<label for="engine_no">Engine No:</label>
			<input class="input-2" id="engine_no" name="engine_no"  maxlength="50" value="<?php echo $_POST['engine_no']; ?>" required>
		</div>
	</td>
	</tr>

  <tr>
    <td>
		<div id="form-card" class="form-field">
			<label for="chasis_no">Chasis No:</label>
			<input class="input-1" id="chasis_no" name="chasis_no" maxlength="17" value="<?php echo $_POST['chasis_no']; ?>" required>
		</div>
	</td>
    <td>
		<div id="form-card" class="form-field">
			<label for="color">Colour:</label>
			<input class="input-2" id="color" name="color" maxlength="20" value="<?php echo $_POST['colour']; ?>" required>
		</div>
	</td>
  </tr>
  
  <tr>
    <td>
		<div id="form-card" class="form-field">
			<label for="year">Year of Make:</label>
			<select class="input-1" name="year" id="year" required>
			<option></option>
			<?php
			$yr = 2019;

			while($yr >=1999)
			{
			echo '<option>'. $yr. '</option>';
			--$yr;
			}

			?>
			</select>
		</div>
	</td>
    <td>
		<div id="form-card" class="form-field">
			<label for="state_reg">State of Registration:</label>
			<select class="input-2" name="state_reg" required id="state_reg">
				<option></option>
				<option>ABUJA FCT</option>
				<option>ABIA</option>
				<option>ADAMAWA</option>
				<option>AKWA IBOM</option>
				<option>ANAMBRA</option>
				<option>BAUCHI</option>
				<option>BAYELSA</option>
				<option>BENUE</option>
				<option>BORNO</option>
				<option>CROSS RIVER</option>
				<option>DELTA</option>
				<option>EBONYI</option>
				<option>EDO</option>
				<option>EKITI</option>
				<option>ENUGU</option>
				<option>GOMBE</option>
				<option>IMO</option>
				<option>JIGAWA</option>
				<option>KADUNA</option>
				<option>KANO</option>
				<option>KATSINA</option>
				<option>KEBBI</option>
				<option>KOGI</option>
				<option>KWARA</option>
				<option>LAGOS</option>
				<option>NASSARAWA</option>
				<option>NIGER</option>
				<option>OGUN</option>
				<option>ONDO</option>
				<option>OSUN</option>
				<option>OYO</option>
				<option>PLATEAU</option>
				<option>RIVERS</option>
				<option>SOKOTO</option>
				<option>TARABA</option>
				<option>YOBE</option>
				<option>ZAMFARA</option>
			</select>
		</div>
	</td>
  </tr>

  <tr>
    <td>
		<div id="form-card" class="form-field">
				<label for="category">Category:</label>
				<select required class="input-1" name="category">
				<option></option>
				<option title="Excluding Commercial Buses !!!"><?php 

				// $url = "http://52.209.59.16:3001/webservice/interapp.asmx?WSDL";
				$client = new SoapClient($url);


				$res2 = $client->FindPremiumThirdParty(array('Vehicle' => 'bus'));
				echo substr(ucfirst(strtolower($res2->FindPremiumThirdPartyResult->ThirdPartyPremium->InsuranceClass)), 0, 4); 
				echo " - ";
				echo $res2->FindPremiumThirdPartyResult->ThirdPartyPremium->Premium; 
				?></option>

				<option><?php 
				$res = $client->FindPremiumThirdParty(array('Vehicle' => 'car'));
				echo substr(ucfirst(strtolower($res->FindPremiumThirdPartyResult->ThirdPartyPremium->InsuranceClass)), 0, 4); 
				echo " - ";
				echo $res->FindPremiumThirdPartyResult->ThirdPartyPremium->Premium; 

				?></option>


				<option><?php 
				$res4 = $client->FindPremiumThirdParty(array('Vehicle' => 'jeep'));
				echo substr(ucfirst(strtolower($res4->FindPremiumThirdPartyResult->ThirdPartyPremium->InsuranceClass)), 0, 4); 
				echo " - ";
				echo $res4->FindPremiumThirdPartyResult->ThirdPartyPremium->Premium; 
				?></option>


				<option><?php 
				$res7 = $client->FindPremiumThirdParty(array('Vehicle' => 'keke'));
				echo substr(ucfirst(strtolower($res7->FindPremiumThirdPartyResult->ThirdPartyPremium->InsuranceClass)), 0, 5); 
				echo " - ";
				echo $res7->FindPremiumThirdPartyResult->ThirdPartyPremium->Premium; 

				?></option>

				<option><?php 
				$res3 = $client->FindPremiumThirdParty(array('Vehicle' => 'suv'));
				echo substr(ucfirst(strtolower($res3->FindPremiumThirdPartyResult->ThirdPartyPremium->InsuranceClass)), 0, 4); 
				echo " - ";
				echo $res3->FindPremiumThirdPartyResult->ThirdPartyPremium->Premium; 
				?></option>

				<option><?php 
				$res6 = $client->FindPremiumThirdParty(array('Vehicle' => 'truck'));
				echo substr(ucfirst(strtolower($res6->FindPremiumThirdPartyResult->ThirdPartyPremium->InsuranceClass)), 0, 5); 
				echo " - ";
				echo $res6->FindPremiumThirdPartyResult->ThirdPartyPremium->Premium; 

				?>
				</option>
				</select>
	</div>
	</td>

    <td>
		<div id="form-card" class="form-field">
			<label for="usage">Usage:</label>
			<select  name="usage" class="input-2">
			<option>Private</option>
			</select>
		</div>
	</td>
  </tr>
</table>
			
	<br><br>
		

   <table width="100%">
  <tr>
    <td colspan="2" align="center"><input type="submit" style="background: linear-gradient(135deg, #ccc 0%, #891C2E 100%);
  padding: 10px; border: none; border-radius: 50px; width:200px; color: white; font-weight: 400; font-size: 12pt;" name="preview" value="Preview Details"></td>
  </tr>
</table>  

  
 		</form>
        <?php
		}
	}elseif($phone == '')
		{
			echo '<br><br><br><br><br><br><br><br><br><center><img src="failed.fw.png" width="92" height="120"><br>
    			<div style="margin:-14px 0px;"> <br><br><font color="#891C2E" style="font-weight:600; line-height:30px;">SORRY !!!<br> WE CAN\'T SEEM TO FIND ANY INFORMATION WITH THE DETAILS YOU PROVIDED, PLEASE CHECK AND TRY AGAIN!</font></div>
				<br><br>
				<a href="#" class="btn btn-danger" onclick="goBack()">&larr; Go Back</a>
<script>
function goBack() {
    window.history.back();
}
</script>
				</center>';
		}
		?>
      <br><br>  
	</section>
</main>
  
					</div>
				</div>	
			</section>
							
					</div>
				</div>	
			</section>
			<!-- End testimonial Area -->
			

			
			<!-- start footer Area -->		
			<footer class="footer-area section-gap" style="background-color:#CCC;">
				<div class="container">
					<div class="row">
						<div class="col-lg-5  col-md-12">
							<div class="single-footer-widget" style="color:#000;">
								<ul class="footer-nav">
                                <li style="color:#000; font-weight:bold;">Contact Us</li><br><br>
									<li> 
                                    A General Business and Special Risk Insurance <br>underwriting firm fully capitalized in line with statutory <br>requirements of the industry's regulatory body - the<br> National Insurance Commision. <br><br><a href="http://www.chiplc.com/about-us" target="_blank" style="color:#891C2E;">Read more about us</a>
                                    </li>
								</ul>
							</div>
						</div>
						<div class="col-lg-4  col-md-12">
							<div class="single-footer-widget newsletter">
								<ul class="footer-nav">
                                <li style="color:#000; font-weight:bold;">Useful Links</li><br><br>
									<li><a href="http://www.askniid.org/" target="_blank" style="color:#891C2E;">Ask NIID</a></li>
                                    <li><a href="https://www.chiplc.com/" target="_blank" style="color:#891C2E;">Parent Website</a></li>
									<li><a href="https://chiplc.com/complaint-policy/" target="_blank" style="color:#891C2E;">Complaint Policy</a></li>
									<li><a href="https://www.chiplc.com/privacy/" target="_blank" style="color:#891C2E;">Privacy</a></li>
									<li><a href="https://www.chiplc.com/term-of-use/" target="_blank" style="color:#891C2E;">Term of Use</a></li>
								</ul>	
							</div>
						</div>
						<div class="col-lg-3  col-md-12">
							<div class="single-footer-widget">
								<h6 class="mb-20" style="color:#000; font-weight:bold;">Contact Us</h6>
								<ul class="footer-nav" style="color:#000;">
									<li><div class="fa fa-home"></div> Address: 266, Ikorodu Road, Obanikoro</li><br>
                                    <li><div class="fa fa-phone"></div> 0700CHINSURANCE</li><br>
                                    <li><div class="fa fa-envelope"></div> info@chiplc.com</li>
								</ul>
							</div>
						</div>						
					</div>
					<div class="row footer-bottom d-flex justify-content-between">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <p class="col-lg-8 col-sm-12 footer-text m-0 text-white"><font color="#000000">Copyright &copy; Consolidated Hallmark Insurance Plc</font></p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						<div class="col-lg-4 col-sm-12 footer-social">
							<a href="https://www.facebook.com/MyChiPlc" target="_blank"><i class="fa fa-facebook"></i></a>
							<a href="https://twitter.com/MyChiPlc" target="_blank"><i class="fa fa-twitter"></i></a>
							<a href="https://www.linkedin.com/company/314131/" target="_blank"><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->

			<script src="../js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script src="../js/vendor/bootstrap.min.js"></script>
			<script src="../js/jquery.ajaxchimp.min.js"></script>
			<script src="../js/parallax.min.js"></script>			
			<script src="../js/owl.carousel.min.js"></script>			
			<script src="../js/jquery.sticky.js"></script>
			<script src="../js/jquery.DonutWidget.min.js"></script>
			<script src="../js/jquery.magnific-popup.min.js"></script>			
			<script src="../js/main.js"></script>	
		</body>
	</html>