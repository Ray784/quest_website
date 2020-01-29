<?php
	require_once('config/connect.php');
	if(isset($_POST) & !empty($_POST))
	{
		$fname=mysqli_real_escape_string($connection,$_POST['fname']);
		$lname=mysqli_real_escape_string($connection,$_POST['lname']);
		$email=mysqli_real_escape_string($connection,$_POST['id']);
		$id=mysqli_real_escape_string($connection,$_POST['clgid']);
		$clg=mysqli_real_escape_string($connection,$_POST['clg']);
		$pwd=md5(mysqli_real_escape_string($connection,$_POST['password']));
		$mobile=mysqli_real_escape_string($connection,$_POST['phone']);
		$query="INSERT INTO users(email,mobile,first_name,last_name,college,id,password) VALUES('$email','$mobile','$fname','$lname','$clg','$id','$pwd')";
		$result=mysqli_query($connection,$query);
		if($result)
		{
			header('location: login.php?email='.$email.'&rsuccess=1');
		}
		else
		{
			header('location: register.php?loginFailed=Registration unsuccessful- Server error- Please try again after some time');
		}
	}
?>