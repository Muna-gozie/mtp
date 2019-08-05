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
$api_param = $response['api_param'];
$key = $response['key'];

$data2 = '<?xml version="1.0" encoding="utf-8"?>

<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">

<soap:Body>

<GetPolicyForRenewalResult xmlns="http://tempuri.org/">

<MerchantReference>'.$key.'</MerchantReference>

<Regno>'.$Regno.'</Regno>

</GetPolicyForRenewalResult>

</soap:Body>

</soap:Envelope>';


$header = array(
"Content-type: text/xml;charset=\"utf-8\"",

"Accept: text/xml",

"Cache-Control: no-cache",

"Pragma: no-cache",

"SOAPAction: \"http://tempuri.org/GetPolicyForRenewalResult\"",

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
<h1 style="font-size:18px; font-weight:bold; color:#000;">PERSONAL INFORMATION</h1><br><br>
		<?php
		if(isset($_POST['submit']))
		{
		?>
        <form name="form" id="form" action="preview/" method="POST">
        <input type="hidden" name="type" value="<?php echo $type; ?>" />
<table border="0" style="width:auto;">
  <tr>
    <td><div id="form-card" class="form-field">
				<label for="title">Title:</label>
				<input id="title" name="title" maxlength="10" value="<?php echo $title; ?>" readonly>
			</div></td>
    <td><div id="form-card" class="form-field">
                <label for="gender">Gender:</label>
<select name="gender" id="gender" style="height:32px;" required>
<OPTION><?php echo $gender; ?></OPTION>
<option></option>
<option>Female</option>
<option>Male</option>
<option>Others</option>
    </select>
			</div></td>
  </tr>
  
  <tr>
    <td><div id="form-card" class="form-field">
				<label for="fname">Firstname:</label>
				<input id="fname" name="fname" maxlength="19" value="<?php echo $fname; ?>" required>
			</div></td>
    <td><div id="form-card" class="form-field">
                <label for="lname">Lastname:</label>
				<input id="lname" name="lname" maxlength="19" value="<?php echo $lname; ?>" required>
			</div></td>
  </tr>

	<tr>
    <td><div id="form-card" class="form-field">
                <label for="dateofbirth">Date of Birth:</label>
                <div style="margin:10px 0px;">
				<input id="dob" name="dob" value="<?php echo substr($dob, 0, 10); ?>" required>
                </div>
			</div></td>
    <td><div id="form-card" class="form-field">
				<label for="location">Location:</label>
<select name="loc" style="width:197px; height:44px;" required>
<OPTION><?php echo $loc; ?></OPTION>
<option></option>
<OPTION>Lagos</OPTION>
<option>Abuja FCT</option>
<option>Abia</option>
<option>Adamawa</option>
<option>Akwa Ibom</option>
<option>Anambre</option>
<option>Bachi</option>
<option>Bayelsa</option>
<option>Benue</option>
<option>Borno</option>
<option>Cross River</option>
<option>Delta</option>
<option>Ebonyi</option>
<option>Edo</option>
<option>Ekiti</option>
<option>Enugu</option>
<option>Gombe</option>
<option>Imo</option>
<option>Jigawa</option>
<option>Kaduna</option>
<option>Kano</option>
<option>Kastina</option>
<option>Kebbi</option>
<option>Kogi</option>
<option>Kwara</option>
<option>Nassarawa</option>
<option>Niger</option>
<option>Ogun</option>
<option>Ondo</option>
<option>Osun</option>
<option>Oyo</option>
<option>Plateau</option>
<option>Rivers</option>
<option>Sokoto</option>
<option>Taraba</option>
<option>Yobe</option>
<option>Zamfara</option>
    </select>
			</div>
</td>
  </tr>

  <tr>
    <td><div id="form-card" class="form-field">
				<label for="address">Address:</label>
				<input id="address" name="address" maxlength="100" value="<?php echo $add; ?>" required>
			</div></td>
    <td><div id="form-card" class="form-field">
                <label for="phone">Phone:</label>
				<input id="phone" name="phone" maxlength="11" value="<?php echo $phone; ?>" required>
			</div></td>
  </tr>

  <tr>
    <td><div id="form-card" class="form-field">
				<label for="email">Email:</label>
				<input id="email" name="email" maxlength="50" value="<?php echo $email; ?>" required>
			</div></td>
    <td><div id="form-card" class="form-field">
                <label for="occupation">Occupation:</label>
				<input id="occu" name="occu" maxlength="50" value="<?php echo $occu; ?>" required>
			</div></td>
  </tr>
  
  <tr>
    <td><div id="form-card" class="form-field">
				<label for="email">Means of Identification:</label>
<select name="id" id="id" style="width:197px; height:44px;" required>
<OPTION><?php echo $id; ?></OPTION>
<option></option>
<option>National ID</option>
<option>Driver's Licence</option>
<option>International Passport</option>
<option>Permanent Voters Card (PVC)</option>
    </select>
			</div></td>

    <td><div id="form-card" class="form-field">
                <label for="ID Number">ID Number:</label>
                <div style="margin:12px 0px;">
				<input id="id_no" name="id_no" maxlength="50" value="<?php echo $idno; ?>" required>
                </div>
			</div></td>
  </tr>
</table>
<br><center><h1 style="font-size:18px; font-weight:bold; color:#000;">VEHICLE INFORMATION</h1></center><br><br>
<table border="0" style="width:auto;">
  <tr>
  <td colspan="2">Insurance Class: <font color="#FF0000">Motor Third Party</font><br><br></td>
  </tr>
 
 <tr>
  <td><div id="form-card" class="form-field">
                <label for="car">Car:</label>
  <input type="hidden" name="car" id="car" />
  <select name="country" id="country" style="width:197px; height:44px; border-color:#ddd; border-radius:5px;" required onchange="form.car.value=this.options[this.selectedIndex].text">
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
        </div></td>
  <td>
   <div id="form-card" class="form-field">
                <label for="model">Model:</label>
<input type="hidden" name="model" id="model" />
  <select name="state" id="state" style="width:197px; height:44px; border-color:#ddd; border-radius:5px;" required onchange="form.model.value=this.options[this.selectedIndex].text">
  </select>
  </div>
  </td>
  </tr>
  
	<tr>
    <td><div id="form-card" class="form-field">
                <label for="reg_no">Registration No:</label>
                <div style="margin:10px 0px;">
				<input id="reg_no" name="reg_no" maxlength="20" value="<?php echo $_POST['reg_no']; ?>" required>
                </div>
			</div></td>
    <td><div id="form-card" class="form-field">
				<label for="engine_no">Engine No:</label><br>
				<input id="engine_no" name="engine_no"  maxlength="50" value="<?php echo $_POST['engine_no']; ?>" required>
			</div>
</td>
  </tr>

  <tr>
    <td><div id="form-card" class="form-field">
				<label for="chasis_no">Chasis No:</label>
				<input id="chasis_no" name="chasis_no" maxlength="17" value="<?php echo $_POST['chasis_no']; ?>" required>
			</div></td>
    <td><div id="form-card" class="form-field">
                <label for="color">Colour:</label>
				<input id="color" name="color" maxlength="20" value="<?php echo $_POST['colour']; ?>" required>
			</div></td>
  </tr>
  
  <tr>
    <td><div id="form-card" class="form-field">
				<label for="year">Year of Make:</label>
				<select name="year" id="year" style="color:#000; width:183px;" required>
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
			</div></td>
    <td><div id="form-card" class="form-field">
                <label for="state_reg">State of Registration:</label>
				<select name="state_reg" required id="state_reg" style="color:#000; width:183px;">
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
			</div></td>
  </tr>

  <tr>
    <td><div id="form-card" class="form-field">
				<label for="category">Category:</label>
				<select required style="width:197px; height:44px; border-color:#ddd; border-radius:5px;" name="category" style="color:#000; width:183px;">
<option></option>
<option title="Excluding Commercial Buses !!!">
<?php 
	// $url = "http://52.209.59.16:3001/webservice/interapp.asmx?WSDL";
	$client = new SoapClient($url);


	$res2 = $client->FindPremiumThirdParty(array('Vehicle' => 'bus'));
	echo substr(ucfirst(strtolower($res2->FindPremiumThirdPartyResult->ThirdPartyPremium->InsuranceClass)), 0, 4); 
	echo " - ";
	echo $res2->FindPremiumThirdPartyResult->ThirdPartyPremium->Premium; 
?>
</option>

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
			</div></td>
    <td><div id="form-card" class="form-field">
                <label for="usage">Usage:</label>
				<select style="width:197px; height:44px; border-color:#ddd; border-radius:5px;" name="usage" style="color:#000; width:183px;">
<option>Private</option>
<option>Commercial</option>
</select>
			</div></td>
  </tr>
</table>
			
	<br><br>
		

   <table width="100%">
  <tr>
    <td colspan="2" align="center"><input type="submit" style="background: linear-gradient(135deg, #ccc 0%, #891C2E 100%);
  padding: 10px; border: none; border-radius: 50px; width:200px; color: white; font-weight: 400; font-size: 12pt;" value="Preview Details"></td>
  </tr>
</table>  

  
 		</form>
<?php
}}
//**************************************************  CORPORATE  ********************************************************************		
if(($phone != '') && ($type == 'Corporate'))
	{
	?>
    <div align="center"><h1 style="font-size:18px; font-weight:bold; color:#008C23;"><img src="happy.fw.png" width="80" height="80"><br>WELCOME BACK, <?php echo strtoupper($lname.' '.$fname); ?></h1></div> <hr>
<h1 style="font-size:18px; font-weight:bold; color:#000;">CORPORATE INFORMATION</h1><br><br>
		<?php
		if(isset($_POST['submit']))
		{
		?>
        <form name="form1" id="form1" action="preview/" method="POST">
        <input type="hidden" name="type" value="<?php echo $type; ?>" />
<table border="0" style="width:auto;">  
  <tr>
    <td><div id="form-card" class="form-field">
                <label for="lname">Name Of Organization:</label>
				<input id="lname" style="width:auto;" name="lname" maxlength="19" value="<?php echo $lname; ?>" required>
			</div></td>
  </tr>

	<tr>
    <td><div id="form-card" class="form-field">
                <label for="dateofbirth">Date of Incorporation:</label>
                <div style="margin:10px 0px;">
				<input id="dob" name="dob" value="<?php echo substr($dob, 0, 10); ?>" required>
                </div>
			</div></td>
    <td><div id="form-card" class="form-field">
				<label for="location">Location:</label>
<select name="loc" style="width:197px; height:44px;" required>
<OPTION><?php echo $loc; ?></OPTION>
<option></option>
<OPTION>Lagos</OPTION>
<option>Abuja FCT</option>
<option>Abia</option>
<option>Adamawa</option>
<option>Akwa Ibom</option>
<option>Anambre</option>
<option>Bachi</option>
<option>Bayelsa</option>
<option>Benue</option>
<option>Borno</option>
<option>Cross River</option>
<option>Delta</option>
<option>Ebonyi</option>
<option>Edo</option>
<option>Ekiti</option>
<option>Enugu</option>
<option>Gombe</option>
<option>Imo</option>
<option>Jigawa</option>
<option>Kaduna</option>
<option>Kano</option>
<option>Kastina</option>
<option>Kebbi</option>
<option>Kogi</option>
<option>Kwara</option>
<option>Nassarawa</option>
<option>Niger</option>
<option>Ogun</option>
<option>Ondo</option>
<option>Osun</option>
<option>Oyo</option>
<option>Plateau</option>
<option>Rivers</option>
<option>Sokoto</option>
<option>Taraba</option>
<option>Yobe</option>
<option>Zamfara</option>
    </select>
			</div>
</td>
  </tr>

  <tr>
    <td><div id="form-card" class="form-field">
				<label for="address">Address:</label>
				<input id="address" name="address" maxlength="100" value="<?php echo $add; ?>" required>
			</div></td>
    <td><div id="form-card" class="form-field">
                <label for="phone">Phone:</label>
				<input id="phone" name="phone" maxlength="11" value="<?php echo $phone; ?>" required>
			</div></td>
  </tr>

  <tr>
    <td><div id="form-card" class="form-field">
				<label for="email">Email:</label>
				<input id="email" name="email" maxlength="50" value="<?php echo $email; ?>" required>
			</div></td>
    <td><div id="form-card" class="form-field">
                <label for="occupation">RC Number:</label>
				<input id="id" name="id" maxlength="50" value="<?php echo $id; ?>" required>
			</div></td>
  </tr>
</table>
<br><div align="left"><h1 style="font-size:18px; font-weight:bold; color:#000;">VEHICLE INFORMATION</h1></div><br><br>
<table border="0" style="width:auto;">
  <tr>
  <td colspan="2">Insurance Class: <font color="#FF0000">Motor Third Party</font><br><br></td>
  </tr>
 
 <tr>
  <td><div id="form-card" class="form-field">
                <label for="car">Car:</label>
  <input type="hidden" name="car" id="car" />
  <select name="country" id="country" style="width:197px; height:44px; border-color:#ddd; border-radius:5px;" required onchange="form.car.value=this.options[this.selectedIndex].text">
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
	</div></td>
  <td>
   <div id="form-card" class="form-field">
                <label for="model">Model:</label>
<input type="hidden" name="model" id="model" />
  <select name="state" id="state" style="width:197px; height:44px; border-color:#ddd; border-radius:5px;" required onchange="form.model.value=this.options[this.selectedIndex].text">
  </select>
  </div>
  </td>
  </tr>
  
	<tr>
    <td><div id="form-card" class="form-field">
                <label for="reg_no">Registration No:</label>
                <div style="margin:10px 0px;">
				<input id="reg_no" name="reg_no" maxlength="20" value="<?php echo $_POST['reg_no']; ?>" required>
                </div>
			</div></td>
    <td><div id="form-card" class="form-field">
				<label for="engine_no">Engine No:</label><br>
				<input id="engine_no" name="engine_no"  maxlength="50" value="<?php echo $_POST['engine_no']; ?>" required>
			</div>
</td>
  </tr>

  <tr>
    <td><div id="form-card" class="form-field">
				<label for="chasis_no">Chasis No:</label>
				<input id="chasis_no" name="chasis_no" maxlength="17" value="<?php echo $_POST['chasis_no']; ?>" required>
			</div></td>
    <td><div id="form-card" class="form-field">
                <label for="color">Colour:</label>
				<input id="color" name="color" maxlength="20" value="<?php echo $_POST['colour']; ?>" required>
			</div></td>
  </tr>
  
  <tr>
    <td><div id="form-card" class="form-field">
				<label for="year">Year of Make:</label>
				<select name="year" id="year" style="color:#000; width:183px;" required>
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
			</div></td>
    <td><div id="form-card" class="form-field">
                <label for="state_reg">State of Registration:</label>
				<select name="state_reg" required id="state_reg" style="color:#000; width:183px;">
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
			</div></td>
  </tr>

  <tr>
    <td><div id="form-card" class="form-field">
				<label for="category">Category:</label>
				<select required style="width:197px; height:44px; border-color:#ddd; border-radius:5px;" name="category" style="color:#000; width:183px;">
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
			</div></td>
    <td><div id="form-card" class="form-field">
                <label for="usage">Usage:</label>
				<select style="width:197px; height:44px; border-color:#ddd; border-radius:5px;" name="usage" style="color:#000; width:183px;">
<option>Private</option>
</select>
			</div></td>
  </tr>
</table>
			
	<br><br>
		

   <table width="100%">
  <tr>
    <td colspan="2" align="center"><input type="submit" style="background: linear-gradient(135deg, #ccc 0%, #891C2E 100%);
  padding: 10px; border: none; border-radius: 50px; width:200px; color: white; font-weight: 400; font-size: 12pt;" value="Preview Details"></td>
  </tr>
</table>  

  
 		</form>
        <?php
		}}
		elseif($phone == '')
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