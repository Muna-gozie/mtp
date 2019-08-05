<form method="post" id="myForm" name="myForm" action="../success">
<?php
if($_GET['amount'] == 'Truck - 10000.00')
{
	$amount = substr($_GET['cat'], 8, 15);	
}
else $amount = substr($_GET['cat'], 6, 15);

?>
<input name="agentname" type="hidden" value="<?php echo $_GET['agentname']; ?>">
<input name="agentid" type="hidden" value="<?php echo $_GET['agentid']; ?>">
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

<input type="submit" name="searchButton" style="color:#FFF; background-color:#FFF; border:none;">
</form>
<script>
document.getElementById("myForm").submit();
</script>