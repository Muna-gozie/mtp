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

$email = $_GET['email'];
$usage = $_GET['usage'];
$cat = $_GET['cat'];
$color = $_GET['color'];
$chasis = $_GET['chasis_no'];
$engine = $_GET['engine_no'];
$regno = $_GET['regno'];
$model = $_GET['model'];
$car = $_GET['car'];
$id_no = $_GET['id_no'];
$id = $_GET['id'];
$occu = $_GET['occu'];
$add = $_GET['address'];
$loc = $_GET['loc'];
$title = $_GET['title'];
$dob = $_GET['dob'];
$phone = $_GET['phone'];
$lname = $_GET['lname'];
$fname = $_GET['fname'];


$registerTime = date('U');
$refno = substr(md5($phone).$registerTime, 0,17);
?>
 <center>
 <br><br /><br />
 <font style="font-size:18px; font-weight:700; color:#852B2C;">SELECT DEBIT CARD PAYMENT CHANNEL</font>
 <hr>
<br><font style="font-size:20px; font-weight:700; font-weight:bolder; color:#000;">Debit Card <font color="#852B2C">(Paystack Channel)</font></font><br><br />
<img src="http://localhost/c.h.i/motor3rdparty/img/paystack.png" width="100" height="35">
<form>
  <script src="https://js.paystack.co/v1/inline.js"></script>
  <button type="button" onclick="payWithPaystack()" style="background-color:#0A2740; border: none; border-radius: 5px; width:70px; height:27px; color: white; font-weight: 400; font-size: 10pt;"> Pay Now</button>
</form>
 
<script>
var refno = Math.floor((Math.random() * 1000000000) + 1);
  function payWithPaystack(){
    var handler = PaystackPop.setup({
      key: 'pk_test_4a4abeb1c172e4cfc4a9b6794a55bd34f044de9b',
      email: '<?php echo $email; ?>',
      amount: <?php echo ($amount * 100); ?>,
      //ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
      firstname: '<?php echo $fname; ?>',
      lastname: '<?php echo $lname; ?>',
      // label: "Optional string that replaces customer email"
      metadata: {
         custom_fields: [
            {
                display_name: "<?php echo $lname.' '.$fname; ?>",
                variable_name: "mobile_number",
                value: "<?php echo $phone; ?>"
            }
         ]
      },
	  
	  
      callback: function(response)
	  {
          alert('Payment was successfull, transaction ref is ' + response.reference);   
window.location.assign("pay/success/?ref=<?php "<script>document.writeln(reference);</script>"; ?>&agentname=<?php echo $_GET['agentname']; ?>&agentid=<?php echo $_GET['agentid']; ?>&usage=<?php echo $_GET['usage']; ?>&amount=<?php echo $amount; ?>&cat=<?php echo $_GET['cat']; ?>&color=<?php echo $_GET['color']; ?>&chasis_no=<?php echo $_GET['chasis_no']; ?>&engine_no=<?php echo $_GET['engine_no']; ?>&regno=<?php echo $_GET['regno']; ?>&model=<?php echo $_GET['model']; ?>&car=<?php echo $_GET['car']; ?>&id_no=<?php echo $_GET['id_no']; ?>&id=<?php echo $_GET['id']; ?>&occu=<?php echo $_GET['occu']; ?>&address=<?php echo $_GET['address']; ?>&loc=<?php echo $_GET['loc']; ?>&dob=<?php echo $_GET['dob']; ?>&title=<?php echo $_GET['title']; ?>&lname=<?php echo $_GET['lname']; ?>&fname=<?php echo $_GET['fname']; ?>&email=<?php echo $_GET['email']; ?>&gender=<?php echo $_GET['gender']; ?>&phone=<?php echo $_GET['phone']; ?>&agent_id=<?php echo $_GET['agent_id']; ?>&year=<?php echo $_GET['year']; ?>&state_reg=<?php echo ucfirst($_GET['state_reg']); ?>")		  
      },
      onClose: function(){
          alert('window closed');
      }
    });
    handler.openIframe();
  }
</script>




<br />
<hr>
<br />
<br><font style="font-size:20px; font-weight:700; font-weight:bolder; color:#000;">Debit Card <font color="#852B2C">(Flutterwave Channel)</font></font><br><br />
<img src="http://localhost/c.h.i/motor3rdparty/img/flutterwave.png" width="120" height="35">
<form>
  <a class="flwpug_getpaid" 
  data-PBFPubKey="FLWPUBK-d9d52d459a7b8577add4ab47c5f15bf4-X" 
  data-txref="rave-123456" 
  data-amount="<?php echo $amount; ?>" 
  data-customer_email="<?php echo $email; ?>" 
  data-currency="NGN" 
  data-pay_button_text="Pay Now" 
  data-country="NG" 
  data-redirect_url="pay/success/?usage=<?php echo $_GET['usage']; ?>&agentname=<?php echo $_GET['agentname']; ?>&agentid=<?php echo $_GET['agentid']; ?>&amount=<?php echo $amount; ?>&cat=<?php echo $_GET['cat']; ?>&color=<?php echo $_GET['color']; ?>&chasis_no=<?php echo $_GET['chasis_no']; ?>&engine_no=<?php echo $_GET['engine_no']; ?>&regno=<?php echo $_GET['regno']; ?>&model=<?php echo $_GET['model']; ?>&car=<?php echo $_GET['car']; ?>&id_no=<?php echo $_GET['id_no']; ?>&id=<?php echo $_GET['id']; ?>&occu=<?php echo $_GET['occu']; ?>&address=<?php echo $_GET['address']; ?>&loc=<?php echo $_GET['loc']; ?>&dob=<?php echo $_GET['dob']; ?>&gender=<?php echo $_GET['gender']; ?>&title=<?php echo $_GET['title']; ?>&lname=<?php echo $_GET['lname']; ?>&fname=<?php echo $_GET['fname']; ?>&email=<?php echo $_GET['email']; ?>&phone=<?php echo $_GET['phone']; ?>&agent_id=<?php echo $_POST['agent_id']; ?>"></a>

  <script type="text/javascript" src="https://api.ravepay.co/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>
</form>
<br>
 </center>
