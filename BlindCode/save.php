<?php require_once('../config/connect.php');
	if(isset($_POST['data']))
	{
		$data=$_POST['data'];
		$id=3;
		$query="UPDATE `event_index` SET page='$data' WHERE id='$id'";
		$result=mysqli_query($connection,$query);
		if($result)
		{
			header('location: ../BlindCode/');
		}
	}
?>