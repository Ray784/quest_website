<?php
	require_once('../../../config/connect.php');
	$live=1;
	$pre=3;
	$query = "UPDATE `round` SET live='$live' WHERE round='$pre'";
	$result = mysqli_query($connection,$query);
	if($result == true)
		header('location: ../../Round1');
	else
		echo 'An error occured';
?>