<?php include("header.php");
if(!isset($_SESSION['name']))
{
	header("location:index.php");
}
?>
<?php
$c=$_REQUEST['categories'];
$n=$_REQUEST['name'];
$p=$_REQUEST['price'];
$fn=$_FILES['pic']['name'];
$fs=$_FILES['pic']['size'];
$ft=$_FILES['pic']['type'];
$ftmp=$_FILES['pic']['tmp_name'];
$path="upload/".$fn;
$con=mysqli_connect("localhost","root","","musical");
$sel="insert into addproduct values('','$c','$n','$p','$path')";
$res=mysqli_query($con,$sel);
if($res>0)
{
	move_uploaded_file($ftmp,$path);
echo "inserted";
}
?>

