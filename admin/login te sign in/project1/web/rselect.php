<?php 
$n=$_REQUEST['name'];
$p=$_REQUEST['password'];
$con=mysqli_connect("localhost","root","","register");
$sel="select * from rselect=('$n','$p')";
$res=mysqli_query($con,$sel);
if($res>0)
{
 echo"data insert";

}
{
	echo"error";
}
mysqli_close($con);


?>