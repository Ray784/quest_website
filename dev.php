<!doctype html>
<html lang="en">
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
?>
	<head>
	   <style>
    .head {
  margin-top: -120px;
}

@media only screen and (max-width: 784px) {
  .head {
    margin-top: 0px;
  }
}
  </style>
		<title>Quest | 2k19</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		 <link href="css/agency.min.css" rel="stylesheet">
		 <link href="css/all.min.css" rel="stylesheet" type="text/css">
		 <!-- Custom fonts for this template -->
		 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
		<!-- Icon -->
		<link rel="icon" type="image/gif" href="img/StudioQ-Logo.png" />
		
	</head>

	<body>
		
		<!-- Navbar -->
		<?php include'inc/dev_nav.php'?>
			
		<!--body-->

   	 <section class="bg-light" id="team" style="margin-top: -60px; ">
          <div class="container">
            <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Our Developer</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="team-member">
              <img src="http://jntuhcehaa.org/image/abhay.png">
              <h4>Abhay A Bhat</h4>
              <p class="text-muted">Developer</br>IIIyr B.tech, CSE, JNTUH</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-google"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-instagram"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      
    </section>
    <section class="bg-light" id="team" style="margin-top: -70px; padding-top: 10px;">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 text-center">
            <h2 class="section-heading text-uppercase">Our Mentors</h2>
            <h3 class="section-subheading text-muted"></h3>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-3">
            <div class="team-member">
              <img src="http://jntuhcehaa.org/image/sridevi.png">
              <h4>Mrs.Sri Devi Rangu</h4>
              <p class="text-muted">Head Of the Department <br> C.S.E Department</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-google"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-instagram"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>



          <div class="col-sm-3">
            <div class="team-member">
              <img src="img/Neeraja.jpg">
              <h4>Assistant Professor</h4>
              <p class="text-muted">Assistant Professor</br>C.S.E Depatment</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-google"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-instagram"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>

          <div class="col-lg-6 text-center head">
            <h2 class="section-heading text-uppercase">Thanks To</h2>
            <h3 class="section-subheading text-muted"></h3>
          </div>


          <div class="col-sm-6">
            <div class="team-member">
              <img src="http://jntuhcehaa.org/image/hlogo.png">
              <h4>CodeCamp</h4>
              <p class="text-muted">Student Club <br> C.S.E Department</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-google"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-instagram"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>

          
          
    </section>
	</body>
</html>