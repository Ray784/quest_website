<!doctype html>
<?php
session_start();
require_once('../config/connect.php');
  if(isset($_SESSION['quest']))
{
  $userLoggedIn = $_SESSION['quest'];
  $query="SELECT * FROM user_trimmed WHERE email='$userLoggedIn'";
  $result=mysqli_query($connection,$query);
  $user=mysqli_fetch_array($result);
}
if(isset($_GET['url']))
{

  if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
    $link = "https"; 
  else
    $link = "http"; 
  $link .= "://";  
  $link .= $_SERVER['HTTP_HOST']; 
  $link .= $_SERVER['PHP_SELF']; 
  $url=$_GET['url'];
  $query="SELECT * FROM `hackathon` WHERE url='$url'";
  $result=mysqli_query($connection,$query);
  $event=mysqli_fetch_array($result);
}
else
{
  header('location: index.php');
}
?>

<html lang="en">
  <head>
    <style>
      @font-face {
            font-family: 'myFont'; /*a name to be used later*/
            src: url('../fonts/BRLNSR.TTF'); /*URL to font*/
        }
    .font{
        font-family:myFont;
        color: white;
    }
    .regbut{
        background-color: #ffa; color:black;
    }
    .regbut:hover
    {
      background-color: white;
    }
    </style>
    <?php $src="http://res.cloudinary.com/quest2k19/web_zuerich_home_topevents_1600x900.jpg";
    ?>
    <!-- Required meta tags -->
    
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS/CSS scripts -->
    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/index.css">

    <title>Quest | 2k19</title>
    <link rel="icon" type="image/gif" href="../img/StudioQ-Logo.png" />
  </head>
  <body style="background-image: url('../img/bg-masthead.jpg'); background-repeat: no-repeat; background-size: cover;">
   <?php include'inc/event_nav.php'?>
    <br>
    <br>
    <br> 
    <div class="container">
      <div style="display: block; margin: auto; text-align: center;">
        <?php if(isset($_GET['error'])){ ?><div class="alert alert-danger" role="alert"> Already Registered. To know all your Registrations <a href="../registrations.php">Click Here</a> </div><?php } ?>
        <?php if(isset($_GET['failed'])){ ?><div class="alert alert-danger" role="alert">Registration failed- Server error- Please try again after sometime </div><?php } ?>
        <?php if(isset($_GET['success'])){ ?><div class="alert alert-success" role="alert"> Registration Successful!! To check your registrations <a href="../registrations.php">Click Here</a> </div><?php } ?>
        <font class="font" style="font-weight: bold; font-size:40px; color:#ffa; "><?php echo $event['title'];?></font>
      </div>
      <br>
      <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12">
        <img src="<?php echo $event['url'];?>" style="display: block; margin: auto;" class="col-md-12 col-xs-12 col-lg-12 col-sm-12">
      </div>
      <br>
      <br>
      <div>
        <font>&nbsp</font>
        <hr style="color: white;">
        <font class="font" style="font-weight: bold; color:#ffa;  font-size:40px;">About the workshop: </font><br>
        <hr style="color: white;">
        <font class="font" style="font-weight: bold; font-size:20px; word-wrap: break-word;"><?php echo $event['desp'];?></font>
        <hr style="color: white;">
      </div>
      <div>
        <font class="font" style="font-weight: bold; color:#ffa;  font-size:40px;">Workshop Co-ordinators</font><br>
        <hr style="color: white;">
        <font class="font" style="font-weight: bold; font-size:20px; word-wrap: break-word;"><?php echo $event['coords'];?></font>
        <hr style="color: white;">
      </div>
      <div>
        <font class="font" style="font-weight: bold; color:#ffa;  font-size:40px;">Date & Venue of Workshop</font><br>
        <hr style="color: white;">
        <font class="font" style="font-weight: bold; font-size:20px; word-wrap: break-word;"><?php echo $event['date'];?><br>JNTUHCEH,<br>Kukatpally,Hyderabad.</font>
        <hr style="color: white;">
      </div>
      <div>
        <font class="font" style="font-weight: bold; color:#ffa;  font-size:40px;">Price and Payment Details: </font><br>
        <hr style="color: white;">
        <font class="font" style="font-weight: bold; font-size:20px; word-wrap: break-word;">₹<?php echo $event['price'];?></font>
        <br>
        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
          <div class="col-md-12 col-sm-12 col-xs-12 col-lg-4">
            <font class="font" style="font-weight: bold; font-size:20px; word-wrap: break-word;">Paytm: </font>
            <img src="<?php echo $event['paytm'];?>" class="col-md-12 col-xs-12 col-sm-12" style="height: 40vh;">
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12 col-lg-4">
            <font class="font" style="font-weight: bold; font-size:20px; word-wrap: break-word;">Phone Pay: </font>
            <img src="<?php echo $event['phonepay'];?>" class="col-md-12 col-xs-12 col-sm-12" style="height: 40vh;">
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12 col-lg-4">
            <font class="font" style="font-weight: bold; font-size:20px; word-wrap: break-word;">Tez/Google Pay:  </font>
            <img src="<?php echo $event['tez'];?>" class="col-md-12 col-xs-12 col-sm-12" style="height: 40vh;" >
          </div>
        </div>
      </div>
      <font>&nbsp</font>
      <hr style="color: white;">
      <div class="col-md-12">
        <div class="col-md-4 col-sm-2 col-xs-2 col-lg-4">&nbsp</div>
      <div class="col-md-4 col-sm-8 col-xs-8 col-lg-4" style="display:block; margin: auto; ">
        <form action="register.php" method="post" >
          <button type="submit" name="register" value="<?php echo $event['url'].'-'.$event['title'].'#'.$link;?>" class="btn regbut btn-warning btn-lg btn-block" >Register</button>
        </form>
    </div>
  </div>
    </div>
    <br>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
