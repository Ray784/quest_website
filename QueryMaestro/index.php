<?php
require_once('../config/connect.php');
	$name="Query Maestro";
	$query="SELECT * FROM `event_index` WHERE name='$name'";
	$result=mysqli_query($connection,$query);
	$data=mysqli_fetch_array($result);
?>
<?php echo $data['page'];?>

