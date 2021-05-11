<?php 
$n=$_REQUEST['name'];
$e=$_REQUEST['email'];
$m=$_REQUEST['message'];
$con=mysqli_connect("localhost","root","","contact");
$ins="insert into contact1 values('$n','$e','$m')";
$res=mysqli_query($con,$ins);
if($res>0)
{
 echo "data inserted";

}
else
{
	echo"error".mysqli_error($con);
}
mysqli_close($con);


?>