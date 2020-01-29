<!doctype html>
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

$event=mysqli_query($connection,"SELECT * FROM `event`");
$hack=mysqli_query($connection,"SELECT * FROM `hackathon`");
$work=mysqli_query($connection,"SELECT * FROM `workshop`");

?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
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
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS/CSS scripts -->
    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Quest | 2k19</title>
    <link rel="icon" type="image/gif" href="../img/StudioQ-Logo.png" />
  </head>
  <body style="background-size: cover;background-image: url('../img/bg-masthead.jpg'); background-repeat: no-repeat;">
   <?php include'nav.php'?>
    <div class="container"> 
      <div class="col-md-10">
        <font class="font" style="font-weight: bold; color:#ffa;  font-size:30px;">Events List<br> Click on the events to check Registrations</font><br>

        <font class="font" style="font-weight: bold; font-size:20px; word-wrap: break-word;">

        <table style="background-color: #1d2951" class="table table-bordered table-dark">
          <thead>
            <tr>
              <th scope="col"> <font class="font" style="font-weight: bold; color:#ffa;  font-size:20px;">#</font></th>
              <th scope="col"> <font class="font" style="font-weight: bold; color:#ffa;  font-size:20px;">Event Name</font></th>
              <th scope="col"> <font class="font" style="font-weight: bold; color:#ffa;  font-size:20px;">Price</font></th>
              <th scope="col"> <font class="font" style="font-weight: bold; color:#ffa;  font-size:20px;">Date</font></th>
              <th scope="col"> <font class="font" style="font-weight: bold; color:#ffa;  font-size:20px;">Co-ordinators</font></th>
            </tr>
          </thead>
          <tbody>
            <?php $cnt=mysqli_num_rows($event); $i=0; if($cnt>0){while($reg=mysqli_fetch_array($event)){ $i+=1;?>
            <tr>
              <th scope="row"><?php echo $i;?></th>
              <td><a class="atag" href="reg.php?type=<?php echo $reg['title']?>&url=<?php echo $reg['url'];?>"><?php echo $reg['title'];?></a></td>
              <td><?php echo $reg['price'];?></td>
              <td><?php echo $reg['date'];?></td>
              <td><?php echo $reg['coords'];?></td>
            </tr> <?php }}?></font>
          </tbody>
        </table>
      </font>
    </div>


    <div class="col-md-10">
        <font class="font" style="font-weight: bold; color:#ffa;  font-size:30px;">Hackathons List<br> Click on the events to check Registrations</font><br>

        <font class="font" style="font-weight: bold; font-size:20px; word-wrap: break-word;">

        <table style="background-color: #1d2951" class="table table-bordered table-dark">
          <thead>
            <tr>
              <th scope="col"> <font class="font" style="font-weight: bold; color:#ffa;  font-size:20px;">#</font></th>
              <th scope="col"> <font class="font" style="font-weight: bold; color:#ffa;  font-size:20px;">Event Name</font></th>
              <th scope="col"> <font class="font" style="font-weight: bold; color:#ffa;  font-size:20px;">Price</font></th>
              <th scope="col"> <font class="font" style="font-weight: bold; color:#ffa;  font-size:20px;">Date</font></th>
              <th scope="col"> <font class="font" style="font-weight: bold; color:#ffa;  font-size:20px;">Co-ordinators</font></th>
            </tr>
          </thead>
          <tbody>
            <?php $cnt=mysqli_num_rows($hack); $i=0; if($cnt>0){while($reg=mysqli_fetch_array($hack)){ $i+=1;?>
            <tr>
              <th scope="row"><?php echo $i;?></th>
              <td><a class="atag" href="reg.php?type=<?php echo $reg['title']?>&url=<?php echo $reg['url'];?>"><?php echo $reg['title'];?></a></td>
              <td><?php echo $reg['price'];?></td>
              <td><?php echo $reg['date'];?></td>
              <td><?php echo $reg['coords'];?></td>
            </tr> <?php }}?></font>
          </tbody>
        </table>
      </font>
    </div>



    <div class="col-md-10">
        <font class="font" style="font-weight: bold; color:#ffa;  font-size:30px;">Workshops List<br> Click on the events to check Registrations</font><br>

        <font class="font" style="font-weight: bold; font-size:20px; word-wrap: break-word;">

        <table style="background-color: #1d2951" class="table table-bordered table-dark">
          <thead>
            <tr>
              <th scope="col"> <font class="font" style="font-weight: bold; color:#ffa;  font-size:20px;">#</font></th>
              <th scope="col"> <font class="font" style="font-weight: bold; color:#ffa;  font-size:20px;">Event Name</font></th>
              <th scope="col"> <font class="font" style="font-weight: bold; color:#ffa;  font-size:20px;">Price</font></th>
              <th scope="col"> <font class="font" style="font-weight: bold; color:#ffa;  font-size:20px;">Date</font></th>
              <th scope="col"> <font class="font" style="font-weight: bold; color:#ffa;  font-size:20px;">Co-ordinators</font></th>
            </tr>
          </thead>
          <tbody>
            <?php $cnt=mysqli_num_rows($work); $i=0; if($cnt>0){while($reg=mysqli_fetch_array($work)){ $i+=1;?>
            <tr>
              <th scope="row"><?php echo $i;?></th>
              <td><a class="atag" href="reg.php?type=<?php echo $reg['title']?>&url=<?php echo $reg['url'];?>"><?php echo $reg['title'];?></a></td>
              <td><?php echo $reg['price'];?></td>
              <td><?php echo $reg['date'];?></td>
              <td><?php echo $reg['coords'];?></td>
            </tr> <?php }}?></font>
          </tbody>
        </table>
      </font>
    </div>
  </div>
</body>
</html>
      




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
