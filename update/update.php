<?php  
session_start();
    $c=$_REQUEST['cid'];
    $n=$_REQUEST['name'];
	$p=$_REQUEST['price'];
	$fn=$_REQUEST['pic'];
$con=mysqli_connect("localhost","root","","musical");
$upd="update addproduct where='',name='$n',price='$p',pic='$fn'";
$run=mysqli_query($con,$upd);
if($run>0)
{
	header("location:select.php?x=update");
}
else
{
	echo mysqli_error($con);
}
mysqli_close($con);
?>