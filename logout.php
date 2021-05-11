<?php session_start();
unset($_SESSION['email']);
unset($_SESSION['cart']);
header("location:index.php");


?>