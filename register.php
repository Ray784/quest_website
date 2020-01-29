<!DOCTYPE html>
<!--Abhay-->
<html>
<head>
  <title>
     Login
  </title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
	@font-face {
            font-family: 'myFont'; /*a name to be used later*/
            src: url('fonts/BRLNSR.TTF'); /*URL to font*/
        }
    .font{
        font-family:myFont;
        font-size:18px;
    }
    .login {
        background-color: #d3d3d3;
    }
    .clogin{
        background-color: #fff;
        width: 40%;
        border-radius:2%;
        padding: 4%;
        margin-top: -2%;
        margin-bottom: 2%;
    }
    @media (max-width: 978px) {
        .clogin{
        background-color: #fff;
        border-radius:2%;
        padding: 10%;
    }
    }
   
</style>
</head>
<body class="login">
    <br>
    <br>
    <br>
    <br>
        <div class="container" >
            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="col-md-4 col-xs-1 col-sm-1 col-lg-4">
                    
                </div>
                <div class="col-md-4 col-xs-10 col-sm-10 col-lg-4 clogin">
        <div>
            <img src="img/questfinal.png" style="height:60%; width:60%; border-radius:2%; display:block; margin-left:auto; margin-right:auto;">
        </div>
        <div class="main-login main-center">
            <br>
            <?php if(isset($_GET['loginFailed'])){ ?><div class="alert alert-danger" role="alert"> <?php echo $_GET['loginFailed']; ?> </div><?php } ?>
            <?php if(isset($_GET['rsuccess'])){ ?><div class="alert alert-success" role="alert"> <?php echo "Registration Successful"; ?> </div><?php } ?>
            <form class="form-horizontal" method="post" action="addreg.php" onsubmit="return sub();">
              <div class="form-group">
              <label for="id" class="font">First Name: </label>
              <input type="id" class="form-control" name="fname" id="fname"  placeholder="Your First Name Here..." required="true"/>
            </div>
            <div class="form-group">
              <label for="id" class="font">Last Name: </label>
              <input type="id" class="form-control" name="lname" id="lname"  placeholder="Your Last Name Here..." required="true"/>
            </div>
            <div class="form-group">
              <label for="id" class="font">Email: </label>
              <input type="email" class="form-control" name="id" id="id"  placeholder="Your Email Here..." required="true"/>
            </div>

            <div class="form-group">
                <label for="id" class="font">Password: </label>
              <input type="password" class="form-control" name="password" id="password" onkeyup="check();"  placeholder="Your Password Here..." required="true"/>
            </div>

            <div class="form-group">
              <label for="id" class="font">Confirm Password: </label>
              <input type="password" class="form-control" name="cpassword" id="cpassword"  placeholder="Your Password Again..." required="true" onkeyup="check();" />
              <div id="error" class="myFont" style="font-size: 10px; color: red;"></div>
            </div>

            <div class="form-group">
              <label for="id" class="font">College:  </label>
              <input type="id" class="form-control" name="clg" id="clg"  placeholder="Your college name Here..." required="true"/>
            </div>

            <div class="form-group">
              <label for="id" class="font">Email: </label>
              <input type="id" class="form-control" name="clgid" id="clgid"  placeholder="Your college id Here..." required="true"/>
            </div>

            <div class="form-group">
              <label for="id" class="font">Mobile: </label>
              <input type="number" class="form-control" name="phone" id="phone" max="9999999999" min="0"  placeholder="Your Mobile Here..." required="true"/>
            </div>

            <div class="form-group ">
              <button type="submit" class="btn btn-lg btn-primary btn-block">Register</button>
            </div>
             <a href="login.php">Already Have an Account? Login Here!!</a>
          </form>
        </div>
      </div>
      </div>
      <div class="col-md-4 col-xs-1 col-sm-1 col-lg-4">
          
      </div>
      </div>
      
    </div>
    <script>
      function check()
      {
        var pwd=document.getElementById('password');
        var cpwd=document.getElementById('cpassword');
        var error=document.getElementById('error');
        var s=0;
        if(pwd.value!=cpwd.value)
        {
            error.innerHTML="passwords do not match";
            s=0;
        }
        else
        {
            error.innerHTML="passwords match";
            error.style.color="green";
            s=1;
        }
      }
      function sub()
      {
        if(s==1)
          return true;
        return false;
      }
    </script> 
  </body>
</html>