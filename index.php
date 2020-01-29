<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/load.css">
	<?php include'inc/head.php'?>
</head>
<body class="body" id="body">
	<img src="img/questag.png">
	<div style="padding: 20px;"></div>
	<div class="center load" id="loader">&nbsp</div>
	<script>
		var i=10;
		var interval=2000;
		var mul=1.5;
		var add=10;
		function incLoad()
		{
			
			i*=mul;
			i+=add;
			interval-=700;
			var a=i+"%";
			document.getElementById('loader').style.width = a;
			if(i>=108)
			{
				document.getElementById('body').style.background='#fff';
				mul=0;
				add=0;
				setInterval(open,3000);
			}
		}
		function open()
		{
			window.location='homepage.php';
		}
		setInterval(incLoad,interval);
	</script>
</body>
</html>