<?php
	session_start();
	if(isset($_SESSION['quest']) & !empty($_SESSION['quest']))
	{
		require_once('../config/connect.php');
		if(isset($_POST) & !empty($_POST))
		{
			$url=$_POST['register'];
			$n=strlen($url);
			$i=strpos($url,'-');
			$j=strpos($url,'#');
			$title=substr($url,$i+1,$j-$i-1);
			$link=substr($url,$j+1);
			$url=substr($url,0,$i);/*correct*/
			$user=$_SESSION['quest'];
			$query="SELECT * FROM `registrations` WHERE user='$user' AND event='$url'";
			$result=mysqli_query($connection,$query);
			if($result==true)
			{
				$cnt=mysqli_num_rows($result);
				if($cnt==0)
				{
					$query="INSERT INTO `registrations`(event,user,title,link) VALUES('$url','$user','$title','$link')";
					$result=mysqli_query($connection,$query);
					if($result=true)
					{

						header('location: elaborate.php?url='.$url.'&success=1');

					}
					else
					{
						header('location: elaborate.php?url='.$url.'&failed=1');
					}
				}
				else
				{

					header('location: elaborate.php?url='.$url.'&error=1');
				}

			}

		}
		else
		{
			echo "post not set";
		}
	}
	else
	{
		header('location: ../login.php');
	}
?>