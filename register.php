<?php include("header.php");?>

<head>
<script>
function validation()
{
	var n=document.getElementById("n").value;
	var p=document.getElementById("p").value;
	var e=document.getElementById("e").value;
	var m=document.getElementById("m").value;
	var a=document.getElementById("a").value;


	 
	 if(n=="" || p=="" || e=="" || m=="" || a=="")
	{
	  alert("First fill the Username,Email and password"); 
	 return false;
	}
	else{
	  return true; 
	}
}
	</script>
</head>
<body>
<form action="rsubmit.php" method="post"> 
<table>
<tr>
   <td>NAME:</td>
   <td><input type="text" name="name" id="n"></td>
</tr>
<tr>
    <td>PASSWORD:</td>
    <td><input type="password"name="password" id="p"/></td></tr>
<tr>
<tr>
	<td>EMAIL:</td>
    <td><input type="text "name="email" id="e"></td>
	</tr>

<td>MOBILE:</td>
<td><input type="mobile"name="number"maxlength="10" id="m"/></td></tr><br>
<tr>
<td>ADDRESS:</td>
<td><input type="textarea"name="address" id="a"/></td></tr>
<tr>
<td></td>
<td><input type="submit" name="Go"value="Go" onclick="return validation()";></td>
</body>
</table>
<?php include("footer.php"); ?>


