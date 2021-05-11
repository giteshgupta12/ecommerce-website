<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
 <head>
  <title>Sesion</title>
  </head>

 <body>
 <?php
 $o=$_REQUEST['one'];
 $_SESSION['one']=$o;
 ?>
  <form action="thre.php?" method="get">
  Enter Two Number:<input type="text" name="two"/><br>
  <input type="submit" value="GO"/>
  </form>
 </body>
</html>
