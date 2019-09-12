<?php
require('../api_config.php');

error_reporting(0);
if(!isset($_POST['Regno'])) 
{
	echo '<script type="text/javascript">alert("ERROR!!! UNAUTHORIZED BYPASS ACCESS");
      window.location.assign("../")
      </script>';
       exit();
}
$Regno = htmlentities($_POST['Regno']);

 // Prevent unauthorized access
//  if(!isset($_POST['email'])) 
//  {
//  echo '<script type="text/javascript">alert("ERROR!!! UNAUTHORIZED BYPASS ACCESS");
//      window.location.assign("../")
//      </script>';
//        exit();	
//  }


$api = new Api;
$response = $api->getKey();

// Get Api details
$url = $response['url'];
$key = $response['key'];
$api_params = $response['api_params'];

$param = [
	'MTPApikey' => $key,
	'regno' => $Regno
];

$client = new SoapClient($url,$api_params);
$results = $client->ConfirmMotorPolicy($param);

foreach($results->ConfirmMotorPolicyResult as $item){
	$policy_number = $item->PolicyNumber;
	$policy_holder = $item->Policyholder;
	$vehicle_brand = $item->Brand;
	$vehicle_model = $item->Model;
	$registration_number = $item->Vehreg;
	$color = $item->color;
	$premium = $item->Premium;
	$insurance_type = $item->insurancetype;
	$policy_start_date = $item->startDate;
	$expiry_date = $item->ExpiryDate;
}

if(empty($policy_number)){
	echo '<script type="text/javascript">alert("ERROR!!! THIS POLICY DOES NOT EXIST");
     window.location.assign("../")
     </script>';
       exit();
}

// echo $policy_number;

?>

<style>

#start_date{
	height: 31px;
}

</style>

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

			<link rel="stylesheet" href="../asset/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
			<link rel="stylesheet" href="../asset/bootstrap-datepicker/css/bootstrap-datepicker.standalone.min.css">
			<script src="https://kit.fontawesome.com/d55b898dfe.js"></script>
            
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
	/* font-size: 18px;
	font-family: cursive;
	color: white;
	height: 15px; */
	/* animation: blink 1s linear infinite; */
}

/* @keyframes blink{
0%{opacity: 0.2;}
50%{opacity: .5;}
100%{opacity: 1;}
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
	if($Regno != '')
	{
          echo 'Confirm Your Details &raquo;&raquo;';
	}
	elseif($Regno == '')
	{
          echo 'No Details Found &raquo;&raquo;';
	}
	?>	  
		  </p></marquee>
		</div>
	</section>
	<section id="right">
    <?php
	// if(($phone != '') && ($type == 'Individual'))
	// if($Regno != '' && $insurance_type!='COMPREHENSIVE')
	if($Regno != '')
	{
	?>
    <div align="center"><h1 style="font-size:18px; font-weight:bold; color:#008C23;"><img src="happy.fw.png" width="80" height="80"><br>WELCOME BACK <?php echo strtoupper($lname.' '.$fname); ?></h1></div> <hr>
<h1 class="form-title">POLICY INFORMATION</h1><br>
        <form name="form" id="form" action="../pin_purchase.php" method="POST">
		<input type="hidden" name="insurance_type" value="<?php echo $insurance_type; ?>" />

		<input type="hidden" name="amount" value="<?php echo $premium; ?>" />
        <!-- <input type="hidden" name="type" value="<?php // echo $type; ?>" /> -->
		

<table border="0" style="width:auto;">
  <tr>
    <!-- Hidden title --> 
	<!-- <input type="hidden" id="title" name="title" maxlength="19" value="<?php echo $title; ?>"> -->
	
	<div id="form-card" class="form-field full-width">
		<label for="policy_holder">Policy Holder:</label>
		<input id="policy_holder" name="policy_holder" maxlength="19" value="<?php echo $policy_holder; ?>" required disabled>
		<!-- Required hidden input for next page -->
		<!-- <input type="hidden" id="policy_holder" name="policy_holder" maxlength="19" value="<?php echo $policy_holder; ?>"> -->
	</div>
	
  </tr>

  <tr>
		<div id="form-card" class="form-field full-width">
			<label for="policy_number">Policy Number:</label>
			<input id="policy_number" name="policy_number" maxlength="100" value="<?php echo $policy_number; ?>" disabled required>
			<!-- Hidden -->
			<!-- <input type="hidden" id="policy_number" name="policy_number" maxlength="100" value="<?php echo $policy_number; ?>"> -->
		</div>
		
  </tr>


<tr>

	<td>
		<div id="form-card" class="form-field" >
			<label for="vehicle_brand">Vehicle Brand:</label>
			<input id="vehicle_brand" name="brand" class="input-1" maxlength="50" value="<?php echo $vehicle_brand; ?>" required disabled>
			<!-- Hidden -->
			<input type="hidden" id="vehicle_brand" name="vehicle_brand" maxlength="50" value="<?php echo $vehicle_brand; ?>" >
		</div>
	</td>
	

	<td>
		<div id="form-card" class="form-field">
			<label for="vehicle_model">Vehicle Model:</label>
			<input  name="model" class="input-2" value="<?php echo $vehicle_model; ?>" required disabled>
			<!-- Hidden -->
			<input type="hidden"  name="vehicle_model" class="input-2" value="<?php echo $vehicle_model; ?>">
		</div>
	</td>
</tr>
  

<tr>
	<td>
		<div id="form-card" class="form-field">
			<label for="reg_no">Registration Number:</label>
			<input id="reg_no" class="input-1" name="reg_no" maxlength="11" value="<?php echo $registration_number; ?>" disabled required>
			<!-- Hidden -->
			<input type="hidden" id="reg_no" class="input-1" name="reg_no" maxlength="11" value="<?php echo $registration_number; ?>">
		</div>
	</td>
	
	<td>
		<div id="form-card" class="form-field">
			<label for="color">Color:</label>
			<input id="color" class="input-2"  name="color" maxlength="50" value="<?php echo $color; ?>" disabled required>
			<!-- Hidden -->
			<input type="hidden" id="color" class="input-2"  name="color" maxlength="50" value="<?php echo $color; ?>" >
		</div>
	</td>	
</tr>
  
<tr>
<td>
	<div id="form-card" class="form-field">
		<label for="start_date">Policy Start Date:</label>
		<input id="start_date" class="input-1" name="start_date" maxlength="50" value="<?php echo $policy_start_date ?>" disabled required>
		<!-- Hidden-->
		<input type="hidden" id="start_date" class="input-1" name="start_date" maxlength="50" value="<?php echo $policy_start_date; ?>">	
		
	</div>
</td>

<td>
	<div id="form-card" class="form-field">
		<label for="ID Number">Expiry Date:</label>
		<input id="expiry_date" class="input-2" name="expiry_date" maxlength="50" value="<?php echo $expiry_date; ?>" required disabled>
		<!-- Hidden -->
		<input type="hidden" id="expiry_date" class="input-2" name="expiry_date" maxlength="50" value="<?php echo $expiry_date; ?>" >
	</div>
</td>

</tr>

<tr> 
	<td colspan="3" class="form-title" style="text-align:center"> PAY WITH SCRATCHCARD </td>

</tr>

<tr>
	<td>
		<input type="text" class="input-1" minlength="8" maxlength="10" id="cardno" name="cardno" placeholder="Type Scratch Card Pin Here..." required>
		<!-- <div id="form-card" class="form-field">
			<br><br>
			<input type="text" minlength="8" maxlength="10" id="cardno" name="cardno" placeholder="Type Scratch Card Pin Here..." required>
		</div> -->
	</td>

	<td>
		<div id="datepicker" class="input-group date " data-provide="datepicker">
			<input type="text" id="new_start_date" name="new_start_date" class="input-2" placeholder="Policy start date" readonly>
			<div class="input-group-addon">
				<span class="date-icon"><i class="far fa-calendar-alt" style="color: black"></i></span>
				
				<!-- <span class="glyphicon glyphicon-th"></span> -->
			</div>
		</div>
	</td>
</tr>

</table>
			
	<br><br>		

   <table width="100%">
	<tr>
		<td colspan="2" align="center">
			<input type="submit" style="background: linear-gradient(135deg, #ccc 0%, #891C2E 100%);
		padding: 10px; border: none; border-radius: 50px; width:200px; color: white; font-weight: 400; font-size: 12pt;" name="renew_now" value="Proceed">
		</td>
	</tr>
</table>  

  
 		</form>
<?php

// }elseif($Regno !='' && $insurance_type =='COMPREHENSIVE'){
}elseif($Regno !=''){

	echo '<br><br><br><br><br><br><br><br><br><center><img src="failed.fw.png" width="92" height="120"><br>
    			<div style="margin:-14px 0px;"> <br><br><font color="#891C2E" style="font-weight:600; line-height:30px;">SORRY, THIS POLICY CAN NOT BE RENEWED. MAKE SURE YOU ARE RENEWING A THIRD PARTY POLICY. PLEASE CHECK AND TRY AGAIN!</font></div>
				<br><br>
				<a href="#" class="btn btn-danger" onclick="goBack()">&larr; Go Back</a>
<script>
function goBack() {
    window.history.back();
}
</script>
				</center>';

}else{

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

} ?>

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
			<script src="../asset/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

		</body>
	</html>

