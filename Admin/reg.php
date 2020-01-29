<?php
session_start();
require_once('../config/connect.php');
  if(isset($_SESSION['admin']))
{
  $userLoggedIn = $_SESSION['admin'];
  $query="SELECT * FROM `admin` WHERE id='$userLoggedIn'";
  $result=mysqli_query($connection,$query);
  $user=mysqli_fetch_array($result);
}
else
{
  header('location: login.php');
}
  $url=$_GET['url'];
  $event=$_GET['type'];
  $reg=mysqli_query($connection,"SELECT * FROM registrations WHERE event='$url'");
?>
<html lang="en">
  <head>
    <style>
      @font-face 
      {
          font-family: 'myFont'; /*a name to be used later*/
          src: url('../fonts/BRLNSR.TTF'); /*URL to font*/
      }
    .font
    {
        font-family:myFont;
        color: white;
        font-weight: normal; font-size:20px; word-wrap: break-word;
    }
    .atag
    {
      color: white;
      text-decoration: none;
    }
    .atag:hover
    {
      color: #ffa;
      text-decoration: none;
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
   <?php include'nav.php'?>
    <br>
    <div class="container">
      <div style="display: block; margin: auto; text-align: center;">
        <font class="font" style="font-weight: bold; font-size:40px; color:#ffa; "><?php echo $event;?></font>
      </div>
      <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12">
        <img src="<?php echo $url?>" style="display: block; margin: auto;" class="col-md-12 col-xs-12 col-lg-12 col-sm-12">
      </div>

      <div class="col-md-10">
        <font class="font" style="font-weight: bold; color:#ffa;  font-size:30px;">Hackathons List<br> Click on the events to check Registrations</font><br>

        

        <table style="background-color: #1d2951" class="table table-bordered table-dark">
          <thead>
            <tr>
              <th scope="col"> <font class="font" style="font-weight: bold; color:#ffa;  font-size:20px;">#</font></th>
              <th scope="col"> <font class="font" style="font-weight: bold; color:#ffa;  font-size:20px;">User</font></th>
              <th scope="col"> <font class="font" style="font-weight: bold; color:#ffa;  font-size:20px;">Payment Status</font></th>
            </tr>
          </thead>
          <tbody>
            <?php $cnt=mysqli_num_rows($reg); $i=0; if($cnt>0){while($regs=mysqli_fetch_array($reg)){ $i+=1;?>
            <tr>
              <?php $link=$regs['link'];?>
              <th scope="row"><?php echo $i;?></th>
              <td class="font"><?php echo $regs['user'];?></a></td>
              <td class="font"><?php echo $regs['paid'];?></td>
            </tr> <?php }}?></font>
          </tbody>
        </table>
        <a class="atag" href="<?php echo $link.'?url='.$url;?>">Click here for Description of the event </a>
        <br>
        <br>
        <br>
        <br>
      </font>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
