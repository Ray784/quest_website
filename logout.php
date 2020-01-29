<?php
/*
* @author: abhay
* edited: 12/4/2018
* logout.php
*/?>
<?php
session_start();
session_destroy();
header('Location: index.php');
?>