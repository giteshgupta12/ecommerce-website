<?php 
$n=$_REQUEST['name'];
$con=mysqli_connect("localhost","root","","musical");
$sel="insert into addcat values('','$n')";
$run=mysqli_query($con,$sel);
if($run>0)
{
    echo"category insert";
}
else
{
	echo"error".mysqli_error($con);
}



mysqli_close($con);
?>