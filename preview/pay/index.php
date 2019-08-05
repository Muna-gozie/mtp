<?php
if(!isset($_GET['email'])) 
{
echo '<script type="text/javascript">alert("ERROR!!! UNAUTHORIZED BYPASS ACCESS");
		 window.location.assign("../../")
		</script>';
			exit();	
}

error_reporting(0);

if($_GET['amount'] == 'Truck - 10000.00')
{
	$amount = substr($_GET['amount'], 8, 15);	
}
else $amount = substr($_GET['amount'], 6, 15);


$registerTime = date('U');
$refno = substr(md5($phone).$registerTime, 0,17);
?>
 <center>
 <br><br /><br />
 <font style="font-size:18px; font-weight:700; color:#852B2C;">PAY WITH DEBIT CARD</font>
 <hr>
<font style="font-size:20px; font-weight:700; font-weight:bolder; color:#000;">Debit Card </font><img src="../../img/credit1.png" width="50" height="50"><br><br />
<img src="../../img/rave2.png" width="18"> <img src="../../img/rave.png" width="40" height="15"><br /><br />
<form>
  <a class="flwpug_getpaid" 
  data-PBFPubKey="FLWPUBK-d9d52d459a7b8577add4ab47c5f15bf4-X" 
  data-txref="MTP-<?php echo $refno; ?>" 
  data-amount="<?php echo $amount; ?>" 
  data-customer_email="<?php echo $email; ?>"
  data-currency="NGN" 
  data-pay_button_text="Pay Now" 
  data-country="NG" 
  data-redirect_url="pay/success/?usage=<?php echo $_GET['usage']; ?>&email=<?php echo $_GET['email']; ?>&dob=<?php echo $_GET['dob']; ?>&gender=<?php echo $_GET['gender']; ?>&title=<?php echo $_GET['title']; ?>&lname=<?php echo $_GET['lname']; ?>&fname=<?php echo $_GET['fname']; ?>&phone=<?php echo $_GET['phone']; ?>&type=<?php echo $_GET['type']; ?>&amount=<?php echo $amount; ?>&cat=<?php echo $_GET['cat']; ?>&color=<?php echo $_GET['color']; ?>&chasis_no=<?php echo $_GET['chasis_no']; ?>&engine_no=<?php echo $_GET['engine_no']; ?>&regno=<?php echo $_GET['regno']; ?>&model=<?php echo $_GET['model']; ?>&car=<?php echo $_GET['car']; ?>&id_no=<?php echo $_GET['id_no']; ?>&id=<?php echo $_GET['id']; ?>&occu=<?php echo $_GET['occu']; ?>&address=<?php echo $_GET['address']; ?>&loc=<?php echo $_GET['loc']; ?>&ref=<?php echo $refno; ?>"></a>

  <script type="text/javascript" src="https://api.ravepay.co/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>
</form>
<br>
 </center>
