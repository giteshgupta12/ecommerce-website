<?php  
session_start();
    $id=$_SESSION['id'];
    $p=$_REQUEST['password']; 
    $n=$_REQUEST['name'];
	$e=$_REQUEST['email'];
	$q=$_REQUEST['qual'];
	$c=$_REQUEST['course'];
	$ex=$_REQUEST['exp'];
$con=mysqli_connect("localhost","root","","first");
$upd="update teacher set T_NAME='$n',T_Email='$e',T_password='$p',T_Qual='$q',T_Course='$c',Experience='$ex'  where T_ID ='$id'";
$run=mysqli_query($con,$upd);
if($run>0)
{
	header("location:select.php?x=update");
}
else
{
	echo mysqli_error($con);
}
?>