<?php
if(!isset($_POST['email'])) 
{
echo '<script type="text/javascript">alert("ERROR!!! UNAUTHORIZED BYPASS ACCESS");
		 window.location.assign("../../")
		</script>';
			exit();	
}

error_reporting(0);

if($_POST['amount'] == 'Truck - 10000.00')
{
	$amount = substr($_POST['amount'], 8, 15);	
}
else $amount = substr($_POST['amount'], 6, 15);

$email = $_POST['email'];
$usage = $_POST['usage'];
$cat = $_POST['cat'];
$color = $_POST['color'];
$chasis = $_POST['chasis_no'];
$engine = $_POST['engine_no'];
$regno = $_POST['regno'];
$model = $_POST['model'];
$car = $_POST['car'];
$id_no = $_POST['id_no'];
$id = $_POST['id'];
$occu = $_POST['occu'];
$add = $_POST['address'];
$loc = $_POST['loc'];
$title = $_POST['title'];
$dob = $_POST['dob'];
$phone = $_POST['phone'];
$lname = $_POST['lname'];
$fname = $_POST['fname'];


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
window.location.assign("pay/success/?ref=<?php "<script>document.writeln(reference);</script>"; ?>&agentname=<?php echo $_POST['agentname']; ?>&agentid=<?php echo $_POST['agentid']; ?>&usage=<?php echo $_POST['usage']; ?>&amount=<?php echo $amount; ?>&cat=<?php echo $_POST['cat']; ?>&color=<?php echo $_POST['color']; ?>&chasis_no=<?php echo $_POST['chasis_no']; ?>&engine_no=<?php echo $_POST['engine_no']; ?>&regno=<?php echo $_POST['regno']; ?>&model=<?php echo $_POST['model']; ?>&car=<?php echo $_POST['car']; ?>&id_no=<?php echo $_POST['id_no']; ?>&id=<?php echo $_POST['id']; ?>&occu=<?php echo $_POST['occu']; ?>&address=<?php echo $_POST['address']; ?>&loc=<?php echo $_POST['loc']; ?>&dob=<?php echo $_POST['dob']; ?>&title=<?php echo $_POST['title']; ?>&lname=<?php echo $_POST['lname']; ?>&fname=<?php echo $_POST['fname']; ?>&email=<?php echo $_POST['email']; ?>&gender=<?php echo $_POST['gender']; ?>&phone=<?php echo $_POST['phone']; ?>&agent_id=<?php echo $_POST['agent_id']; ?>&year=<?php echo $_POST['year']; ?>&state_reg=<?php echo ucfirst($_POST['state_reg']); ?>")		  
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
  <a class="flwpug_POSTpaid" 
  data-PBFPubKey="FLWPUBK-d9d52d459a7b8577add4ab47c5f15bf4-X" 
  data-txref="rave-123456" 
  data-amount="<?php echo $amount; ?>" 
  data-customer_email="<?php echo $email; ?>" 
  data-currency="NGN" 
  data-pay_button_text="Pay Now" 
  data-country="NG" 
  data-redirect_url="pay/success/?usage=<?php echo $_POST['usage']; ?>&agentname=<?php echo $_POST['agentname']; ?>&agentid=<?php echo $_POST['agentid']; ?>&amount=<?php echo $amount; ?>&cat=<?php echo $_POST['cat']; ?>&color=<?php echo $_POST['color']; ?>&chasis_no=<?php echo $_POST['chasis_no']; ?>&engine_no=<?php echo $_POST['engine_no']; ?>&regno=<?php echo $_POST['regno']; ?>&model=<?php echo $_POST['model']; ?>&car=<?php echo $_POST['car']; ?>&id_no=<?php echo $_POST['id_no']; ?>&id=<?php echo $_POST['id']; ?>&occu=<?php echo $_POST['occu']; ?>&address=<?php echo $_POST['address']; ?>&loc=<?php echo $_POST['loc']; ?>&dob=<?php echo $_POST['dob']; ?>&gender=<?php echo $_POST['gender']; ?>&title=<?php echo $_POST['title']; ?>&lname=<?php echo $_POST['lname']; ?>&fname=<?php echo $_POST['fname']; ?>&email=<?php echo $_POST['email']; ?>&phone=<?php echo $_POST['phone']; ?>&agent_id=<?php echo $_POST['agent_id']; ?>"></a>

  <script type="text/javascript" src="https://api.ravepay.co/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>
</form>
<br>
 </center>
