<?php 
$n=$_REQUEST['name'];
$e=$_REQUEST['email'];
$p=$_REQUEST['password'];
$m=$_REQUEST['number'];
$a=$_REQUEST['address'];
$con=mysqli_connect("localhost","root","","musical");
$q="insert into register values('$n','$e','$p','$m','$a')";
$run=mysqli_query($con,$q);
if($run>0)
{
    echo header("location:rlogin.php");
}
else
{
	echo"error".mysqli_error($con);
}



mysqli_close($con);
?>
