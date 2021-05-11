<?php include("header.php"); ?>
<h1> Welcome To Our Website New User <a href="register.php">Click Here</a></h1>
<html>
<head>
<script>
function validation()
{
	var p=document.getElementById("p").value;
	var e=document.getElementById("e").value;
	var patt=/^[a-zA-Z]+\@+[a-zA-Z0-9]+\.+[a-zA-Z]{2,3}$/;
	if(e=="" && p=="")
	{
		alert("First fill the email and password");
		return false;
	}
	else if(!patt.test(e))
	{
		alert("Email pattern doesn't match");
		return false;
	}
	else
	{
	  return true; 
	}
}
	</script>
</head>
<body>
<br><br><br><br><br><br>
<center>
<span id=""></span>

<form action="rs.php" method="get" > 
	<table class="table table-responsive">
		<tr>
			<td>EMAIL</td>
		    <td><input type="text" name="email" id="e" class="form-control"></td>
	   </tr>
	   <tr>
	       <td>PASSWORD</td>
		   <td><input type="password" name="password" required="" id="p" class="form-control"></td>
       </tr>
		<tr>
			<td><input type="submit" name="log in" class="btn btn-primary" onclick="return validation();" ></td>
		</tr>
	</table>
</form>
</center>
<br><br><br><br><br>
</body>
</html>
<?php include("footer.php") ?>
