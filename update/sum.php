<?php session_start(); 
if(isset($_SESSION['two']))
{
	$one=$_SESSION['one'];
	$two=$_SESSION['two'];
	echo "values arrived";
}
else
{
	echo"create session first";
}
$th=$_REQUEST['three'];
$sum=$one+$two+$th;
echo $sum;
session_destroy();
?>