<?php
$x=$_REQUEST['x'];
$con=mysqli_connect("localhost","root","","musical");
$sel="update finalorder set status='Approved' where oid='$x'";
$res=mysqli_query($con,$sel);
if($res>0)
								{
									header("location:order.php");
								}
								
?>