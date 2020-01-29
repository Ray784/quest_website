<?php
	$connection = mysqli_connect('sql300.epizy.com','epiz_23471437','LD8c7SuxhjmRmrK','epiz_23471437_quest');
	if(!$connection)
	{
		echo "Error unable to connect to database.". PHP_EOL;
		echo "Debugging error number: ".mysqli_connect_errno().PHP_EOL;
		echo "Debugging error: ".mysqli_connect_error().PHP_EOL;
		exit;
	}
	?>