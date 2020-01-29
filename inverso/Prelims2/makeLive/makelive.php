<?php
	require_once('../../../config/connect.php');
	$live=1;
	$pre=12;
	$query = "UPDATE `round` SET live='$live' WHERE pre='$pre'";
	$result = mysqli_query($connection,$query);
	if($result == true)
		header('location: ../../Prelims2');
	else
		echo 'An error occured';
?>