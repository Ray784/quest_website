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
  $query="SELECT * FROM `event`";
  $result=mysqli_query($connection,$query);
?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <style>
      @font-face {
            font-family: 'myFont'; /*a name to be used later*/
            src: url('../fonts/BRLNSR.TTF'); /*URL to font*/
        }
    .font{
        font-family:myFont;
        color: white;
    }
    </style>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS/CSS scripts -->
    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/index.css">

    <title>Quest | 2k19</title>
    <link rel="icon" type="image/gif" href="../img/StudioQ-Logo.png" />
  </head>
  <body style="background-size: cover;background-image: url('../img/bg-masthead.jpg'); background-repeat: no-repeat;">
    <div id="main-content">
   <?php include'inc/index_nav.php'?>
    <br>
    <br>
    <br>
    <?php while($event=mysqli_fetch_array($result)){?>
    	
    <div class="outer" style="background-image: url(<?php echo $event['url'];?>)">
    	<a href="../<?php echo $event['site']?>/" style="text-decoration: none;">
      <div class="inner">
        <div class="text">
            <?php echo $event['title'];?><br><font class="font" size="4" style="font-weight: normal; line-height: 20%;"><?php echo $event['brief'];?></font>
        </div>
      </div>
    </div></a>
    <br>
<?php }?>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
