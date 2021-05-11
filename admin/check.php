<?php 
session_start();
$n=$_REQUEST['name'];
$p=$_REQUEST['password'];
$con=mysqli_connect("localhost","root","","musical");
$sel="select * from admin where username=('$n')&&password=('$p')";
$run=mysqli_query($con,$sel);
if($row=mysqli_fetch_array($run))
{
   $_SESSION['name']=$n;
   header ("location:category.php");
}
   else
	{
  

header("location:index.php");

	} 
mysqli_close($con);
?>