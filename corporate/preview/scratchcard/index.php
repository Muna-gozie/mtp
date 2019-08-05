<?php
if(!isset($_GET['email'])) 
{
echo '<script type="text/javascript">alert("ERROR!!! UNAUTHORIZED BYPASS ACCESS");
		 window.location.assign("../../")
		</script>';
			exit();	
}
error_reporting(0);
?>

    <!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="../../img/favicon.png">
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
			<link rel="stylesheet" href="../../css/linearicons.css">
			<link rel="stylesheet" href="../../css/font-awesome.min.css">
			<link rel="stylesheet" href="../../css/jquery.DonutWidget.min.css">
			<link rel="stylesheet" href="../../css/bootstrap.css">
			<link rel="stylesheet" href="../../css/owl.carousel.css">
			<link rel="stylesheet" href="../../css/main.css">

                 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
            
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href="../../_css/responsive-layered-slider.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../../_scripts/jquery-2.0.2.min.js"></script>
<script type="text/javascript" src="../../_scripts/jquery-ui-1.10.4.min.js"></script>
<script type="text/javascript" src="../../_scripts/responsive-layered-slider.js"></script> 

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="../css/style.css">

<script type="text/javascript" src="../js.js"></script>
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
						  	<img src="../../img/logo.png" alt="" style="height:60px;">
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
            <br><br><br><br><br><br>
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
					<main id="main">
	<section id="left">
		<div id="head">
			<marquee direction="left" behavior="slide"><p align="center" style="font-size:20px; font-weight:bold; color:#891C2E;">Pay With Your Scratch Card&raquo;&raquo;</p></marquee>
		</div>
		<center><div style="background-color:#852B2C; width:250px; height:60px; opacity:0.7"><br><h3 align="center" style="font-size:18px; font-weight:bold; color:#fff;">Your Purchase: ₦<?php 
		echo number_format($_GET['amount']);		
		?></h3></div></center>
	</section>
	<section id="right">
    <br><br><br><br><br><br><br><br><br><br>
		<center><h1 style="font-size:22px; font-weight:bold; color:#000;">SCRATCH CARD PAYMENT</h1><br><br><br>
        <?php
		if($_GET['amount']>9000)
		{
        	echo '<img src="http://localhost/c.h.i/motor3rdparty/img/scratchcard1.png" width="241" height="140">';
		}
		elseif($_GET['amount']==5000)
		{
        	echo '<img src="http://localhost/c.h.i/motor3rdparty/img/scratchcard2.png" width="241" height="140">';
		}
		elseif($_GET['amount']==7500)
		{
        	echo '<img src="http://localhost/c.h.i/motor3rdparty/img/scratchcard3.png" width="241" height="140">';
		}
		?>
<br><br><br>
		<font color="#000000" style="font-weight:bold;">
		<?php
		if(isset($_GET['lname']))
		{
			echo strtoupper('DEAR '.$_GET['lname'].' '.$_GET['fname'].', Kindly Type In your Scratch Card Pin Below');
		?>
        </font>
        <form action="../../success" method="get" name="form">
			<div id="form-card" class="form-field">
            <br><br>
				<input type="text" minlength="10" maxlength="10" id="cardno" name="cardno" placeholder="Type Scratch Card Pin Here..." required>
			</div>
<?php
if($_GET['cat'] == 'Truck - 10000.00')
{
	$amount = substr($_GET['cat'], 8, 15);	
}
elseif(($_GET['cat'] == 'Jeep - 5000.00') || ($_GET['cat'] == 'Keke - 2500.00'))
{
	$amount = substr($_GET['cat'], 7, 4);
}
else $amount = substr($_GET['cat'], 6, 4);

?>
<input name="agentname" type="hidden" value="<?php echo $_GET['agentname']; ?>">
<input name="agentid" type="hidden" value="<?php echo $_GET['agentid']; ?>">
<input name="gender" type="hidden" value="<?php echo $_GET['gender']; ?>">
<input name="amount" type="hidden" value="<?php echo $amount; ?>">
<input name="cat" type="hidden" value="<?php echo $_GET['cat']; ?>">
<input name="color" type="hidden" value="<?php echo $_GET['color']; ?>">
<input name="chasis_no" type="hidden" value="<?php echo $_GET['chasis_no']; ?>">
<input name="engine_no" type="hidden" value="<?php echo $_GET['engine_no']; ?>">
<input name="regno" type="hidden" value="<?php echo $_GET['regno']; ?>">
<input name="model" type="hidden" value="<?php echo $_GET['model']; ?>">
<input name="car" type="hidden" value="<?php echo $_GET['car']; ?>">
<input name="id_no" type="hidden" value="<?php echo $_GET['id_no']; ?>">
<input name="id" type="hidden" value="<?php echo $_GET['id']; ?>">
<input name="occu" type="hidden" value="<?php echo $_GET['occu']; ?>">
<input name="address" type="hidden" value="<?php echo $_GET['address']; ?>">
<input name="loc" type="hidden" value="<?php echo $_GET['loc']; ?>">
<input name="dob" type="hidden" value="<?php echo $_GET['dob']; ?>">
<input name="title" type="hidden" value="<?php echo $_GET['title']; ?>">
<input name="lname" type="hidden" value="<?php echo $_GET['lname']; ?>">
<input name="fname" type="hidden" value="<?php echo $_GET['fname']; ?>">
<input name="email" id="email" type="hidden" value="<?php echo $_GET['email']; ?>">
<input name="phone" type="hidden" value="<?php echo $_GET['phone']; ?>">
<input name="year" type="hidden" value="<?php echo $_GET['year']; ?>">
<input name="state_reg" type="hidden" value="<?php echo $_GET['state_reg']; ?>">
  <table width="100%" border="1">
  <tr>
    <td align="left"><a href="#" style="color:#891C2E;" onclick="goBack()">&larr; Go Back</a>
<script>
function goBack() {
    window.history.back();
}
</script></td>
<td>&nbsp;&nbsp;&nbsp;</td>
    <td align="right"><input type="submit" value="Pay Now" style="background: linear-gradient(135deg, #891C2E 0%, #CCC 100%);
  padding: 10px; border: none; border-radius: 50px; width:100px; color: white; font-weight: 400; font-size: 12pt;"></td>
  </tr>
</table>
 		</form>
        <?php
		}
		?>
        </center>
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