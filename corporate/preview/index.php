<?php
error_reporting(0);
if(!isset($_POST['email'])) 
{
echo '<script type="text/javascript">alert("ERROR!!! UNAUTHORIZED BYPASS ACCESS");
		 window.location.assign("../../")
		</script>';
			exit();	
}




if($_POST['category'] == 'Truck - 10000.00')
{
	$amount = substr($_POST['category'], 8, 5);	
}
elseif(($_POST['category'] == 'Jeep - 5000.00') || ($_POST['category'] == 'Keke - 2500.00'))
{
	$amount = substr($_POST['category'], 7, 4);
}
else $amount = substr($_POST['category'], 6, 4);
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
<link rel="stylesheet" href="css/style.css">

<script type="text/javascript" src="js.js"></script>
<script type="text/javascript" src="../../jquery.min.js"></script>

<link href="facebox.css" media="screen" rel="stylesheet" type="text/css" />
 <script src="../../js/jquery.js" type="text/javascript"></script>
  <script src="../../js/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : '../../img/ajax-loader2.gif',
        closeImage   : '../../img/close.png'
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
					<main id="main" style="height:1050px;">
	<section id="left" style="background-image:url(../../img/left-banner.png);">
		<div id="head">
			<marquee direction="right" behavior="slide"><p align="center" style="font-size:20px; font-weight:bold; color:#891C2E;">Preview Your Details &raquo;&raquo;</p></marquee>
		</div>
		<center><div style="background-color:#852B2C; width:250px; height:60px; opacity:0.7"><br><h3 align="center" style="font-size:18px; font-weight:bold; color:#fff;">Your Purchase: ₦<?php echo number_format($amount);	
		?></h3></div></center>
	</section>
	<section id="right">
        <div align="left"><h1 style="font-size:18px; font-weight:bold; color:#000;">CORPORATE INFORMATION</h1></div><br>
        <form name="form1" id="form1" action="../../preview/scratchcard/" method="GET">
        <input type="hidden" name="amount" id="amount" value="<?php echo $amount; ?>" />
        <input type="hidden" name="type" value="<?php echo $_POST['type']; ?>" />
<table border="0" style="width:auto;">  
  <tr>
    <td><div id="form-card" class="form-field">
                <label for="lname">Name Of Organization:</label>
				<input id="lname" style="width:auto;" name="lname" maxlength="30" value="<?php echo $_POST['lname']; ?>" required>
			</div></td>
  </tr>

	<tr>
    <td><div id="form-card" class="form-field">
                <label for="dateofbirth">Date of Incorporation:</label>
                <div style="margin:10px 0px;">
				<input id="dob" name="dob" value="<?php echo $_POST['dob']; ?>" required>
                </div>
			</div></td>
    <td><div id="form-card" class="form-field">
				<label for="location">Location:</label>
<select name="loc" style="width:197px; height:44px;" required>
<OPTION><?php echo $_POST['loc']; ?></OPTION>
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
				<input id="address" name="address" maxlength="100" value="<?php echo $_POST['address']; ?>" required>
			</div></td>
    <td><div id="form-card" class="form-field">
                <label for="phone">Phone:</label>
				<input id="phone" name="phone" maxlength="11" value="<?php echo $_POST['phone']; ?>" required>
			</div></td>
  </tr>

  <tr>
    <td><div id="form-card" class="form-field">
				<label for="email">Email:</label>
				<input id="email" name="email" maxlength="50" value="<?php echo $_POST['email']; ?>" required>
			</div></td>
    <td><div id="form-card" class="form-field">
                <label for="occupation">RC Number:</label>
				<input id="id" name="id" maxlength="50" value="<?php echo $_POST['id']; ?>" required>
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
  <input id="car" name="car" value="<?php echo $_POST['car']; ?>" style="width:197px; height:44px; border-color:#ddd; border-radius:5px;" required>
        </div></td>
  <td>
   <div id="form-card" class="form-field">
                <label for="model">Model:</label>
 <input id="model" name="model" value="<?php echo $_POST['model']; ?>" style="width:197px; height:44px; border-color:#ddd; border-radius:5px;" required>
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
				<input id="color" name="color" maxlength="20" value="<?php echo $_POST['color']; ?>" required>
			</div></td>
  </tr>
  
  <tr>
    <td><div id="form-card" class="form-field">
				<label for="year">Year of Make:</label>
				<input id="year" name="year" maxlength="19" value="<?php echo $_POST['year']; ?>" required>
			</div></td>
    <td><div id="form-card" class="form-field">
                <label for="state_reg">State of Registration:</label>
				<input id="state_reg" name="state_reg" maxlength="19" value="<?php echo $_POST['state_reg']; ?>" required>
			</div></td>
  </tr>

  <tr>
    <td><div id="form-card" class="form-field">
				<label for="category">Category:</label>
				<input id="cat" name="cat" maxlength="19" value="<?php echo $_POST['category']; ?>" required readonly>
			</div></td>
    <td><div id="form-card" class="form-field">
                <label for="usage">Usage:</label>
				<input id="usage" name="usage" maxlength="19" value="<?php echo $_POST['usage']; ?>" readonly required>
			</div></td>
  </tr>
</table>
			
	<br><br>
		

   <table width="100%">
  <tr>
    <td><div class="blink"><span><a rel="facebox" href="../../preview/pay/?agentname=<?php echo $_POST['agentname']; ?>&type=Corporate&agentid=<?php echo $_POST['agentid']; ?>&usage=<?php echo $_POST['usage']; ?>&cat=<?php echo $_POST['category']; ?>&gender=<?php echo $_POST['gender']; ?>&color=<?php echo $_POST['colour']; ?>&chasis_no=<?php echo $_POST['chasis_no']; ?>&engine_no=<?php echo $_POST['engine_no']; ?>&regno=<?php echo $_POST['reg_no']; ?>&model=<?php echo $_POST['model']; ?>&car=<?php echo $_POST['car']; ?>&id_no=<?php echo $_POST['id_no']; ?>&id=<?php echo $_POST['id']; ?>&occu=<?php echo $_POST['occupation']; ?>&address=<?php echo $_POST['address']; ?>&loc=<?php echo $_POST['location']; ?>&dob=<?php echo $_POST['dob']; ?>&title=<?php echo $_POST['title']; ?>&amount=<?php echo $_POST['category']; ?>&lname=<?php echo $_POST['lname']; ?>&fname=<?php echo $_POST['fname']; ?>&email=<?php echo $_POST['email']; ?>&phone=<?php echo $_POST['phone']; ?>&agent_id=<?php echo $_POST['agent_id']; ?>&year=<?php echo $_POST['year']; ?>&state_reg=<?php echo ucfirst($_POST['state_reg']); ?>" style="background: linear-gradient(135deg, #891C2E 30%, #CCC 60%);
  padding: 10px; border: none; border-radius: 50px; width:200px; color: white; font-weight: 400; font-size: 12pt;">Pay With Debit Card</a></span></div></td>
    <td><div class="blink"><span><input type="submit" style="background: linear-gradient(135deg, #ccc 0%, #891C2E 100%);
  padding: 10px; border: none; border-radius: 50px; width:200px; color: white; font-weight: 400; font-size: 12pt;" value="Pay With Scratch Card"></span></div></td>
  </tr>
</table>  

  
 		</form>
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