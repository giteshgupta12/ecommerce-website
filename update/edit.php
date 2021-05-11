<?php session_start();?>
<!DOCTYPE HTML>
<html>
 <head>
  <title> New Document </title>
  
 </head>
<?php
$id=$_REQUEST['id'];
$_SESSION['id']=$id;
$con=mysqli_connect("localhost","root","","first");
$sel="select * from teacher where T_ID='$id'";
$run=mysqli_query($con,$sel);
if($row=mysqli_fetch_array($run))
{
	$n=$row['T_NAME'];
	$e=$row['T_Email'];
	$p=$row['T_password'];
	$q=$row['T_Qual'];
	$c=$row['T_Course'];
	$ex=$row['Experience'];
}
?>
 <body>
  <form action="update.php" method="post">
  <table>
	<tr>
		<td><label>T_NAME</label></td>
		<td><input type="text" name="name" value="<?php echo $n; ?>" /></td>
	</tr>
	<tr>
		<td><label>T_Email</label></td>
		<td><input type="email" name="email" value="<?php echo $e; ?>"/></td>
	</tr>
	<tr>
		<td><label>T_Password</label></td>
		<td><input type="password" name="pass" value="<?php echo $id; ?>"/></td>
	</tr>
	<tr>
		<td><label>T_Qual</label></td>
		<td><input type="text" name="qual" value="<?php echo $q; ?>"/></td>
	</tr>
		<tr>
		<td><label>T_Course</label></td>
		<td><input type="text" name="course" value="<?php echo $c; ?>"/></td>
	</tr>
		<tr>
		<td><label>T_Experience</label></td>
		<td><input type="number" name="exp" value="<?php echo $ex; ?>"/></td>
	</tr>
	<tr>
		<td><input type="submit" value="Update"/></td>
		<td><input type="reset" /></td>
	</tr>
  </table>
  </form>
 </body>
</html>
