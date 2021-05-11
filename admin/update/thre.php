<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
 <head>
  <title> New Document </title>
  </head>

 <body>
<?php
$t=$_REQUEST['two'];
$_SESSION['two']=$t;
?>
  <form action="sum.php" method="get">
  Enter Third Number:<input type="text" name="three"/><br>
  <input type="submit" value="GO"/>
  </form>
 </body>
</html>
