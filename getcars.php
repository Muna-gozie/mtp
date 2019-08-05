<?php 

include("db.php");

if(isset($_POST['c_id'])) {
	$sql = "select * from `models` where `car_id`=".mysqli_real_escape_string($con, $_POST['c_id'])." order by model asc";
	$res = mysqli_query($con, $sql);
	if(mysqli_num_rows($res) > 0) {
		echo "<option value=''>Select Model</option>";
		while($row = mysqli_fetch_object($res)) {
			echo "<option value='".$row->id."'>".ucfirst(strtolower($row->model))."</option>";
		}
	}
} else {
	header('location: ./');
}
?>
