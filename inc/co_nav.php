<?php
/*
* @author: abhay
* edited: 12/5/2018
* home_nav.php
*/
?>
<!-- Navbar -->
		<nav class="navbar navbar-inverse sticky-top" style="margin:-2px -2px; position: sticky;">
		  <div class="container-fluid">
			<div class="navbar-header">
			  
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>                        
			  </button>
			  
			   <a class="navbar-brand" href="index.php"><span><img src="img\questfinal.png" class="img responsive" style="max-height:40px;max-width:40px;margin:-9px 0px;"/></span></a>
			
			</div>
			
			<div class="collapse navbar-collapse" id="myNavbar">
			  
			  <ul class="nav navbar-nav">
				<li ><a href="Events/index.php">Events</a></li>
				<li ><a href="Hackathons/index.php">Hackathons</a></li>
				<li ><a href="Workshops/index.php">Workshops</a></li>
				<li class="active"><a href="coords.php">Co-ordinators</a></li>
				<li ><a href="dev.php">Developers</a></li>
			  </ul>
			  
			   			
			  
			   <?php
			   if(isset($_SESSION['quest']) & !empty($_SESSION['quest']))
			   {?>
    			      
    			  <ul class="nav navbar-nav navbar-right dropdown">
    			  	<li class="dropdown active">
				    <a class="dropdown-toggle active" data-toggle="dropdown" href="#"><?php echo $user['first_name'].' '.$user['last_name'];?>
				    <span class="caret"></span></a>
				    <ul class="dropdown-menu">
				      <li><a href="edit_profile.php">Edit Profile</a></li> 
				      <li><a href="registrations.php">Your Registrations</a></li> 
				    </ul>
				  </li>
    			      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    			  </ul>
    			<?php
			   }
			   else{?>
    			  <ul class="nav navbar-nav navbar-right">
    			  	<li><?echo "session is ".$_SESSION['quest'];?></li>
    			      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    			  </ul>
			   <?php } ?>
			</div>
			</div>
		</nav>