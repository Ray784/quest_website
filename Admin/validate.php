<?php include '../config/connect.php'?>
<?php
session_start();
  require('../config/connect.php');
  if (isset($_POST) and !empty($_POST)){
    $id = mysqli_real_escape_string($connection, $_POST['id']);
    $password = md5(mysqli_real_escape_string($connection, $_POST['password']));
    $query="SELECT * FROM `admin` WHERE id='$id' and password='$password'";
    $result = mysqli_query($connection, $query);
    
    if($result==true)
    {
        $count = mysqli_num_rows($result);
        if ($count == 1 ){
          $_SESSION['admin'] = $id;
          $_SESSION['time'] = time();
            header('location: index.php');
        }
        else
        {
                header('location: login.php?loginFailed=Invalid%20Login%20Credentials');
    
        }
    }
    else
    {
        header('location: login.php?loginFailed='.mysqli_error($connection));
    }
}
?>