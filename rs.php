<?php session_start();
$e=$_REQUEST['email'];
$p=$_REQUEST['password'];
$con=mysqli_connect("localhost","root","","musical");
$sel="select * from register where email='$e' and password='$p'";
$res=mysqli_query($con,$sel);
if($row=mysqli_fetch_array($res))
{
 
 $_SESSION['email']=$e;
 header("location:index.php?x=welcome");

}
else
{
	echo"error".mysqli_error($con);
}
mysqli_close($con);


?>