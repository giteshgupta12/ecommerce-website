<?php 
    $c=$_REQUEST['pid'];
    $n=$_REQUEST['name'];
	$p=$_REQUEST['price'];
	$fn=$_FILES['pic']['name'];
	$ft=$_FILES['pic']['type'];
	$fs=$_FILES['pic']['size'];
	$ftmp=$_FILES['pic']['tmp_name'];
	$path="upload/".$fn;
$con=mysqli_connect("localhost","root","","musical");
$upd="update addproduct  set name='$n',price='$p',pic='$path' where pid='$c'";
$run=mysqli_query($con,$upd);
if($run>0)
{
		move_uploaded_file($ftmp,$path);
	header("location:selectall.php?x=update");
}
else
{
	echo mysqli_error($con);
}
mysqli_close($con);
?>