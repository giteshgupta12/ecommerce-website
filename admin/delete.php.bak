<?php
$x=$_REQUEST['x'];
$con=mysqli_connect("localhost","root","","musical");
$dlt="delete from addproduct where pid='$x'";
$run=mysqli_query($con,$dlt);
if($run>0)
{
	echo "Deleted";
}
else
{
	echo"error".mysqli_error($con);
}
?>