
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
	
	
	
	</style>
	
	<style type="text/css" media="print">
	
	.NonPrintable, #Menu, #Footer, #Header
	
	{
	
	display: none;
	
	}
	
	</style>
	
	<style type="text/css">
	
	
	.style21 {font-size: 10}
	
	
	</style>
	
	<link href="css.css" rel="stylesheet" type="text/css" />
	</head>
	
	
	
	<body><p>
	<?php
	if (isset($_GET['submit'])) 
	{
	?>
	<table width="678" border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#940403" style="height:auto;">
	
	<tr>
	
	<td width="668" height="69" align="left" valign="middle" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
	
	<tr>
	
	<td height="61" align="center" valign="middle"><p class="style20">MOTOR VEHICLE (THIRD PARTYINSURANCE) ACT, 1945</p>
	
<font style="font-size:20px; font-weight:bold; font-family:Arial, Helvetica, sans-serif;">CERTIFICATE OF INSURANCE</font></td>
	
	</tr>
	
	</table></td>
	
	</tr>
	
	<tr>
	
	<td align="center" valign="top" bgcolor="#FFFFFF"><table width="666" border="2" cellpadding="0" cellspacing="0" bordercolor="#FF6A6A">
	
	<tr>
	
	<td width="660" height="692" valign="top" class="style6"><table width="660" border="0" cellpadding="4" cellspacing="0">
	
	<tr>
	
	<td colspan="3"><table width="100%" border="0" cellpadding="3" cellspacing="3" bgcolor="#FFD7D7">
	
	<tr>
	
	<td width="73" bgcolor="#791B35" style="color:#fff;"><strong>Certficate no:</strong></td>
	
	<td width="248" bgcolor="#791B35" style="color:#fff;">&nbsp;&nbsp;&nbsp;<?php echo $_GET['cert']; ?></td>
	
	<td width="56" bgcolor="#791B35" style="color:#fff;"><strong>Policy no:</strong></td>
	
	<td width="232" bgcolor="#791B35" style="color:#fff;">&nbsp;&nbsp;&nbsp;<?php echo $_GET['policy']; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	₦<?php
	if($_GET['amount'] == 10000.0000)
	{
	    echo substr($_GET['amount'], 0, 8).'.00'; 
	}
	elseif($_GET['amount'] != 10000.0000)
	{
	    echo substr($_GET['amount'], 0, 7).'.00'; 
	}
	?>
	</td>
	
	</tr>
	
	</table></td>
	
	</tr>
	
	<tr>
	
	<td colspan="3" align="center" style="background-image:url(../img/certimage.png);  background-size: 100% 100%;">
    <table width="100%" border="0" cellspacing="1" cellpadding="0">
	
	<tr>
	
	<td><table width="628" border="0" cellpadding="4" cellspacing="0">
	
	<tr>
	
	<td width="14" height="32" align="center">1.</td>
	
	<td width="164"><div align="left">Index mark and registration number of vehicle:</div></td>
	
	<td width="120"><span ><?php 
   		echo $_GET['regno'];
	?></span>&nbsp;</td>
	
	<td width="56">Make/Model: </td>
	
	<td width="234" ><?php 
   		echo $_GET['car'].' '.$_GET['model'];
	?></td>
	
	</tr>
	
	<tr>
	
	<td height="35" align="center">2.</td>
	
	<td><div align="left">Name of Policy Holder:</div></td>
	
	<td colspan="3"><span >
	
	
	<?php 
   	echo $_GET['fullname'];
	?>
	
	</span></td>
	
	</tr>
	
	<tr>
	
	<td align="center" valign="top">3.</td>
	
	<td><div align="left">Effective date of the commencement of insurance for the purpose of the Act.</div></td>
	
	<td colspan="3"><span ><?php echo $_GET['date']; ?></span></td>
	
	</tr>
	
	<tr>
	
	<td height="26" align="center">4.</td>
	
	<td><div align="left">Date of expiry of Insurance:</div></td>
	
	<td colspan="3"><span >
	
	<?php 
   	echo $_GET['expiry'];
	?><br></span></td>
	
	</tr>
	
	<tr>
	
	<td height="36" align="center">5.</td>
	
	<td><div align="left">Persons or class persons Entitled to drive</div></td>
	
	<td colspan="3">&nbsp;</td>
	
	</tr>
	
	<tr>
	
	<td colspan="5"><blockquote>
	
	<p align="left" class="header"><strong>(a) </strong>The PolicyHolder. The Policyholder may also drive a private Motor Car (but not a Motor Cycle or Commercial vehicle or other mechanically propelled vehilce) not belonging to him and not hired to him under a hire purchase agreement.<br />
	
	<strong>(b)</strong> Any other person who is driving on the Policyholder's order or with his permission provided that the person driving is permitted in accordance with the licensing or other laws or regulation to drive the Motor Vehicle or has been so permitted and is not disqualified by order of a Court of Law or by reason of enactment or regulation in that behalf from driving such Motor Vehicle.</p>
	
	</blockquote></td>
	
	</tr>
	
	<tr>
	
	<td align="center">6.</td>
	
	<td><div align="left">Limitation as to use*</div></td>
	
	<td colspan="3"><div align="left"><span class="style14">THIRD PARTY ONLY</span></div></td>
	
	</tr>
	
	<tr>
	
	<td colspan="5">
	
	
	
	<blockquote>
	
	<div align="left">To verify the validity of your insurance, SMS: Policy No. *Plate No. to 33215 or visit: www.askniid.org</div>

	
	</blockquote>
	
	<blockquote>
	
	<div align="left">Use only for social domestic and pleasure purpose and for the Policyholder's business.</div>
	
	</blockquote></td>
	
	</tr>
	
	</table></td>
	
	</tr>
	
	</table></td>
	
	</tr>
	
	<tr>
	
	<td height="38" colspan="3" valign="top" class="header"><div align="left">The Policy does not cover use for hire or reward or for racing pace-making reliability trial speed testing or use for any purpose in connection with the Motor Trade.</div></td>
	
	</tr>
	
	<tr>
	
	<td height="38" colspan="3" valign="top" class="header"><p align="left"><strong>I/We hereby Certify</strong> that the policy to which this certification relates is issued in accordance with the provision of the motor vehicles. (Third party Insurance) Act 1945</p></td>
	
	</tr>
	
	<tr height="">
	<td width="193" valign="bottom" style="text-align:center;">&nbsp;&nbsp;<img src="../img/new_cert_sign.PNG" width="150" height="48" align="absmiddle"><p class="style19">________________________ </p>
	<blockquote>
	<p class="style19"><strong>Examined</strong></p>
	</blockquote></td></td>
	<td width="100"><blockquote>
	<p>&nbsp;</p>
	<blockquote>&nbsp;</blockquote>
	</blockquote></td>
	<td width="193" valign="bottom" style="text-align:center;">&nbsp;&nbsp;<img src="../img/stamp.jpg" height="80" align="absmiddle"><p class="style19">________________________ </p>
	<blockquote>
	<p class="style19"><strong>Authorised Signatory</strong></p>
	</blockquote></td>
	</tr>
	
	<tr>
	
	<td colspan="3" align="center"><table width="687" border="0" align="center" cellpadding="2" cellspacing="2">
	
	<tr>
	
	<td width="400" align="left" valign="middle" class="style6 style19"><span class="style7"><img src="../img/certlogo.png" width="300" height="79" /></span></td>
	<td align="left" class="style6 style19">Consolidated Hallmark Insurance House <br />
	266, Ikorodu Road,<br />
	Obanikoro <br />
	Lagos<br />
	Tel: 012912543, 012912532 Fax.01-2700272, 0700CHINSURANCE
	info@chiplc.com.
	<br />
	http://www.chiplc.com</td>

	
	</tr>
	
	</table></td>
	
	</tr>
	
	</table></td>
	
	</tr>
	
	</table></td>
	
	</tr>
	
	</table>

<?php
	}
?>

	<div align="center">
    <a href="../print/" onclick="print()" class="NonPrintable" target="new" style="background: linear-gradient(135deg, #891C2E 0%, #CCC 100%); padding: 10px; border: none; border-radius: 50px; width:200px; color: white; font-weight: 400; font-size: 12pt; text-decoration:none;">Print Certificate</a></div>

	
	</p>
	
	</body>
	
	</html>