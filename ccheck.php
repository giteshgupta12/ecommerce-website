<?php session_start();
$c=$_REQUEST['name'];
$_SESSION['name']=$c;
$con=mysqli_connect("localhost","root","","musical");
$ins="insert into addcat values('','$c')";
$res=mysqli_query($con,$ins);
if($res>0)
{
	header("location:product.php?msg=done");
}
else
{
	echo"mysqli_error($con)";
}
mysqli_close($con);

?>