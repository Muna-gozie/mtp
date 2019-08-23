<?php
require('../../../api_config.php');

// Get Api details
$api = new Api;
$response = $api->getKey() ;

$url= $response['url'];
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


// echo 'Amount'.$amount.' Email'.$email.' Car'.$car.' Gender'.$gender.' Color '.$color.' Chasis No.'.$chasis.' Engine No.'.$engine.' Reg_no'.$regno.' Model.'.$model.' ID Type'.$id.' ID no.'.$id_no.' Occupation.'.$occupation.' Address'.$address.' Location.'.$location.' Title'.$title.' DOB.'.$dob.' Vehicle Name.'.$vehicle_name.' Mobile No.'.$mob.' LastName.'.$lname.' FirstName.'.$fname.' Registered State.'.$state_reg.' Year made'.$year.' Agent ID'.$agentid.' Agent Name.'.$agentname.' Card number.'.$card.'Pay ref'.$transaction_ref.' Type.'.$type.' Usage'.$usage.' Category '.$category.' Policy start date '.$policy_start_date.'<br>'; 



// Call Buy policy webservice

$buy_policy_params = array(
	'MTPApikey' => $key,
	'Title' => $title,
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
  
	// print_r($response);
  
	foreach($response->BuyPolicyResult as $item){
	  if(!is_numeric($item->PolicyNumber)){
		$policy_number = $item->PolicyNumber;
		$status_message = $item->StatusmSG;
	  }else{
		$policy_number = $item->PolicyNumber;
		$insured_id = $item->CustomerReference;
		$fullname = $item->Fullname;
		$policy_expiry_date = $item->ExpiryDate;
		$status_message = $item->StatusmSG;
		$certificate_number = $item->CertificateNos;
		$product = $item->Product;
	  }
	}
  
	// echo $policy_number.' '.$status_message.' '.$insured_id.' '.$fullname;
  
  }catch(SoapFault $e){
	$e->getMessage();
  }
  

?>



<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
    
    <meta http-equiv="refresh" content="120; URL=../../../" />
    
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="../../../img/favicon.png">
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
			<link rel="stylesheet" href="../../../css/linearicons.css">
			<link rel="stylesheet" href="../../../css/font-awesome.min.css">
			<link rel="stylesheet" href="../../../css/jquery.DonutWidget.min.css">
			<link rel="stylesheet" href="../../../css/bootstrap.css">
			<link rel="stylesheet" href="../../../css/owl.carousel.css">
			<link rel="stylesheet" href="../../../css/main.css">

                 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
            
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href="../../../_css/responsive-layered-slider.css" rel="stylesheet" type="text/css" />


<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
<link rel="stylesheet" href="../../../preview/scratchcard/css/style.css">

<script type="text/javascript" >
   function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
</script>

<style>
 .box {
  width: 40%;
  margin: 0 auto;
  background: rgba(255,255,255,0.2);
  padding: 35px;
  border: 2px solid #fff;
  border-radius: 20px/50px;
  background-clip: padding-box;
  text-align: center;
}

.button {
  font-size: 1em;
  padding: 10px;
  color: #fff;
  border: 2px solid #06D85F;
  border-radius: 20px/50px;
  text-decoration: none;
  cursor: pointer;
  transition: all 0.3s ease-out;
}
.button:hover {
  background: #06D85F;
}

.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
  margin: 70px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 30%;
  position: relative;
  transition: all 5s ease-in-out;
}

.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: #06D85F;
}
.popup .content {
  max-height: 30%;
  overflow: auto;
}

@media screen and (max-width: 700px){
  .box{
    width: 70%;
  }
  .popup{
    width: 70%;
  }
}
</style>
<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <link rel="stylesheet" href="css2/style.css">
</head>
<body style="background-image:url(../../../img/happy2.jpg); background-size: cover; background-repeat: no-repeat;">

			<!-- Start Header Area -->
			<header class="default-header">
				<nav class="navbar navbar-expand-lg  navbar-light">
					<div class="container">
						  <a class="navbar-brand" href="http://motorthirdpartyonline.com">
						  	<img src="../../../img/logo.png" alt="" style="height:60px;">
						  </a>
						  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						    <span class="navbar-toggler-icon"></span>
						  </button>

						  <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
						    <ul class="navbar-nav">
								<li><a href="https:www.chiplc.com">Back To Website</a></li>
								<li><a href="http://motorthirdpartyonline.com/print-certificate">Print Certificate</a></li>
								<li><a href="http://motorthirdpartyonline.com/renew-policy">Renew Policy</a></li>								
						    </ul>
						  </div>						
					</div>
				</nav>
			</header>
			<!-- End Header Area -->

				

			
			<!-- start service Area-->
            <br><br><br><br><br><br><br><br>
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
					<div class="row">
	<?php 
		if(!is_numeric($policy_number)){
	?>

<body style="background-image:url(../img/road2.png);">
          <div class="modalbox success col-sm-8 col-md-6 col-lg-5 center animate">
          <div class="icon">
          <span class="glyphicon glyphicon-thumbs-down"></span>
          </div>
          <!--/.icon-->
          <h1> <?php echo $policy_number ?> </h1>
            <p style="margin-top:-30px; font-size:14px; line-height:25px;"><?php echo $status_message; ?></p>
            
            <!-- <a href="../../index.php"><button onclick="goBack()" style="background: linear-gradient(135deg, #891C2E 0%, #CCC 100%);
          padding: 10px; border: none; border-radius: 50px; width:200px; color: white; font-weight: 400; font-size: 12pt;">Try Again</button></a> -->

          <button onclick="goBack()" style="background: linear-gradient(135deg, #891C2E 0%, #CCC 100%);
          padding: 10px; border: none; border-radius: 50px; width:200px; color: white; font-weight: 400; font-size: 12pt;">Try Again</button>
            
          <script>
            function goBack() {
            //  window.history.back();
            window.history.go(-1);
            }
          </script>
          <br><br><br>
            Redirecting you back to the home page in...
              <div style="margin-left:70px;">  
          <div class="countdown">
          <div class="bloc-time min" data-init-value="2">
          <span class="count-title"></span>

          <div class="figure min min-1">
          <span class="top">0</span>
          <span class="top-back">
          <span>0</span>
          </span>
          <span class="bottom">0</span>
          <span class="bottom-back">
          <span>0</span>
          </span>        
          </div>

          <div class="figure min min-2">
          <span class="top">0</span>
          <span class="top-back">
          <span>0</span>
          </span>
          <span class="bottom">0</span>
          <span class="bottom-back">
          <span>0</span>
          </span>
          </div>
          </div>

          <div class="bloc-time sec" data-init-value="0">
          <span class="count-title"></span>

          <div class="figure sec sec-1">
          <span class="top">0</span>
          <span class="top-back">
          <span>0</span>
          </span>
          <span class="bottom">0</span>
          <span class="bottom-back">
          <span>0</span>
          </span>          
          </div>

          <div class="figure sec sec-2">
          <span class="top">0</span>
          <span class="top-back">
          <span>0</span>
          </span>
          <span class="bottom">0</span>
          <span class="bottom-back">
          <span>0</span>
          </span>
          </div>
          </div>
          </div>
          </div>
          <br><br><br><br><br><br><br>
          <a href="../" style="text-decoration:none;"><img src="../../../img/home.fw.png" width="35" height="30">
          <br><font style="font-size:10px; color:#991F36">Go Home</font></a><br><br>
          <span class="change" style="color:#991F36;">Consolidated Hallmark Insurance Plc.</span>
          </div>
          <!--/.success-->
          </div>
          <!--/.row-->

	<?php 
		}else{
	?>

<div class="modalbox success col-sm-8 col-md-6 col-lg-5 center animate">
			<div class="icon">
				<span class="glyphicon glyphicon-ok"></span>
			</div>
			<!--/.icon-->
			<h1>Success!</h1>
             <br><br>
			<p style="margin-top:-30px;">Thank You, we've Sent Your Certificate And A Receipt Of Purchace To Your E-mail
      </p>
            <br>
            <form action="../../../print" method="get" target="_blank" name="form">
           <input type="hidden" id="fullname" name="fullname" value="<?php echo $fullname; ?>">
            <input type="hidden" name="policy" value="<?php echo $policy_number; ?>">
            <input type="hidden" name="phone" value="<?php echo $phone; ?>">
            <input type="hidden" name="expiry" value="<?php echo $policy_expiry_date; ?>">
            <input type="hidden" name="cert" value="<?php echo $certificate_number; ?>">
            <input type="hidden" name="regno" value="<?php echo $regno; ?>">
            <input type="hidden" name="car" value="<?php echo $car; ?>">
            <input type="hidden" name="amount" value="<?php echo $amount; ?>">
            <input type="hidden" name="model" value="<?php echo $model; ?>">
            <input type="hidden" name="year" value="<?php echo $year; ?>">
            <input type="hidden" name="date" value="<?php echo $policy_start_date; ?>">
            <input type="submit" name="submit" value="View Certificate" style="background: linear-gradient(135deg, #891C2E 0%, #CCC 100%);
  padding: 10px; border: none; border-radius: 50px; width:200px; color: white; font-weight: 400; font-size: 12pt;">
            </form>
            <br><br>
            Redirecting you back to the home page in...
             <div style="margin-left:70px;">  
  <div class="countdown">
    <div class="bloc-time min" data-init-value="2">
      <span class="count-title"></span>

      <div class="figure min min-1">
        <span class="top">0</span>
        <span class="top-back">
          <span>0</span>
        </span>
        <span class="bottom">0</span>
        <span class="bottom-back">
          <span>0</span>
        </span>        
      </div>

      <div class="figure min min-2">
       <span class="top">0</span>
        <span class="top-back">
          <span>0</span>
        </span>
        <span class="bottom">0</span>
        <span class="bottom-back">
          <span>0</span>
        </span>
      </div>
    </div>

    <div class="bloc-time sec" data-init-value="0">
      <span class="count-title"></span>

        <div class="figure sec sec-1">
        <span class="top">0</span>
        <span class="top-back">
          <span>0</span>
        </span>
        <span class="bottom">0</span>
        <span class="bottom-back">
          <span>0</span>
        </span>          
      </div>

      <div class="figure sec sec-2">
        <span class="top">0</span>
        <span class="top-back">
          <span>0</span>
        </span>
        <span class="bottom">0</span>
        <span class="bottom-back">
          <span>0</span>
        </span>
      </div>
    </div>
  </div>
</div>
            <br><br><br><br><br><br><br>
<a href="../../../"><img src="../../../img/home.fw.png" width="35" height="30">
<br><font style="font-size:10px; color:#991F36">Go Home</font></a><br><br>
  <span class="change" style="color:#991F36;">Consolidated Hallmark Insurance Plc.</span>
		</div>
		<!--/.success-->
	</div>
	<!--/.row-->

	<?php 
		}
	?>

    <br>

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

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js'></script>
<script  src="js/index.js"></script>
			<script src="../../js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script src="../../js/vendor/bootstrap.min.js"></script>
			<script src="../../js/jquery.ajaxchimp.min.js"></script>
			<script src="../../js/parallax.min.js"></script>			
			<script src="../../js/owl.carousel.min.js"></script>			
			<script src="../../js/jquery.sticky.js"></script>
			<script src="../../js/jquery.DonutWidget.min.js"></script>
			<script src="../../js/jquery.magnific-popup.min.js"></script>			
			<script src="../../js/main.js"></script>	
		</body>
	</html>