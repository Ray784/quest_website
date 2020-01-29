<?php
	require_once('../../../config/connect.php');
	$live=1;
	$round=4;
	$query = "UPDATE `round` SET live='$live' WHERE round='$round'";
	$result = mysqli_query($connection,$query);
	if($result == true)
		header('location: ../../Round2');
	else
		echo 'An error occured';
?>