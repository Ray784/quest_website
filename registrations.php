<!DOCTYPE html>
<?php
session_start();
require_once('config/connect.php');
  if(isset($_SESSION['quest']))
{
  $userLoggedIn = $_SESSION['quest'];
  $query="SELECT * FROM user_trimmed WHERE email='$userLoggedIn'";
  $result=mysqli_query($connection,$query);
  $user=mysqli_fetch_array($result);
}
else
{
    header('location: login.php');
}
  $query="SELECT * FROM `registrations` WHERE user='$userLoggedIn'";
  $result=mysqli_query($connection,$query);
  $cnt=mysqli_num_rows($result);
  $i=0;
?>
<html>
<head>
  <style>
      @font-face {
            font-family: 'myFont'; /*a name to be used later*/
            src: url('fonts/BRLNSR.TTF'); /*URL to font*/
        }
    .font{
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
  <!-- jquery cdn-->
   <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    
   <!-- Required meta tags -->
    
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS/CSS scripts -->
    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <!-- Icon -->
  <link rel="icon" type="image/gif" href="img/StudioQ-Logo.png" />
  <title>Quest | 2k19</title>

</head>
<body style="background-image: url('img/bg-masthead.jpg');">
  <?php include'inc/reg_nav.php';?>
 <div class="container"> 
  <div class="col-md-10">
        <hr style="color: white;">
        <font class="font" style="font-weight: bold; color:#ffa;  font-size:30px;">You have Registered for the following events :<br> Click on the events to go the event page</font><br>

        <font class="font" style="font-weight: bold; font-size:20px; word-wrap: break-word;"><table style="background-color: #1d2951" class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col"> <font class="font" style="font-weight: bold; color:#ffa;  font-size:20px;">#</font></th>
      <th scope="col"> <font class="font" style="font-weight: bold; color:#ffa;  font-size:20px;">Name</font></th>
      <th scope="col"> <font class="font" style="font-weight: bold; color:#ffa;  font-size:20px;">Payment Status</font></th>
    </tr>
  </thead>
  <tbody>
      <?php if($cnt>0){while($reg=mysqli_fetch_array($result)){ $i+=1;?>
      <tr>
        <th scope="row"><?php echo $i;?></th>
        <td><a class="atag" href="<?php echo $reg['link'].'?url='.$reg['event'];?>"><?php echo $reg['title'];?></a></td>
        <td><?php if($reg['paid']==0){echo "not paid";}else{echo "paid";}?></td>
      </tr> <?php }}?></font>
        <hr style="color: white;">
      </div>
       <font class="font" style="font-weight: bold; color:#ffa;  font-size:15px;">*if paid through phonepay or tez or paytm you are requested to send a screenshot of the successful to the event coordinator.
  </div>
</div>
</body>
</html>