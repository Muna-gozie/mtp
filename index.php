<?php
error_reporting(0);
date_default_timezone_set("Africa/Lagos");
include("db.php");
require('api_config.php');

// Get api details
$api = new Api;
$response = $api->getKey();


?>
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/favicon.png">
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
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/jquery.DonutWidget.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
            
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
            
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href="_css/Icomoon/style.css" rel="stylesheet" type="text/css" />
<link href="_css/responsive-layered-slider.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="_scripts/jquery-2.0.2.min.js"></script>
<script type="text/javascript" src="_scripts/jquery-ui-1.10.4.min.js"></script>
<script type="text/javascript" src="_scripts/responsive-layered-slider.js"></script> 

<style>
[type="date"] {
  background:#fff url(https://cdn1.iconfinder.com/data/icons/cc_mono_icon_set/blacks/16x16/calendar_2.png)  97% 50% no-repeat ;
}
[type="date"]::-webkit-inner-spin-button {
  display: none;
}
[type="date"]::-webkit-calendar-picker-indicator {
  opacity: 0;
}

/* Important part */

input {
  margin-left:3px;
  border: 2px solid #999;
  border-radius: 5px;
  background-color: #fff;
  padding: 10px 5px;
  box-shadow: inset 0 3px 6px rgba(0,0,0,0.1);
  width: 190px;
}

.wrapper {
  margin: 30px auto;
  width: 80%;
  font-family: sans-serif;
  color: #555;
  font-size: 14px;
  line-height: 24px;
}
h1 {
  font-size: 20px;
  font-weight: bold;
  text-align: center;
  text-transform: uppercase;
}
h1 + p {
  text-align: center;
  margin: 20px 0;
  font-size: 16px;
}
.tabs li {
  float: left;
  width: 20%;
}
.tabs a {
  display: block;
  text-align: center;
  text-decoration: none;
  text-transform: uppercase;
  color: #888;
  padding: 20px 0;
  border-bottom: 2px solid #888;
  background: #f7f7f7;
}
.tabs a:hover,
.tabs a.active {
  background: #ddd;
}
.tabgroup div {
  padding: 30px;
  box-shadow: 0 3px 10px rgba(0, 0, 0, 0.3);
}
.clearfix:after {
  content: "";
  display: table;
  clear: both;
}



#header{
	background-color: #3f8dbf;
	float: left;
	width: 100%;
	height: 50px;
	color: rgba(255,255,255,1);
	line-height: 50px;
}
#header a {
	color: rgba(255,255,255,1);
	text-decoration: none;
	display: block;
	font-size: 15px;
}

#header-left{
	float: left;
	height: 50px;
}
#header-left:hover #header-left-icon{
	background-color: #3F8DBF;
	}
#header-left:hover #header-left-text{
	background-color: #599BC8;
	}
#header-left-icon{
	float: left;
	height: 50px;
	width: 50px;
	text-align: center;
	background-color: #35759F;
	-webkit-transition: background 0.5s;
	-moz-transition: background 0.5s;
	-o-transition: background 0.5s;
	transition: background 0.5s;
}
#header-left-icon a {
	font-size: 25px;
}
#header-left-text{
	float: left;
	height: 50px;
		-webkit-transition: background 0.5s;
	-moz-transition: background 0.5s;
	-o-transition: background 0.5s;
	transition: background 0.5s;
}
#header-left-text a {
	padding-left: 20px;
	padding-right: 20px;
}

#header-right{
	float: right;
	height: 50px;
}
#header-right:hover #header-right-icon{
	background-color: #3F8DBF;
	}
#header-right:hover #header-right-text{
	background-color: #599BC8;
	}
#header-right-icon{
	float: right;
	height: 50px;
	width: 50px;
	text-align: center;
	background-color: #35759F;
	-webkit-transition: background 0.5s;
	-moz-transition: background 0.5s;
	-o-transition: background 0.5s;
	transition: background 0.5s;
}
#header-right-text{
	float: right;
	height: 50px;
    -webkit-transition: background 0.5s;
	-moz-transition: background 0.5s;
	-o-transition: background 0.5s;
	transition: background 0.5s;
}
#header-right-text a {
	padding-right: 20px;
	padding-left: 20px;
}


.login p {
  margin: 20px 0 0;
}

.login p:first-child {
  margin-top: 0;
}

.login input[type=text], .login input[type=password] {
  width: 278px;
}

.login p.remember_me {
  float: left;
  margin-left: 20px;
  line-height: 42px;
}

.login p.remember_me label {
  font-size: 12px;
  color: #9EACB2;
  cursor: pointer;
}

.login p.remember_me input {
  position: relative;
  bottom: 1px;
  margin-right: 4px;
  vertical-align: middle;
}

.login p.submit {
  text-align: right;
}

.login-help {
  margin: 20px 0;
  font-size: 11px;
  color: white;
  text-align: center;
  text-shadow: 0 1px #2a85a1;
}

.login-help a {
  color: #cce7fa;
  text-decoration: none;
}

.login-help a:hover {
  text-decoration: underline;
}

::-webkit-input-placeholder {
  color: #B6BEC1;
  font-size: 13px;
}

input {
  font-family: 'MONTSERRAT', Tahoma, Verdana, sans-serif;
  font-size: 12px;
}

input[type=text], input[type=password] {
  margin: 4px;
  padding: 0 10px;
  width: 200px;
  height: 46px;
  color: #404040;
  background: white;
  border: 2px solid;
  border-color: #9EACB2;
  border-radius: 4px;
  
}

input[type=text]:focus, input[type=password]:focus {
  border-color: #6EC3C7;
  outline-color: #6EC3C7;
  outline-offset: 2;
}

input[type=submit] {
  padding: 0 40px;
  height: 46px;
  font-size: 12px;
  color: #fff;
  text-shadow: none;
  background: #891C2E;
  border: 1px solid;
  border-color: #ccc;
  border-radius: 4px;
}

input[type=submit]:active {
  background: #07A06D;
}

input[type=submit]:hover {
  background: #CCC;
}


.lt-ie9 input[type=text], .lt-ie9 input[type=password] {
  line-height: 34px;
}
.error 
{
	color:red;	
}


em{
		animation: blink 1s linear infinite;
	}
@keyframes blink{
0%{opacity: 0.2;}
50%{opacity: .5;}
100%{opacity: 1;}
}

.main{
  background-color: #86192C;
}

.buyer-category{
  text-align: center;
  background-color: #fff;
  padding: 2em 1em;
  border-radius: 4em;
  -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
  -moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
  box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.40);
}

section#buyers-modal{
  /* border: 1px solid; */
  padding: 0 2em;
}

.click-here{
  width: 100px;
  font-size: 1em;
  margin-top: 1em;
  box-shadow: 2px 3px 8px -4px rgb(0, 0, 0.9);
  background-color: #86192c;
  border: 2px solid #86192c;
  transition: all ease-in;
}
.click-here:hover{
  background-color: #fff;
  color: #86192c;
  border: 2px solid #86192c;
}
.title-head{
  color: #fff;
  text-align: left;
  font-size: 2em;
  font-weight: bold;
}

.buyer-type{
  color: #86192c;
  font-weight: 700;
}

.modal-footer p{
  color: #fff;
}

</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>

<script type="text/javascript" src="js.js"></script>

<script type="text/javascript">
function CheckTitle(val){
 var element=document.getElementById('title2');
 if(val=='others')
   element.style.display='block';
 else  
   element.style.display='none';
}
</script> 	
<link rel="stylesheet" href="reset.css"> <!-- CSS reset -->
<link rel="stylesheet" href="style.css"> <!-- Resource style -->


<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5bc76897dc8d7b75613e43a3/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</head>

		<body>

<!-- Start up Modal -->
<div id="myModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content main">
    <div class="modal-header">
      <div class="col-md-3">
        <img src="img/pos.fw.png" width="114">
      </div>
      <div class="col-md-9">
          <h1 class="title-head">Motor Third Party Insurance</h3>
      </div>
      
      <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button> -->
    </div>
    <div class="modal-body">
      
        <section id="buyers-modal">
          <div class="row">
            <div class="col-md-4 col-xs-12">
              <div class="buyer-category">
                <div class="img-border"><img src="img/user-img.png" width="130" alt=""></div>
                <h2 class="buyer-type">Individual</h2>
                <a href="#" data-toggle="modal" data-target="#popUpWindow">
                  <button class="btn btn-primary click-here">Buy Now</button>
                </a>
              </div>
            </div>

            <div class="col-md-4 col-xs-12">
              <div class="buyer-category">
                <div class="img-border"><img src="img/corporate-1.jpg" width="130" alt=""></div>
                <h2 class="buyer-type">Coporate Entity</h2>
                <a href="#" data-toggle="modal" data-target="#popUpWindow2">
                  <button class="btn btn-primary click-here">Buy Now</button>
                </a>
                
              </div>
            </div>

            <div class="col-md-4 col-xs-12">
              <div class="buyer-category">
                <div class="img-border"><img src="img/returning-cus1.jpg" width="130" alt=""></div> 
                <h2 class="buyer-type">Existing Policy Holder</h2>
                <a href="#" data-toggle="modal" data-target="#popUpWindow1">
                  <button class="btn btn-primary click-here">Buy Now</button>
                </a>
              </div>
            </div>
            </div>
          </div> 
        </section>
            
    <div class="modal-footer">
      <p> &copy Consolidated Hallmark Insurance</p>
      <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <button type="button" class="btn btn-primary">Save changes</button> -->
    </div>
    
    </div>
  </div>
</div>
<!-- End of Start up Modal -->


     
  <!-- Start Header Area -->
  <header class="default-header">
    <nav class="navbar navbar-expand-lg  navbar-light">
      <div class="container">
        <a class="navbar-brand" href="http://motorthirdpartyonline.com">
        <img src="img/logo.png" alt="" style="height:60px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
          <ul class="navbar-nav">
          <li><a href="https://chiplc.com">Back To Website</a></li>
          <li><a href="#" data-toggle="modal" data-target="#popUpWindow3">Print Certificate</a></li>
          <li><a href="#" data-toggle="modal" data-target="#popUpWindow4">Renew Policy</a></li>
          </ul>
        </div>						
      </div>
    </nav>
  </header>
  <!-- End Header Area -->

			<!-- start banner Area -->

				<div class="container">
					<div class="row">
            <div class="sim-slider" data-width="2600" data-height="1240" data-animation="500" data-current="true" data-progress="true"><br><br><br>
            <div class="sim-slider-inner">  
            <div class="sim-slider-slide">

            <div class="sim-slider-layer" data-effect="zoomInDown" data-width="450" data-height="124" data-left="1000" data-top="150"><img src="img/top1.png" /></div>
            <div class="sim-slider-layer" data-effect="bounceIn" data-width="600" data-height="300" data-left="75" data-top="500"><img src="img/scratchcard1.png" /></div>
            <div class="sim-slider-layer" data-effect="bounceIn" data-width="600" data-height="300" data-left="950" data-top="500"><img src="img/auto_insurance.png" /></div>
            <div class="sim-slider-layer" data-effect="bounceIn" data-width="600" data-height="300" data-left="1811" data-top="500"><img src="img/scratchcard4.png" /></div>

            </div>
            </div>      
            </div>	
          </div>
				</div>

			<!-- End banner Area -->	

			
			<!-- start service Area-->
			<section class="service-area pt-100 pb-150" id="service" style="margin-top:-100px;">
				<div class="container">
                
                
    <div class="modal fade" id="popUpWindow1">
    <div class="modal-dialog" style="width:100%;overflow-y:auto; max-height:90%;">
      <div class="modal-content">
        <!-- header -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title"><font style="font-weight:bold">Motor Third Party Insurance Registration</font></h3>
        </div>
       <div class="modal-header">
        <form action="customer/" name="form1" method="post">
           <div align="right"><img src="img/returnee.png" width="50" height="50"> <font style="font-weight:bold; color:#000;">RETURNING CUSTOMER</font></div>
<hr>
           <font color="#000000">
<table width="100%" border="0">
  <tr>
    <td colspan="2"><input type="text" style="width:300px;" maxlength="11" name="phone" placeholder="TYPE YOUR REGISTRATION NO. HERE" required></td>
  </tr>
  
</table>

           </font>
          
        </div>
       <!-- footer -->
        <div class="modal-footer">
          <input type="submit" name="submit" value="Check Details">
        </div>
        </form>
      </div>
    </div>
  </div>
               
                
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10" style="font-weight:bold;">Buy Motor Third Party Insurance</h1>
								<p style="color:#000;">Explore our newly improved portal that helps you make easy and seamless purchases of your motor insurance</p>
							</div>
						</div>
					</div>	
					<div class="col-lg-12 col-md-12">
<ul class="cd-pricing">

<li>
<a href="#" style="text-decoration:none; color:#FFF;" data-toggle="modal" data-target="#popUpWindow5">
			<header class="cd-pricing-header">
				<h2 style="color:#FFF;">Bus</h2>
			</header> <!-- .cd-pricing-header -->

			<div class="cd-pricing-features" align="left">
				<ul>
				<h1 style="font-size:18px;">
                <img src="img/bus2.png" width="60" height="40"><br>
                ₦<?php 
                    $url = $response['url'];
                    $api_param = $response['api_params'];
                    $clientx = new SoapClient($url,$api_param);
                    $res2x = $clientx->FindPremiumThirdParty(array('Vehicle' => 'bus'));
                    $bus = $res2x->FindPremiumThirdPartyResult->ThirdPartyPremium->Premium; 
                    echo number_format($bus);
                  ?>
				  </h1>
				</ul>
			</div> <!-- .cd-pricing-features -->
</a>
		</li>
		
		<li>
		 <a href="#" style="text-decoration:none; color:#FFF;" data-toggle="modal" data-target="#popUpWindow6">
			<header class="cd-pricing-header">
				<h2 style="color:#FFF;">Car</h2>

			</header> <!-- .cd-pricing-header -->

			<div class="cd-pricing-features" align="left">
				<ul>
				<h1 style="font-size:18px;">
				<img src="img/car.jpg" width="60" height="40"><br>
                ₦<?php 
                  $res2b = $clientx->FindPremiumThirdParty(array('Vehicle' => 'car'));
                  $car = $res2b->FindPremiumThirdPartyResult->ThirdPartyPremium->Premium; 
                  echo number_format($car);
                ?>
        </h1>
				</ul>
			</div> <!-- .cd-pricing-features -->
		</a>
		</li>

		<li>
		     <a href="#" style="text-decoration:none; color:#FFF;" data-toggle="modal" data-target="#popUpWindow7">
			<header class="cd-pricing-header">
				<h2 style="color:#FFF;">Jeep</h2>

			</header> <!-- .cd-pricing-header -->

			<div class="cd-pricing-features" align="left">
				<ul>
				<h1 style="font-size:18px;">
				<img src="img/jeep.jpg" width="50" height="40"><br>
                ₦<?php 
                  $res2c = $clientx->FindPremiumThirdParty(array('Vehicle' => 'jeep'));
                  $jeep = $res2c->FindPremiumThirdPartyResult->ThirdPartyPremium->Premium; 
                  echo number_format($jeep);
                ?>
</h1>
				</ul>
			</div> <!-- .cd-pricing-features -->
		</a>
		</li>
	</ul> <!-- .cd-pricing -->

 <table width="200">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
  <br>
<ul class="cd-pricing">
<li>
    <a href="#" style="text-decoration:none; color:#FFF;" data-toggle="modal" data-target="#popUpWindow8">
			<header class="cd-pricing-header">
				<h2 style="color:#FFF;">Tricycle (Keke)</h2>

			</header> <!-- .cd-pricing-header -->

			<div class="cd-pricing-features" align="left">
				<ul>
				<h1 style="font-size:18px;">
                <img src="img/keke.jpg" width="40" height="40"><br>
               ₦<?php 
$res2f = $clientx->FindPremiumThirdParty(array('Vehicle' => 'keke'));
$keke = $res2f->FindPremiumThirdPartyResult->ThirdPartyPremium->Premium; 
echo number_format($keke);
?>
<?php 
/*$res2f = $clientx->FindPremiumThirdParty(array('Vehicle' => 'jeep'));
$keke = $res2f->FindPremiumThirdPartyResult->ThirdPartyPremium->Premium; 
echo number_format($keke);
*/
?></h1>
				</ul>
			</div> <!-- .cd-pricing-features -->
			</a>
		</li>
        
		<li>
		<a href="#" style="text-decoration:none; color:#FFF;" data-toggle="modal" data-target="#popUpWindow9">
			<header class="cd-pricing-header">
				<h2 style="color:#FFF;">SUV</h2>
			</header> <!-- .cd-pricing-header -->

			<div class="cd-pricing-features" align="left">
				<ul>
				<h1 style="font-size:18px;">
				<img src="img/suv.png" width="60" height="40"><br>
                ₦<?php 
$res2d = $clientx->FindPremiumThirdParty(array('Vehicle' => 'suv'));
$suv = $res2d->FindPremiumThirdPartyResult->ThirdPartyPremium->Premium; 
echo number_format($suv);
?></h1>
				</ul>
			</div> <!-- .cd-pricing-features -->
			</a>
		</li>
		
		<li>
		    <a href="#" style="text-decoration:none; color:#FFF;" data-toggle="modal" data-target="#popUpWindow10">
			<header class="cd-pricing-header">
				<h2 style="color:#FFF;">Truck</h2>

			</header> <!-- .cd-pricing-header -->

			<div class="cd-pricing-features" align="left">
				<ul>
				<h1 style="font-size:18px;">
				<img src="img/truck.jpg" width="50" height="40"><br>
                ₦<?php 
$res2e = $clientx->FindPremiumThirdParty(array('Vehicle' => 'truck'));
$truck = $res2e->FindPremiumThirdPartyResult->ThirdPartyPremium->Premium; 

echo number_format($truck);
?>
</h1>
				</ul>
			</div> <!-- .cd-pricing-features -->
			</a>
		</li>

	</ul> <!-- .cd-pricing -->
  <br>
 <center> <img src="img/chi.gif" style="width:300px;"></center>
 
 <table width="200">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<ul class="cd-pricing">
  <li>
<br>
<font style="font-size:15px; font-weight:700;">BUY AS AN INDIVIDUAL</font><br>
      <img src="img/new.png" width="100" height="100"><br>
<a href="#" style="text-decoration:none; color:#FFF;" data-toggle="modal" data-target="#popUpWindow"><img src="img/btn.png" width="250"></a>		
		</li>
		
		<li>
        <br>
		<font style="font-size:15px; font-weight:700;">BUY AS A CORPORATE ENTITY</font><br><img src="img/corporate.png" width="100" height="100"><br>
<a href="#" style="text-decoration:none; color:#FFF;" data-toggle="modal" data-target="#popUpWindow2"><img src="img/btn1.png" width="250"></a><br><br><br><br>
		</li>
		
			<li>
        <br>
		<font style="font-size:15px; font-weight:700;">BUY AS AN EXISTING CUSTOMER</font><br><img src="img/returnee.png" width="100" height="100"><br>
<a href="#" style="text-decoration:none; color:#FFF;" data-toggle="modal" data-target="#popUpWindow1"><img src="img/btn1.png" width="250"></a><br><br><br><br>
		</li>

	</ul> <!-- .cd-pricing -->
<br><br><br>
<table width="100%">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">
<p style="line-height:30px;">
Consolidated Hallmark Insurance Motor Third Party Online is committed to protecting your privacy. Motor Third Party uses techniques to encrypt, safeguard, and secure your personal information. Our privacy policy explains the controls we have in place. Please fill out our registration form by clicking on the registration link.</p>
<br><br>
<img src="img/banner.jpg" width="100%" height="500"></td>
  </tr>
</table>
<br><br><br><br><br><br><br>
					</div>
				</div>	
			</section>
			<!-- end service Area-->


<div style="margin-bottom:-200px;"></div>
		
			<!-- Start testimonial Area -->
			<section class="relative section-gap">
				<div class="container">
                <div class="modal fade" id="popUpWindow">
    <div class="modal-dialog" style="width:auto; overflow-y:auto; max-height:90%;">
      <div class="modal-content">
        <!-- header -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title"><font style="font-weight:bold">Motor Third Party Insurance Registration</font></h3>
        </div>
        <!-- body -->
        <div class="modal-header">
          <form action="preview/" name="form" id="form"  method="post">
          <input type="hidden" name="type" value="Individual">
          <div align="center"><img src="img/new.png" width="50" height="50">  <font style="font-weight:bold; color:#000;">NEW CUSTOMER</font></div><br>
 <font style="font-weight:bold; color:#000;">Personal Information</font> <hr>
           <font color="#000000">
<table style="width:auto;">
  <tr>
    <td>    
    <div style="margin-left:6px;">
    <select name="title" id="title" style="width:197px; height:44px; border-color:#ddd; border-radius:5px;" onchange="CheckTitle(this.value);"> 
    <option value="Mr">Title</option>
    <option>Mr</option>
    <option>Mrs</option>
    <option>Miss</option>
   <option>Chief</option>
   <option>Prof</option>
    <option>Alhaji</option>
    <option>Alhaja</option>
    <option>Otunba</option>
     <option value="others">Others</option>
    </select>
    <div style="margin-left:-5px;"><input type="text" name="title2" id="title2" placeholder="TYPE YOUR TITLE" style='display:none;'/></div>
    </div>
    </td>
       <td><input type="text" name="fname" placeholder="Firstname" required></td>
  </tr>
  <tr>
    <td><input type="text" name="lname" placeholder="Surname" required></td>
    <td><div style="margin-left:6px;">
    <select name="location" style="width:197px; height:44px; border-color:#ddd; border-radius:5px;">
<option value="Lagos">Location (Optional)</option>
<OPTION>Lagos</OPTION>
<option>Abuja FCT</option>
<option>Abia</option>
<option>Adamawa</option>
<option>Akwa Ibom</option>
<option>Anambra</option>
<option>Bauchi</option>
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
    </select></div></td>
  </tr>
  <tr>
    <td colspan="2"><input type="text" name="address" placeholder="Address" style="height:100px; width:425px;" required></td>
  </tr>
  <tr>
  <td><div style="font-size:14px; margin:-11.43px 6px; color:#ddd; font-weight:bolder;">Date Of Birth</div><br>
  <div style="margin-left:3px;">
  <table width="100%">
  <tr>
    <td><select required style="width:60px; height:44px; border-color:#ddd; border-radius:5px;" name="yearx" id="yearx" style="color:#000; border-radius:5px;">
<option>--Y--</option>
<?php
$yr = 2019;

while($yr >=1900)
{
	echo '<option>'. $yr. '</option>';
	--$yr;
}

?>
</select></td>
    <td><select required style="width:60px; height:44px; border-color:#ddd; border-radius:5px;" name="month" id="month" style="color:#000; border-radius:5px;">
<option>--M--</option>
<option value="01">Jan</option>
<option value="02">Feb</option>
<option value="03">Mar</option>
<option value="04">Apr</option>
<option value="05">May</option>
<option value="06">Jun</option>
<option value="07">Jul</option>
<option value="08">Aug</option>
<option value="09">Sep</option>
<option value="10">Oct</option>
<option value="11">Nov</option>
<option value="12">Dec</option>
</select></td>
    <td><select required style="width:60px; height:40px; border-color:#ddd; border-radius:5px;" name="day" id="day" style="color:#000; border-radius:5px;">
<option>--D--</option>
<option>01</option>
<option>02</option>
<option>03</option>
<option>04</option>
<option>05</option>
<option>06</option>
<option>07</option>
<option>08</option>
<option>09</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
</select></td>
  </tr>
</table>
</div>

<br>

  <div style="margin-top:-10px;"><input type="text" name="email" placeholder="Email" required style="width:210px;"></div><br><br>
  <div style="margin-top:-25px; margin-left:5px;">
<select name="identification" style="width:210px; height:44px; border-radius:5px;">
<option value="National ID">Means of ID. (Optional)</OPTION>
<option>National ID</option>
<option>Driver's Licence</option>
<option>International Passport</option>
<option>Permanent Voters Card (PVC)</option>
</select>
    </div>
  </td>
<td>
<div style="margin-left:5px; margin-top:30px;">
<br>
<select name="gender" style="width:197px; height:44px; border-radius:5px;">
<option value="Male">Gender (Optional)</option>
<option>Male</option>
<option>Female</option>
<option>Others</option>
</select>
</div>
<br>
<div style="margin-top:-10px;"><input type="text" name="phone" placeholder="Phone" maxlength="11" required></div><br><br>
   <div style="margin-top:-30px;"> <input type="text" name="id_no" placeholder="ID Number (Optional)"></div><br><br>
   <div style="margin-top:-20px;margin-left:-230px;"> <input type="text" style="width:430px;" name="occupation" placeholder="Occupation (Optional)"></div>
    </td>
  </tr>
 <tr>
  <td colspan="2"><hr><br><h3 class="modal-title"><font style="font-weight:bold">Vehicle Information</font></h3><hr>
    <div style="margin-left:6px;">Insurance Class: <font color="#FF0000" style="font-weight:bold;">(Motor Third Party)</font></div><br>
   </td>
  </tr>
 <tr>
  <td><div style="margin-left:6px;">
  <input type="hidden" name="car" id="car" />
  <select name="country" id="country" style="width:197px; height:44px; border-color:#ddd; border-radius:5px;" required onchange="form.car.value=this.options[this.selectedIndex].text">
			<option value=''>Vehicle Type</option>
			<?php 
			$sql = "select * from `cars` order by cars asc";
			$res = mysqli_query($con, $sql);
			if(mysqli_num_rows($res) > 0) {
				while($row = mysqli_fetch_object($res)) {
					echo "<option value='".$row->id."'>".ucfirst(strtolower($row->cars))."</option>";
				}
			}
			?>
		</select>
        </div></td>
  <td>
   <div style="margin-left:6px;">
   <input type="hidden" name="model" id="model" />
  <select name="state" id="state" style="width:197px; height:44px; border-color:#ddd; border-radius:5px;" required onchange="form.model.value=this.options[this.selectedIndex].text">
  </select>
  </div>
  </td>
  </tr>
  <tr>
  <td>
  <div style="margin-left:6px;">
<select style="width:197px; height:44px; border-color:#ddd; border-radius:5px;" name="year" id="year" style="color:#000; width:183px;">
<option value="">Year of Make</option>
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
  <div style="margin-left:0px;">
  <input type="text" name="reg_no" placeholder="Registration No" required>
  </div>
  </td>
  </tr>
  <tr>
  <td>
   <input type="text" name="engine_no" placeholder="Engine No" required>
    </td>
  <td>
  <div style="margin-left:0px;">
  <input type="text" name="chasis_no" minlength="17" maxlength="17" placeholder="Chasis No" required>
  </div>
  </td>
  </tr>
  <tr>
  <td>
   <input type="text" name="colour" placeholder="Colour" required>
    </td>
  <td>
  <div style="margin-left:6px;">
<select style="width:197px; height:44px; border-color:#ddd; border-radius:5px;" name="category" style="color:#000; width:183px;">
<option value="">Category</option>
<option>
    <?php 
        $url = $response['url'];
        $api_param = $response['api_params'];
        // $url = "http://63.33.166.144:3001/webservice/interapp.asmx?WSDL";
        $client = new SoapClient($url,$api_param);
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
$res3 = $client->FindPremiumThirdParty(array('Vehicle' => 'suv'));
echo substr(ucfirst(strtolower($res3->FindPremiumThirdPartyResult->ThirdPartyPremium->InsuranceClass)), 0, 4); 
echo " - ";
echo $res3->FindPremiumThirdPartyResult->ThirdPartyPremium->Premium; 
?></option>

<option><?php 
$res7 = $client->FindPremiumThirdParty(array('Vehicle' => 'keke'));
echo substr(ucfirst(strtolower($res7->FindPremiumThirdPartyResult->ThirdPartyPremium->InsuranceClass)), 0, 5); 
echo " - ";
echo $res7->FindPremiumThirdPartyResult->ThirdPartyPremium->Premium; 

?></option>

<option>
<?php
$res2 = $client->FindPremiumThirdParty(array('Vehicle' => 'bus'));
echo substr(ucfirst(strtolower($res2->FindPremiumThirdPartyResult->ThirdPartyPremium->InsuranceClass)), 0, 4); 
echo " - ";
echo $res2->FindPremiumThirdPartyResult->ThirdPartyPremium->Premium; 
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
  </tr>
  <tr>
  <td>
    <div style="margin-left:6px;">
  <select style="width:200px; height:44px; border-color:#ddd; border-radius:5px;" name="usage" style="color:#000; width:183px;">
<option>Private</option>
<option>Commercial</option>
</select>
</div>
    </td>
  <td>
  <div style="margin-left:6px;">
<select name="state_reg" id="state_reg" style="width:197px; height:44px; border-color:#ddd; border-radius:5px;" style="color:#000; width:183px;">
<option value="lagos">State of Registration</option>
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
  <td colspan="2">
  <br>
   Please read and agree to the Motor Third Party Online <a style="color:#06F;" href="https://chiplc.com/term-of-use/" target="_blank">Terms of Service</a>, Motor Third Party Online <a style="color:#06F;" href="https:www.chiplc.com/privacy" target="_blank">Privacy Policy</a>, and to receive important communications from Motor Third Party Online electronically.
<br><br>
<input type="checkbox" style="width:10px;" required> I agree
  </td>
  </tr>
</table>

           </font>
          
        </div>
       <!-- footer -->
        <div class="modal-footer">
          <input type="submit" name="submit" value="Preview Details">
        </div>
        </form>
      </div>
    </div>
  </div>
  
  
  
  
  
  
<?php
//******************************************* Corporate *********************************************************
?>  
<div class="modal fade" id="popUpWindow2">
    <div class="modal-dialog" style="width:auto; overflow-y:auto; max-height:90%;">
      <div class="modal-content">
        <!-- header -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title"><font style="font-weight:bold">Motor Third Party Insurance Registration</font></h3>
        </div>
        <!-- body -->
        <div class="modal-header">
          <form action="corporate/" name="form1" id="form1"  method="post">
          <input type="hidden" name="type" value="Corporate">
          <div align="center"><img src="img/corporate.png" width="50" height="50">  <font style="font-weight:bold; color:#000;">CORPORATE ENTITY</font></div><br>
 <font style="font-weight:bold; color:#000;">Corporate Information</font> <hr>
           <font color="#000000">
<table style="width:auto;">
   <tr>
    <td><input type="text" name="lname" placeholder="Name Of Organization" required></td>
    <td><div style="margin-left:6px;">
    <select name="location" style="width:197px; height:44px; border-color:#ddd; border-radius:5px;" required>
<option>Location</option>
<OPTION>Lagos</OPTION>
<option>Abuja FCT</option>
<option>Abia</option>
<option>Adamawa</option>
<option>Akwa Ibom</option>
<option>Anambra</option>
<option>Bauchi</option>
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
    </select></div></td>
  </tr>
  <tr>
    <td colspan="2"><input type="text" name="address" placeholder="Address" style="height:100px; width:425px;" required></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
   <tr>
  <td><div style="font-size:14px; margin:-11.6px 6px; color:#ddd; font-weight:bolder;">Date Of Incorporation</div><br>
  <table width="100%">
  <tr>
    <td><select required style="width:60px; height:44px; border-color:#ddd; border-radius:5px;" name="yearx" id="yearx" style="color:#000; border-radius:5px;">
<option>--Y--</option>
<?php
$yr = 2019;

while($yr >=1900)
{
	echo '<option>'. $yr. '</option>';
	--$yr;
}

?>
</select></td>
    <td><select required style="width:60px; height:44px; border-color:#ddd; border-radius:5px;" name="month" id="month" style="color:#000; border-radius:5px;">
<option>--M--</option>
<option value="01">Jan</option>
<option value="02">Feb</option>
<option value="03">Mar</option>
<option value="04">Apr</option>
<option value="05">May</option>
<option value="06">Jun</option>
<option value="07">Jul</option>
<option value="08">Aug</option>
<option value="09">Sep</option>
<option value="10">Oct</option>
<option value="11">Nov</option>
<option value="12">Dec</option>
</select></td>
    <td><select required style="width:60px; height:40px; border-color:#ddd; border-radius:5px;" name="day" id="day" style="color:#000; border-radius:5px;">
<option>--D--</option>
<option>01</option>
<option>02</option>
<option>03</option>
<option>04</option>
<option>05</option>
<option>06</option>
<option>07</option>
<option>08</option>
<option>09</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
</select></td>
  </tr>
</table></td>
<td><input type="text" name="rc_no" placeholder="RC Number"></td>
  </tr>
  <tr>
  <td><input type="text" name="email" placeholder="Email"  required></td>
<td><input type="text" name="phone" placeholder="Phone" maxlength="11" required></td>
  </tr>
  <tr>
  <td colspan="2">
  <br>
   Please read and agree to the Motor Third Party Online <a style="color:#06F;" href="https://chiplc.com/term-of-use/" target="_blank">Terms of Service</a>, Motor Third Party Online <a style="color:#06F;" href="https:www.chiplc.com/privacy" target="_blank">Privacy Policy</a>, and to receive important communications from Motor Third Party Online electronically.
<br><br>
<input type="checkbox" style="width:10px;" required> I agree
  </td>
  </tr>
</table>

           </font>
          
        </div>
       <!-- footer -->
        <div class="modal-footer">
          <input type="submit" name="submit" value="Preview Details">
        </div>
        </form>
      </div>
    </div>
  </div>
  
  
  

<?php
//******************************************* Print Certificate *********************************************************
?>  
<div class="modal fade" id="popUpWindow3">
    <div class="modal-dialog" style="width:auto; overflow-y:auto; max-height:90%;">
      <div class="modal-content">
        <!-- header -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title"><font style="font-weight:bold">View / Print Your Certificate</font></h3>
        </div>
        <!-- body -->
        <div class="modal-header">
          <form action="printcertificate/" name="form3" id="form3"  method="get" target="_blank">
          <div align="center"><img src="img/cert.fw.png" width="50" height="70">  <font style="font-weight:bold; color:#000;">PRINT CERTIFICATE</font></div><br>
 <hr>
           <font color="#000000">
<table align="center" style="width:100%;">
   <tr>
    <td colspan="2">
    <font style="font-size:15px; color:#891C2E;">
    NB: 1) Exclude the "CHI-CERT-" if you're using a "Certificate <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Number".<br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2) Type the exact reg. number that was used when registering if<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; you're using "Reg. Number".
    </font>
    <br><br>
    <input type="text" name="Encrypt" placeholder="Use Certificate Number / Reg Number" style="width:300px;" required></td>
  </tr>
</table>

           </font>
          
        </div>
       <!-- footer -->
        <div class="modal-footer">
          <input type="submit" name="submit" value="View Certificate">
        </div>
        </form>
      </div>
    </div>
  </div>  
  


<?php
//******************************************* Policy Renewal *********************************************************
?>  
<div class="modal fade" id="popUpWindow4">
    <div class="modal-dialog" style="width:auto; overflow-y:auto; max-height:90%;">
      <div class="modal-content">
        <!-- header -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title"><font style="font-weight:bold">Policy Renewal</font></h3>
        </div>
        <!-- body -->
        <div class="modal-header">
          <form action="renewal/" name="formx" id="formx"  method="post">
          <div align="center"><img src="img/car.fw.png" width="50" height="70">  <font style="font-weight:bold; color:#000;">RENEW YOUR POLICY</font></div><br>
 <hr>
           <font color="#000000">
<table align="center" style="width:100%;">
   <tr>
       <td colspan="2"><input type="text" style="width:300px;" maxlength="11" name="Regno" placeholder="Enter your Vehicle Registration No. :" required></td>
  </tr>
</table>

           </font>
          
        </div>
       <!-- footer -->
        <div class="modal-footer">
         <input type="submit" name="submit" value="Check Details">
        </div>
        </form>
      </div>
    </div>
  </div> 
  
  
  
<?php
//******************************************* Pin Status *********************************************************
?>  
<div class="modal fade" id="popUpWindow11">
    <div class="modal-dialog" style="width:auto; overflow-y:auto; max-height:90%;">
      <div class="modal-content">
        <!-- header -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title"><font style="font-weight:bold">Check Pin Status </font></h3>
        </div>
        <!-- body -->
        <div class="modal-header">
          <form action="check-status/" target="_blank" name="form50" id="form50"  method="get">
          <div align="center"><img src="img/status.png" width="70" height="70">  <font style="font-weight:bold; color:#000;">CHECK THE STATUS OF YOUR PIN </font></div><br>
 <hr>
           <font color="#000000">
<table align="center" style="width:100%;">
   <tr>
       <td colspan="2"><input type="text" style="width:300px;" maxlength="11" name="serialno" placeholder="TYPE SERIAL NO. HERE" required></td>
  </tr>
</table>

           </font>
          
        </div>
       <!-- footer -->
        <div class="modal-footer">
         <input type="submit" name="submit" value="Check Status">
        </div>
        </form>
      </div>
    </div>
  </div> 
  
  
</div>
					
<?php
//***************************************************BUS************************************************
?>
<div class="modal fade" id="popUpWindow5">
    <div class="modal-dialog" style="width:auto; overflow-y:auto; max-height:90%;">
      <div class="modal-content">
        <!-- header -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title"><font style="font-weight:bold">Motor Third Party Insurance Registration</font></h3>
        </div>
        <!-- body -->
        
        <div class="modal-header">
          <form action="preview/" name="form4" id="form4"  method="post">
          <input type="hidden" name="paynow" value="bus">
          <input type="hidden" name="type" value="Individual">
          <div align="center">
        <table width="100%">
  <tr>
    <td><img src="img/new.png" width="50" height="50">  <font style="font-weight:bold; color:#000;">NEW CUSTOMER</font></td>
    <td><img src="img/bus2.png" width="60" height="40"> <font style="font-weight:bold; color:#000;">BUS</font></td>
  </tr>
</table>
 </div>
<hr>
 <br>
 <font style="font-weight:bold; color:#000;">Personal Information</font>
           <font color="#000000">
<table style="width:auto;">
  <tr>
    <td>    
    <div style="margin-left:6px;">
    <select name="title" id="title" style="width:197px; height:44px; border-color:#ddd; border-radius:5px;" onchange="CheckTitle(this.value);"> 
    <option value="Mr">Title</option>
    <option>Mr</option>
    <option>Mrs</option>
    <option>Ms</option>
   <option>Chief</option>
    <option>Alhaji</option>
    <option>Alhaja</option>
    <option>Otunba</option>
     <option value="others">Others</option>
    </select>
    <div style="margin-left:-5px;"><input type="text" name="title2" id="title2" placeholder="TYPE YOUR TITLE" style='display:none;'/></div>
    </div>
    </td>
       <td><input type="text" name="fname" placeholder="Firstname" required></td>
  </tr>
  <tr>
    <td><input type="text" name="lname" placeholder="Surname" required></td>
    <td><div style="margin-left:6px;">
    <select name="location" style="width:197px; height:44px; border-color:#ddd; border-radius:5px;">
<option value="Lagos">Location (Optional)</option>
<OPTION>Lagos</OPTION>
<option>Abuja FCT</option>
<option>Abia</option>
<option>Adamawa</option>
<option>Akwa Ibom</option>
<option>Anambra</option>
<option>Bauchi</option>
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
    </select></div></td>
  </tr>
  <tr>
    <td colspan="2"><input type="text" name="address" placeholder="Address" style="height:100px; width:425px;" required></td>
  </tr>
  <tr>
  <td><div style="font-size:14px; margin:-11.43px 6px; color:#ddd; font-weight:bolder;">Date Of Birth</div><br>
  <div style="margin-left:3px;">
  <table width="100%">
  <tr>
    <td><select required style="width:60px; height:44px; border-color:#ddd; border-radius:5px;" name="yearx" id="yearx" style="color:#000; border-radius:5px;">
<option>--Y--</option>
<?php
$yr = 2019;

while($yr >=1900)
{
	echo '<option>'. $yr. '</option>';
	--$yr;
}

?>
</select></td>
    <td><select required style="width:60px; height:44px; border-color:#ddd; border-radius:5px;" name="month" id="month" style="color:#000; border-radius:5px;">
<option>--M--</option>
<option value="01">Jan</option>
<option value="02">Feb</option>
<option value="03">Mar</option>
<option value="04">Apr</option>
<option value="05">May</option>
<option value="06">Jun</option>
<option value="07">Jul</option>
<option value="08">Aug</option>
<option value="09">Sep</option>
<option value="10">Oct</option>
<option value="11">Nov</option>
<option value="12">Dec</option>
</select></td>
    <td><select required style="width:60px; height:40px; border-color:#ddd; border-radius:5px;" name="day" id="day" style="color:#000; border-radius:5px;">
<option>--D--</option>
<option>01</option>
<option>02</option>
<option>03</option>
<option>04</option>
<option>05</option>
<option>06</option>
<option>07</option>
<option>08</option>
<option>09</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
</select></td>
  </tr>
</table>
<br
</div>
  <div style="margin-top:-10px;"><input type="text" name="email" placeholder="Email" required></div><br><br>
  <div style="margin-top:-25px; margin-left:5px;">
<select name="identification" style="width:197px; height:44px; border-radius:5px;">
<option value="National ID">Means of ID. (Optional)</OPTION>
<option>National ID</option>
<option>Driver's Licence</option>
<option>International Passport</option>
<option>Permanent Voters Card (PVC)</option>
</select>
    </div>
  </td>
<td>
<div style="margin-left:5px; margin-top:30px;">
<br>
<select name="gender" style="width:197px; height:44px; border-radius:5px;">
<option value="Male">Gender (Optional)</option>
<option>Male</option>
<option>Female</option>
<option>Others</option>
</select>
</div>
<br>
<div style="margin-top:-10px;"><input type="text" name="phone" placeholder="Phone" maxlength="11" required></div><br><br>
   <div style="margin-top:-30px;"> <input type="text" name="id_no" placeholder="ID Number (Optional)"></div><br><br>
   <div style="margin-top:-20px;margin-left:-225px;"> <input type="text" style="width:425px;" name="occupation" placeholder="Occupation (Optional)"></div>
    </td>
  </tr>
  <tr>
  <td colspan="2">
  <br>
   Please read and agree to the Motor Third Party Online <a style="color:#06F;" href="https://chiplc.com/term-of-use/" target="_blank">Terms of Service</a>, Motor Third Party Online <a style="color:#06F;" href="https:www.chiplc.com/privacy" target="_blank">Privacy Policy</a>, and to receive important communications from Motor Third Party Online electronically.
<br><br>

<table width="100%">
  <tr>
    <td><input type="checkbox" style="width:10px;" required> I agree </td>
    <td align="right"><select style="width:197px; height:44px; border-color:#ddd; border-radius:5px;" name="category" style="color:#000; width:183px;">
<option>
<?php
$res2 = $client->FindPremiumThirdParty(array('Vehicle' => 'bus'));
echo substr(ucfirst(strtolower($res2->FindPremiumThirdPartyResult->ThirdPartyPremium->InsuranceClass)), 0, 4); 
echo " - ";
echo $res2->FindPremiumThirdPartyResult->ThirdPartyPremium->Premium; 
?></option>
</select></td>
  </tr>
</table>

  </td>
  </tr>
</table>

           </font>
          
        </div>
       <!-- footer -->
        <div class="modal-footer">
          <input type="submit" name="submit" value="Preview Details">
        </div>
        </form>
      </div>
    </div>
  </div>
  
  

<?php
//***************************************************CAR************************************************
?>
<div class="modal fade" id="popUpWindow6">
    <div class="modal-dialog" style="width:auto; overflow-y:auto; max-height:90%;">
      <div class="modal-content">
        <!-- header -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title"><font style="font-weight:bold">Motor Third Party Insurance Registration</font></h3>
        </div>
        <!-- body -->
        <div class="modal-header">
          <form action="preview/" name="form5" id="form5"  method="post">
              <input type="hidden" name="paynow" value="car">
          <input type="hidden" name="type" value="Individual">
          <div align="center">
        <table width="100%">
  <tr>
    <td><img src="img/new.png" width="50" height="50">  <font style="font-weight:bold; color:#000;">NEW CUSTOMER</font></td>
    <td><img src="img/car.jpg" width="60" height="40"> <font style="font-weight:bold; color:#000;">CAR</font></td>
  </tr>
</table>
 </div>
<hr>
 <br>
 <font style="font-weight:bold; color:#000;">Personal Information</font>
           <font color="#000000">
<table style="width:auto;">
  <tr>
    <td>    
    <div style="margin-left:6px;">
    <select name="title" id="title" style="width:197px; height:44px; border-color:#ddd; border-radius:5px;" onchange="CheckTitle(this.value);"> 
    <option value="Mr">Title</option>
    <option>Mr</option>
    <option>Mrs</option>
    <option>Ms</option>
   <option>Chief</option>
    <option>Alhaji</option>
    <option>Alhaja</option>
    <option>Otunba</option>
     <option value="others">Others</option>
    </select>
    <div style="margin-left:-5px;"><input type="text" name="title2" id="title2" placeholder="TYPE YOUR TITLE" style='display:none;'/></div>
    </div>
    </td>
       <td><input type="text" name="fname" placeholder="Firstname" required></td>
  </tr>
  <tr>
    <td><input type="text" name="lname" placeholder="Surname" required></td>
    <td><div style="margin-left:6px;">
    <select name="location" style="width:197px; height:44px; border-color:#ddd; border-radius:5px;">
<option value="Lagos">Location (Optional)</option>
<OPTION>Lagos</OPTION>
<option>Abuja FCT</option>
<option>Abia</option>
<option>Adamawa</option>
<option>Akwa Ibom</option>
<option>Anambra</option>
<option>Bauchi</option>
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
    </select></div></td>
  </tr>
  <tr>
    <td colspan="2"><input type="text" name="address" placeholder="Address" style="height:100px; width:425px;" required></td>
  </tr>
  <tr>
  <td><div style="font-size:14px; margin:-11.43px 6px; color:#ddd; font-weight:bolder;">Date Of Birth</div><br>
  <div style="margin-left:3px;">
  <table width="100%">
  <tr>
    <td><select required style="width:60px; height:44px; border-color:#ddd; border-radius:5px;" name="yearx" id="yearx" style="color:#000; border-radius:5px;">
<option>--Y--</option>
<?php
$yr = 2019;

while($yr >=1900)
{
	echo '<option>'. $yr. '</option>';
	--$yr;
}

?>
</select></td>
    <td><select required style="width:60px; height:44px; border-color:#ddd; border-radius:5px;" name="month" id="month" style="color:#000; border-radius:5px;">
<option>--M--</option>
<option value="01">Jan</option>
<option value="02">Feb</option>
<option value="03">Mar</option>
<option value="04">Apr</option>
<option value="05">May</option>
<option value="06">Jun</option>
<option value="07">Jul</option>
<option value="08">Aug</option>
<option value="09">Sep</option>
<option value="10">Oct</option>
<option value="11">Nov</option>
<option value="12">Dec</option>
</select></td>
    <td><select required style="width:60px; height:40px; border-color:#ddd; border-radius:5px;" name="day" id="day" style="color:#000; border-radius:5px;">
<option>--D--</option>
<option>01</option>
<option>02</option>
<option>03</option>
<option>04</option>
<option>05</option>
<option>06</option>
<option>07</option>
<option>08</option>
<option>09</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
</select></td>
  </tr>
</table>
<br
</div>
  <div style="margin-top:-10px;"><input type="text" name="email" placeholder="Email" required></div><br><br>
  <div style="margin-top:-25px; margin-left:5px;">
<select name="identification" style="width:197px; height:44px; border-radius:5px;">
<option value="National ID">Means of ID. (Optional)</OPTION>
<option>National ID</option>
<option>Driver's Licence</option>
<option>International Passport</option>
<option>Permanent Voters Card (PVC)</option>
</select>
    </div>
  </td>
<td>
<div style="margin-left:5px; margin-top:30px;">
<br>
<select name="gender" style="width:197px; height:44px; border-radius:5px;">
<option value="Male">Gender (Optional)</option>
<option>Male</option>
<option>Female</option>
<option>Others</option>
</select>
</div>
<br>
<div style="margin-top:-10px;"><input type="text" name="phone" placeholder="Phone" maxlength="11" required></div><br><br>
   <div style="margin-top:-30px;"> <input type="text" name="id_no" placeholder="ID Number (Optional)"></div><br><br>
   <div style="margin-top:-20px;margin-left:-225px;"> <input type="text" style="width:425px;" name="occupation" placeholder="Occupation (Optional)"></div>
    </td>
  </tr>
  <tr>
  <td colspan="2">
  <br>
   Please read and agree to the Motor Third Party Online <a style="color:#06F;" href="https://chiplc.com/term-of-use/" target="_blank">Terms of Service</a>, Motor Third Party Online <a style="color:#06F;" href="https:www.chiplc.com/privacy" target="_blank">Privacy Policy</a>, and to receive important communications from Motor Third Party Online electronically.
<br><br>
<table width="100%">
  <tr>
    <td><input type="checkbox" style="width:10px;" required> I agree </td>
    <td align="right"><select style="width:197px; height:44px; border-color:#ddd; border-radius:5px;" name="category" style="color:#000; width:183px;">
<option>
<?php 
$res = $client->FindPremiumThirdParty(array('Vehicle' => 'car'));
echo substr(ucfirst(strtolower($res->FindPremiumThirdPartyResult->ThirdPartyPremium->InsuranceClass)), 0, 4); 
echo " - ";
echo $res->FindPremiumThirdPartyResult->ThirdPartyPremium->Premium; 
?></option>
</select></td>
  </tr>
</table>
  </td>
  </tr>
</table>

           </font>
          
        </div>
       <!-- footer -->
        <div class="modal-footer">
          <input type="submit" name="submit" value="Preview Details">
        </div>
        </form>
      </div>
    </div>
  </div>
  
  
  
<?php
//***************************************************JEEP************************************************
?>
<div class="modal fade" id="popUpWindow7">
    <div class="modal-dialog" style="width:auto; overflow-y:auto; max-height:90%;">
      <div class="modal-content">
        <!-- header -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title"><font style="font-weight:bold">Motor Third Party Insurance Registration</font></h3>
        </div>
        <!-- body -->
        <div class="modal-header">
          <form action="preview/" name="form6" id="form6"  method="post">
              <input type="hidden" name="paynow" value="jeep">
          <input type="hidden" name="type" value="Individual">
          <div align="center">
        <table width="100%">
  <tr>
    <td><img src="img/new.png" width="50" height="50">  <font style="font-weight:bold; color:#000;">NEW CUSTOMER</font></td>
    <td><img src="img/jeep.jpg" width="50" height="40"> <font style="font-weight:bold; color:#000;">JEEP</font></td>
  </tr>
</table>
 </div>
<hr>
 <br>
 <font style="font-weight:bold; color:#000;">Personal Information</font>
           <font color="#000000">
<table style="width:auto;">
  <tr>
    <td>    
    <div style="margin-left:6px;">
    <select name="title" id="title" style="width:197px; height:44px; border-color:#ddd; border-radius:5px;" onchange="CheckTitle(this.value);"> 
    <option value="Mr">Title</option>
    <option>Mr</option>
    <option>Mrs</option>
    <option>Ms</option>
   <option>Chief</option>
    <option>Alhaji</option>
    <option>Alhaja</option>
    <option>Otunba</option>
     <option value="others">Others</option>
    </select>
    <div style="margin-left:-5px;"><input type="text" name="title2" id="title2" placeholder="TYPE YOUR TITLE" style='display:none;'/></div>
    </div>
    </td>
       <td><input type="text" name="fname" placeholder="Firstname" required></td>
  </tr>
  <tr>
    <td><input type="text" name="lname" placeholder="Surname" required></td>
    <td><div style="margin-left:6px;">
    <select name="location" style="width:197px; height:44px; border-color:#ddd; border-radius:5px;">
<option value="Lagos">Location (Optional)</option>
<OPTION>Lagos</OPTION>
<option>Abuja FCT</option>
<option>Abia</option>
<option>Adamawa</option>
<option>Akwa Ibom</option>
<option>Anambra</option>
<option>Bauchi</option>
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
    </select></div></td>
  </tr>
  <tr>
    <td colspan="2"><input type="text" name="address" placeholder="Address" style="height:100px; width:425px;" required></td>
  </tr>
  <tr>
  <td><div style="font-size:14px; margin:-11.43px 6px; color:#ddd; font-weight:bolder;">Date Of Birth</div><br>
  <div style="margin-left:3px;">
  <table width="100%">
  <tr>
    <td><select required style="width:60px; height:44px; border-color:#ddd; border-radius:5px;" name="yearx" id="yearx" style="color:#000; border-radius:5px;">
<option>--Y--</option>
<?php
$yr = 2019;

while($yr >=1900)
{
	echo '<option>'. $yr. '</option>';
	--$yr;
}

?>
</select></td>
    <td><select required style="width:60px; height:44px; border-color:#ddd; border-radius:5px;" name="month" id="month" style="color:#000; border-radius:5px;">
<option>--M--</option>
<option value="01">Jan</option>
<option value="02">Feb</option>
<option value="03">Mar</option>
<option value="04">Apr</option>
<option value="05">May</option>
<option value="06">Jun</option>
<option value="07">Jul</option>
<option value="08">Aug</option>
<option value="09">Sep</option>
<option value="10">Oct</option>
<option value="11">Nov</option>
<option value="12">Dec</option>
</select></td>
    <td><select required style="width:60px; height:40px; border-color:#ddd; border-radius:5px;" name="day" id="day" style="color:#000; border-radius:5px;">
<option>--D--</option>
<option>01</option>
<option>02</option>
<option>03</option>
<option>04</option>
<option>05</option>
<option>06</option>
<option>07</option>
<option>08</option>
<option>09</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
</select></td>
  </tr>
</table>
<br
</div>
  <div style="margin-top:-10px;"><input type="text" name="email" placeholder="Email" required></div><br><br>
  <div style="margin-top:-25px; margin-left:5px;">
<select name="identification" style="width:197px; height:44px; border-radius:5px;">
<option value="National ID">Means of ID. (Optional)</OPTION>
<option>National ID</option>
<option>Driver's Licence</option>
<option>International Passport</option>
<option>Permanent Voters Card (PVC)</option>
</select>
    </div>
  </td>
<td>
<div style="margin-left:5px; margin-top:30px;">
<br>
<select name="gender" style="width:197px; height:44px; border-radius:5px;">
<option value="Male">Gender (Optional)</option>
<option>Male</option>
<option>Female</option>
<option>Others</option>
</select>
</div>
<br>
<div style="margin-top:-10px;"><input type="text" name="phone" placeholder="Phone" maxlength="11" required></div><br><br>
   <div style="margin-top:-30px;"> <input type="text" name="id_no" placeholder="ID Number (Optional)"></div><br><br>
   <div style="margin-top:-20px;margin-left:-225px;"> <input type="text" style="width:425px;" name="occupation" placeholder="Occupation (Optional)"></div>
    </td>
  </tr>
  <tr>
  <td colspan="2">
  <br>
   Please read and agree to the Motor Third Party Online <a style="color:#06F;" href="https://chiplc.com/term-of-use/" target="_blank">Terms of Service</a>, Motor Third Party Online <a style="color:#06F;" href="https:www.chiplc.com/privacy" target="_blank">Privacy Policy</a>, and to receive important communications from Motor Third Party Online electronically.
<br><br>
<table width="100%">
  <tr>
    <td><input type="checkbox" style="width:10px;" required> I agree </td>
    <td align="right"><select style="width:197px; height:44px; border-color:#ddd; border-radius:5px;" name="category" style="color:#000; width:183px;">
<option>
<?php 
$res4 = $client->FindPremiumThirdParty(array('Vehicle' => 'jeep'));
echo substr(ucfirst(strtolower($res4->FindPremiumThirdPartyResult->ThirdPartyPremium->InsuranceClass)), 0, 4); 
echo " - ";
echo $res4->FindPremiumThirdPartyResult->ThirdPartyPremium->Premium; 
?></option>
</select></td>
  </tr>
</table>
  </td>
  </tr>
</table>

           </font>
          
        </div>
       <!-- footer -->
        <div class="modal-footer">
          <input type="submit" name="submit" value="Preview Details">
        </div>
        </form>
      </div>
    </div>
  </div>
  
  
  
<?php
//***************************************************KEKE************************************************
?>
<div class="modal fade" id="popUpWindow8">
    <div class="modal-dialog" style="width:auto; overflow-y:auto; max-height:90%;">
      <div class="modal-content">
        <!-- header -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title"><font style="font-weight:bold">Motor Third Party Insurance Registration</font></h3>
        </div>
        <!-- body -->
        <div class="modal-header">
          <form action="preview/" name="form7" id="form7"  method="post">
              <input type="hidden" name="paynow" value="keke">
          <input type="hidden" name="type" value="Individual">
          <div align="center">
        <table width="100%">
  <tr>
    <td><img src="img/new.png" width="50" height="50">  <font style="font-weight:bold; color:#000;">NEW CUSTOMER</font></td>
    <td><img src="img/keke.jpg" width="40" height="40"> <font style="font-weight:bold; color:#000;">TRICYCLE (KEKE)</font></td>
  </tr>
</table>
 </div>
<hr>
 <br>
 <font style="font-weight:bold; color:#000;">Personal Information</font>
           <font color="#000000">
<table style="width:auto;">
  <tr>
    <td>    
    <div style="margin-left:6px;">
    <select name="title" id="title" style="width:197px; height:44px; border-color:#ddd; border-radius:5px;" onchange="CheckTitle(this.value);"> 
    <option value="Mr">Title</option>
    <option>Mr</option>
    <option>Mrs</option>
    <option>Ms</option>
   <option>Chief</option>
    <option>Alhaji</option>
    <option>Alhaja</option>
    <option>Otunba</option>
     <option value="others">Others</option>
    </select>
    <div style="margin-left:-5px;"><input type="text" name="title2" id="title2" placeholder="TYPE YOUR TITLE" style='display:none;'/></div>
    </div>
    </td>
       <td><input type="text" name="fname" placeholder="Firstname" required></td>
  </tr>
  <tr>
    <td><input type="text" name="lname" placeholder="Surname" required></td>
    <td><div style="margin-left:6px;">
    <select name="location" style="width:197px; height:44px; border-color:#ddd; border-radius:5px;">
<option value="Lagos">Location (Optional)</option>
<OPTION>Lagos</OPTION>
<option>Abuja FCT</option>
<option>Abia</option>
<option>Adamawa</option>
<option>Akwa Ibom</option>
<option>Anambra</option>
<option>Bauchi</option>
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
    </select></div></td>
  </tr>
  <tr>
    <td colspan="2"><input type="text" name="address" placeholder="Address" style="height:100px; width:425px;" required></td>
  </tr>
  <tr>
  <td><div style="font-size:14px; margin:-11.43px 6px; color:#ddd; font-weight:bolder;">Date Of Birth</div><br>
  <div style="margin-left:3px;">
  <table width="100%">
  <tr>
    <td><select required style="width:60px; height:44px; border-color:#ddd; border-radius:5px;" name="yearx" id="yearx" style="color:#000; border-radius:5px;">
<option>--Y--</option>
<?php
$yr = 2019;

while($yr >=1900)
{
	echo '<option>'. $yr. '</option>';
	--$yr;
}

?>
</select></td>
    <td><select required style="width:60px; height:44px; border-color:#ddd; border-radius:5px;" name="month" id="month" style="color:#000; border-radius:5px;">
<option>--M--</option>
<option value="01">Jan</option>
<option value="02">Feb</option>
<option value="03">Mar</option>
<option value="04">Apr</option>
<option value="05">May</option>
<option value="06">Jun</option>
<option value="07">Jul</option>
<option value="08">Aug</option>
<option value="09">Sep</option>
<option value="10">Oct</option>
<option value="11">Nov</option>
<option value="12">Dec</option>
</select></td>
    <td><select required style="width:60px; height:40px; border-color:#ddd; border-radius:5px;" name="day" id="day" style="color:#000; border-radius:5px;">
<option>--D--</option>
<option>01</option>
<option>02</option>
<option>03</option>
<option>04</option>
<option>05</option>
<option>06</option>
<option>07</option>
<option>08</option>
<option>09</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
</select></td>
  </tr>
</table>
<br
</div>
  <div style="margin-top:-10px;"><input type="text" name="email" placeholder="Email" required></div><br><br>
  <div style="margin-top:-25px; margin-left:5px;">
<select name="identification" style="width:197px; height:44px; border-radius:5px;">
<option value="National ID">Means of ID. (Optional)</OPTION>
<option>National ID</option>
<option>Driver's Licence</option>
<option>International Passport</option>
<option>Permanent Voters Card (PVC)</option>
</select>
    </div>
  </td>
<td>
<div style="margin-left:5px; margin-top:30px;">
<br>
<select name="gender" style="width:197px; height:44px; border-radius:5px;">
<option value="Male">Gender (Optional)</option>
<option>Male</option>
<option>Female</option>
<option>Others</option>
</select>
</div>
<br>
<div style="margin-top:-10px;"><input type="text" name="phone" placeholder="Phone" maxlength="11" required></div><br><br>
   <div style="margin-top:-30px;"> <input type="text" name="id_no" placeholder="ID Number (Optional)"></div><br><br>
   <div style="margin-top:-20px;margin-left:-225px;"> <input type="text" style="width:425px;" name="occupation" placeholder="Occupation (Optional)"></div>
    </td>
  </tr>
  <tr>
  <td colspan="2">
  <br>
   Please read and agree to the Motor Third Party Online <a style="color:#06F;" href="https://chiplc.com/term-of-use/" target="_blank">Terms of Service</a>, Motor Third Party Online <a style="color:#06F;" href="https:www.chiplc.com/privacy" target="_blank">Privacy Policy</a>, and to receive important communications from Motor Third Party Online electronically.
<br><br>
<table width="100%">
  <tr>
    <td><input type="checkbox" style="width:10px;" required> I agree </td>
    <td align="right"><select style="width:197px; height:44px; border-color:#ddd; border-radius:5px;" name="category" style="color:#000; width:183px;">
<option>
<?php 
$res7 = $client->FindPremiumThirdParty(array('Vehicle' => 'keke'));
echo substr(ucfirst(strtolower($res7->FindPremiumThirdPartyResult->ThirdPartyPremium->InsuranceClass)), 0, 5); 
echo " - ";
echo $res7->FindPremiumThirdPartyResult->ThirdPartyPremium->Premium; 
?></option>
</select></td>
  </tr>
</table>
  </td>
  </tr>
</table>

           </font>
          
        </div>
       <!-- footer -->
        <div class="modal-footer">
          <input type="submit" name="submit" value="Preview Details">
        </div>
        </form>
      </div>
    </div>
  </div>
  
  
  
  

<?php
//***************************************************SUV************************************************
?>
<div class="modal fade" id="popUpWindow9">
    <div class="modal-dialog" style="width:auto; overflow-y:auto; max-height:90%;">
      <div class="modal-content">
        <!-- header -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title"><font style="font-weight:bold">Motor Third Party Insurance Registration</font></h3>
        </div>
        <!-- body -->
        <div class="modal-header">
          <form action="preview/" name="form8" id="form8"  method="post">
          <input type="hidden" name="paynow" value="suv">
          <input type="hidden" name="type" value="Individual">
          <div align="center">
        <table width="100%">
  <tr>
    <td><img src="img/new.png" width="50" height="50">  <font style="font-weight:bold; color:#000;">NEW CUSTOMER</font></td>
    <td><img src="img/suv.png" width="60" height="40"> <font style="font-weight:bold; color:#000;">SUV</font></td>
  </tr>
</table>
 </div>
<hr>
 <br>
 <font style="font-weight:bold; color:#000;">Personal Information</font>
           <font color="#000000">
<table style="width:auto;">
  <tr>
    <td>    
    <div style="margin-left:6px;">
    <select name="title" id="title" style="width:197px; height:44px; border-color:#ddd; border-radius:5px;" onchange="CheckTitle(this.value);"> 
    <option value="Mr">Title</option>
    <option>Mr</option>
    <option>Mrs</option>
    <option>Ms</option>
   <option>Chief</option>
    <option>Alhaji</option>
    <option>Alhaja</option>
    <option>Otunba</option>
     <option value="others">Others</option>
    </select>
    <div style="margin-left:-5px;"><input type="text" name="title2" id="title2" placeholder="TYPE YOUR TITLE" style='display:none;'/></div>
    </div>
    </td>
       <td><input type="text" name="fname" placeholder="Firstname" required></td>
  </tr>
  <tr>
    <td><input type="text" name="lname" placeholder="Surname" required></td>
    <td><div style="margin-left:6px;">
    <select name="location" style="width:197px; height:44px; border-color:#ddd; border-radius:5px;">
<option value="Lagos">Location (Optional)</option>
<OPTION>Lagos</OPTION>
<option>Abuja FCT</option>
<option>Abia</option>
<option>Adamawa</option>
<option>Akwa Ibom</option>
<option>Anambra</option>
<option>Bauchi</option>
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
    </select></div></td>
  </tr>
  <tr>
    <td colspan="2"><input type="text" name="address" placeholder="Address" style="height:100px; width:425px;" required></td>
  </tr>
 <tr>
  <td><div style="font-size:14px; margin:-11.43px 6px; color:#ddd; font-weight:bolder;">Date Of Birth</div><br>
  <div style="margin-left:3px;">
  <table width="100%">
  <tr>
    <td><select required style="width:60px; height:44px; border-color:#ddd; border-radius:5px;" name="yearx" id="yearx" style="color:#000; border-radius:5px;">
<option>--Y--</option>
<?php
$yr = 2019;

while($yr >=1900)
{
	echo '<option>'. $yr. '</option>';
	--$yr;
}

?>
</select></td>
    <td><select required style="width:60px; height:44px; border-color:#ddd; border-radius:5px;" name="month" id="month" style="color:#000; border-radius:5px;">
<option>--M--</option>
<option value="01">Jan</option>
<option value="02">Feb</option>
<option value="03">Mar</option>
<option value="04">Apr</option>
<option value="05">May</option>
<option value="06">Jun</option>
<option value="07">Jul</option>
<option value="08">Aug</option>
<option value="09">Sep</option>
<option value="10">Oct</option>
<option value="11">Nov</option>
<option value="12">Dec</option>
</select></td>
    <td><select required style="width:60px; height:40px; border-color:#ddd; border-radius:5px;" name="day" id="day" style="color:#000; border-radius:5px;">
<option>--D--</option>
<option>01</option>
<option>02</option>
<option>03</option>
<option>04</option>
<option>05</option>
<option>06</option>
<option>07</option>
<option>08</option>
<option>09</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
</select></td>
  </tr>
</table>
<br
</div>
  <div style="margin-top:-10px;"><input type="text" name="email" placeholder="Email" required></div><br><br>
  <div style="margin-top:-25px; margin-left:5px;">
<select name="identification" style="width:197px; height:44px; border-radius:5px;">
<option value="National ID">Means of ID. (Optional)</OPTION>
<option>National ID</option>
<option>Driver's Licence</option>
<option>International Passport</option>
<option>Permanent Voters Card (PVC)</option>
</select>
    </div>
  </td>
<td>
<div style="margin-left:5px; margin-top:30px;">
<br>
<select name="gender" style="width:197px; height:44px; border-radius:5px;">
<option value="Male">Gender (Optional)</option>
<option>Male</option>
<option>Female</option>
<option>Others</option>
</select>
</div>
<br>
<div style="margin-top:-10px;"><input type="text" name="phone" placeholder="Phone" maxlength="11" required></div><br><br>
   <div style="margin-top:-30px;"> <input type="text" name="id_no" placeholder="ID Number (Optional)"></div><br><br>
   <div style="margin-top:-20px;margin-left:-225px;"> <input type="text" style="width:425px;" name="occupation" placeholder="Occupation (Optional)"></div>
    </td>
  </tr>
  <tr>
  <td colspan="2">
  <br>
   Please read and agree to the Motor Third Party Online <a style="color:#06F;" href="https://chiplc.com/term-of-use/" target="_blank">Terms of Service</a>, Motor Third Party Online <a style="color:#06F;" href="https:www.chiplc.com/privacy" target="_blank">Privacy Policy</a>, and to receive important communications from Motor Third Party Online electronically.
<br><br>
<table width="100%">
  <tr>
    <td><input type="checkbox" style="width:10px;" required> I agree </td>
    <td align="right"><select style="width:197px; height:44px; border-color:#ddd; border-radius:5px;" name="category" style="color:#000; width:183px;">
<option>
<?php 
$res3 = $client->FindPremiumThirdParty(array('Vehicle' => 'suv'));
echo substr(ucfirst(strtolower($res3->FindPremiumThirdPartyResult->ThirdPartyPremium->InsuranceClass)), 0, 4); 
echo " - ";
echo $res3->FindPremiumThirdPartyResult->ThirdPartyPremium->Premium; 
?></option>
</select></td>
  </tr>
</table>
  </td>
  </tr>
</table>

           </font>
          
        </div>
       <!-- footer -->
        <div class="modal-footer">
          <input type="submit" name="submit" value="Preview Details">
        </div>
        </form>
      </div>
    </div>
  </div>
  
  
  
  
<?php
//***************************************************TRUCK************************************************
?>
<div class="modal fade" id="popUpWindow10">
    <div class="modal-dialog" style="width:auto; overflow-y:auto; max-height:90%;">
      <div class="modal-content">
        <!-- header -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title"><font style="font-weight:bold">Motor Third Party Insurance Registration</font></h3>
        </div>
        <!-- body -->
        <div class="modal-header">
          <form action="preview/" name="form9" id="form9"  method="post">
              <input type="hidden" name="paynow" value="truck">
          <input type="hidden" name="type" value="Individual">
          <div align="center">
        <table width="100%">
  <tr>
    <td><img src="img/new.png" width="50" height="50">  <font style="font-weight:bold; color:#000;">NEW CUSTOMER</font></td>
    <td><img src="img/truck.jpg" width="50" height="40"> <font style="font-weight:bold; color:#000;">TRUCK</font></td>
  </tr>
</table>
 </div>
<hr>
 <br>
 <font style="font-weight:bold; color:#000;">Personal Information</font>
           <font color="#000000">
<table style="width:auto;">
  <tr>
    <td>    
    <div style="margin-left:6px;">
    <select name="title" id="title" style="width:197px; height:44px; border-color:#ddd; border-radius:5px;" onchange="CheckTitle(this.value);"> 
    <option value="Mr">Title</option>
    <option>Mr</option>
    <option>Mrs</option>
    <option>Ms</option>
   <option>Chief</option>
    <option>Alhaji</option>
    <option>Alhaja</option>
    <option>Otunba</option>
     <option value="others">Others</option>
    </select>
    <div style="margin-left:-5px;"><input type="text" name="title2" id="title2" placeholder="TYPE YOUR TITLE" style='display:none;'/></div>
    </div>
    </td>
       <td><input type="text" name="fname" placeholder="Firstname" required></td>
  </tr>
  <tr>
    <td><input type="text" name="lname" placeholder="Surname" required></td>
    <td><div style="margin-left:6px;">
    <select name="location" style="width:197px; height:44px; border-color:#ddd; border-radius:5px;">
<option value="Lagos">Location (Optional)</option>
<OPTION>Lagos</OPTION>
<option>Abuja FCT</option>
<option>Abia</option>
<option>Adamawa</option>
<option>Akwa Ibom</option>
<option>Anambra</option>
<option>Bauchi</option>
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
    </select></div></td>
  </tr>
  <tr>
    <td colspan="2"><input type="text" name="address" placeholder="Address" style="height:100px; width:425px;" required></td>
  </tr>
 <tr>
  <td><div style="font-size:14px; margin:-11.43px 6px; color:#ddd; font-weight:bolder;">Date Of Birth</div><br>
  <div style="margin-left:3px;">
  <table width="100%">
  <tr>
    <td><select required style="width:60px; height:44px; border-color:#ddd; border-radius:5px;" name="yearx" id="yearx" style="color:#000; border-radius:5px;">
<option>--Y--</option>
<?php
$yr = 2019;

while($yr >=1900)
{
	echo '<option>'. $yr. '</option>';
	--$yr;
}

?>
</select></td>
    <td><select required style="width:60px; height:44px; border-color:#ddd; border-radius:5px;" name="month" id="month" style="color:#000; border-radius:5px;">
<option>--M--</option>
<option value="01">Jan</option>
<option value="02">Feb</option>
<option value="03">Mar</option>
<option value="04">Apr</option>
<option value="05">May</option>
<option value="06">Jun</option>
<option value="07">Jul</option>
<option value="08">Aug</option>
<option value="09">Sep</option>
<option value="10">Oct</option>
<option value="11">Nov</option>
<option value="12">Dec</option>
</select></td>
    <td><select required style="width:60px; height:40px; border-color:#ddd; border-radius:5px;" name="day" id="day" style="color:#000; border-radius:5px;">
<option>--D--</option>
<option>01</option>
<option>02</option>
<option>03</option>
<option>04</option>
<option>05</option>
<option>06</option>
<option>07</option>
<option>08</option>
<option>09</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
</select></td>
  </tr>
</table>
<br
</div>
  <div style="margin-top:-10px;"><input type="text" name="email" placeholder="Email" required></div><br><br>
  <div style="margin-top:-25px; margin-left:5px;">
<select name="identification" style="width:197px; height:44px; border-radius:5px;">
<option value="National ID">Means of ID. (Optional)</OPTION>
<option>National ID</option>
<option>Driver's Licence</option>
<option>International Passport</option>
<option>Permanent Voters Card (PVC)</option>
</select>
    </div>
  </td>
<td>
<div style="margin-left:5px; margin-top:30px;">
<br>
<select name="gender" style="width:197px; height:44px; border-radius:5px;">
<option value="Male">Gender (Optional)</option>
<option>Male</option>
<option>Female</option>
<option>Others</option>
</select>
</div>
<br>
<div style="margin-top:-10px;"><input type="text" name="phone" placeholder="Phone" maxlength="11" required></div><br><br>
   <div style="margin-top:-30px;"> <input type="text" name="id_no" placeholder="ID Number (Optional)"></div><br><br>
   <div style="margin-top:-20px;margin-left:-225px;"> <input type="text" style="width:425px;" name="occupation" placeholder="Occupation (Optional)"></div>
    </td>
  </tr>
  <tr>
  <td colspan="2">
  <br>
   Please read and agree to the Motor Third Party Online <a style="color:#06F;" href="https://chiplc.com/term-of-use/" target="_blank">Terms of Service</a>, Motor Third Party Online <a style="color:#06F;" href="https:www.chiplc.com/privacy" target="_blank">Privacy Policy</a>, and to receive important communications from Motor Third Party Online electronically.
<br><br>
<table width="100%">
  <tr>
    <td><input type="checkbox" style="width:10px;" required> I agree </td>
    <td align="right"><select style="width:197px; height:44px; border-color:#ddd; border-radius:5px;" name="category" style="color:#000; width:183px;">
<option>
<?php 
$res6 = $client->FindPremiumThirdParty(array('Vehicle' => 'truck'));
echo substr(ucfirst(strtolower($res6->FindPremiumThirdPartyResult->ThirdPartyPremium->InsuranceClass)), 0, 5); 
echo " - ";
echo $res6->FindPremiumThirdPartyResult->ThirdPartyPremium->Premium; 
?></option>
</select></td>
  </tr>
</table>
  </td>
  </tr>
</table>

           </font>
          
        </div>
       <!-- footer -->
        <div class="modal-footer">
          <input type="submit" name="submit" value="Preview Details">
        </div>
        </form>
      </div>
    </div>
  </div>

			
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
                                    <li><a href="#" data-toggle="modal" data-target="#popUpWindow11" style="color:#891C2E;">Check Pin Status</a></li>
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
									<li><span class="fa fa-home"></span> Address: 266, Ikorodu Road, Obanikoro</li><br>
                                    <li><span class="fa fa-phone"></span> 0700CHINSURANCE</li><br>
                                    <li><span class="fa fa-envelope"></span> info@chiplc.com</li><br>
                                     <li><span class="fa fa-whatsapp"></span> +234-9056037851</li>
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
<script  src="js/index.js"></script>
 
 



    
			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/parallax.min.js"></script>			
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.DonutWidget.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>			
			<script src="js/main.js"></script>	
		</body>
	</html>