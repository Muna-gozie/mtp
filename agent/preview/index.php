<?php
if(!isset($_POST['agentid'])) 
{
echo '<script type="text/javascript">alert("ERROR!!! UNAUTHORIZED BYPASS ACCESS");
		 window.location.assign("../")
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
					<?php
					if($_POST['agentid'] !="")
  					{
                    echo '<main id="main" style="height:1100px;">';
					}
					?>
	<section id="left">
		<div id="head">
			<marquee direction="left" behavior="slide"><p align="center" style="font-size:20px; font-weight:bold; color:#891C2E;">Add Your Details &raquo;&raquo;</p></marquee>
		</div>
		
	</section>
	<section id="right">
    <?php
		if(isset($_POST['submit']))
		{
		?>
        <form action="preview/">
    <table border="0" style="width:auto;">
     <?php
  if($_POST['agentid'] !="")
  {
  ?>
  <tr>
   <td colspan="2"><br><center><h1 style="font-size:18px; font-weight:bold; color:#000;">AGENT INFORMATION</h1></center></td>
  </tr>
   <tr>
    <td colspan="2"><div id="form-card" class="form-field">
                    <label for="usage">Agent Info:</label>
				<input id="usage" maxlength="19" value="<?php echo $_POST['agentid']; ?> - Katherine Itua" required>
			</div>
            </td>
  </tr>
 <?php 
  }
 ?>
    </table>
    <br><br>
		<center><h1 style="font-size:18px; font-weight:bold; color:#000;">CUSTOMER INFORMATION</h1></center><br>
		
        
			<div id="form-card" class="form-field">
            
				<label for="title">Title:</label>
				<input id="title" name="title" maxlength="10" value="<?php echo $_POST['title']; ?>" required>
			</div>
            <br><br>
            <table border="0" style="width:auto;">
  <tr>
    <td><div id="form-card" class="form-field">
				<label for="fname">Firstname:</label>
				<input id="fname" maxlength="19" value="<?php echo $_POST['lname']; ?>" required>
			</div></td>
    <td><div id="form-card" class="form-field">
                <label for="lname">Lastname:</label>
				<input id="lname" maxlength="19" value="<?php echo $_POST['fname']; ?>" required>
			</div></td>
  </tr>

	<tr>
    <td><div id="form-card" class="form-field">
                <label for="dateofbirth">Date of Birth:</label>
                <div style="margin:10px 0px;">
				<input id="dateofbirth" maxlength="19" value="<?php echo $_POST['dateofbirth']; ?>" required>
                </div>
			</div></td>
    <td><div id="form-card" class="form-field">
				<label for="location">Location:</label>
<select name="location" style="width:197px; height:44px;" required>
<OPTION><?php echo $_POST['location']; ?></OPTION>
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
				<input id="address" maxlength="19" value="<?php echo $_POST['address']; ?>" required>
			</div></td>
    <td><div id="form-card" class="form-field">
                <label for="phone">Phone:</label>
				<input id="phone" maxlength="19" value="<?php echo $_POST['phone']; ?>" required>
			</div></td>
  </tr>

  <tr>
    <td><div id="form-card" class="form-field">
				<label for="email">Email:</label>
				<input id="email" maxlength="19" value="<?php echo $_POST['email']; ?>" required>
			</div></td>
    <td><div id="form-card" class="form-field">
                <label for="occupation">Occupation:</label>
				<input id="occupation" maxlength="19" value="<?php echo $_POST['occupation']; ?>" required>
			</div></td>
  </tr>
  
  <tr>
    <td><div id="form-card" class="form-field">
				<label for="email">Means of Identification:</label>
<select name="identification" style="width:197px; height:44px;" required>
<OPTION><?php echo $_POST['identification']; ?></OPTION>
<option></option>
<option>National ID</option>
<option>Driver's Licence</option>
<option>International Passport</option>
<option>Permanent Voters Card (PVC)</option>
    </select>
			</div></td>
    <td><div id="form-card" class="form-field">
                <label for="occupation">ID Number:</label>
                <div style="margin:12px 0px;">
				<input id="occupation" maxlength="19" value="<?php echo $_POST['id_no']; ?>" required>
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
                <label for="dateofbirth">Select Cars:</label>
  <select name="country" id="country" style="width:197px; height:44px; border-color:#ddd; border-radius:5px;" required>
			<option><?php echo $_POST['car']; ?></option>
            <option ></option>
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
                <label for="dateofbirth">Car Model:</label>
  <select name="state" id="state" style="width:197px; height:44px; border-color:#ddd; border-radius:5px;" required>
  <option><?php echo $_POST['model']; ?></option>
  <option></option>
  </select>
  </div>
  </td>
  </tr>
  
	<tr>
    <td><div id="form-card" class="form-field">
                <label for="reg_no">Registration No:</label>
                <div style="margin:10px 0px;">
				<input id="reg_no" maxlength="19" value="<?php echo $_POST['reg_no']; ?>" required>
                </div>
			</div></td>
    <td><div id="form-card" class="form-field">
				<label for="engine_no">Engine No:</label><br>
				<input id="phone" maxlength="19" value="<?php echo $_POST['engine_no']; ?>" required>
			</div>
</td>
  </tr>

  <tr>
    <td><div id="form-card" class="form-field">
				<label for="chasis_no">Chasis No:</label>
				<input id="chasis_no" maxlength="19" value="<?php echo $_POST['chasis_no']; ?>" required>
			</div></td>
    <td><div id="form-card" class="form-field">
                <label for="color">Colour:</label>
				<input id="color" maxlength="19" value="<?php echo $_POST['colour']; ?>" required>
			</div></td>
  </tr>
  
  <tr>
    <td><div id="form-card" class="form-field">
				<label for="year">Year of Make:</label>
				<input id="year" maxlength="19" value="<?php echo $_POST['year']; ?>" required>
			</div></td>
    <td><div id="form-card" class="form-field">
                <label for="state_reg">State of Registration:</label>
				<input id="state_reg" maxlength="19" value="<?php echo $_POST['state_reg']; ?>" required>
			</div></td>
  </tr>

  <tr>
    <td><div id="form-card" class="form-field">
				<label for="category">Category:</label>
				<input id="category" maxlength="19" value="<?php echo $_POST['category']; ?>" required>
			</div></td>
    <td><div id="form-card" class="form-field">
                <label for="usage">Usage:</label>
				<input id="usage" maxlength="19" value="<?php echo $_POST['usage']; ?>" required>
			</div></td>
  </tr>
</table>
			
	<br>		
			<center><div class="blink"><span>
            <input type="submit" value="Preview Details" style="background: linear-gradient(135deg, #891C2E 0%, #CCC 100%); padding: 10px; border: none; border-radius: 50px; width:200px; color: white; font-weight: 400; font-size: 12pt;"></span></div></center>
  
 		</form>
        <?php
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