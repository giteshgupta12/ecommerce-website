<!doctype html>
<html>
<head>
<title>new document</title>
</head>
<body>
<form action="rsubmit.php" method="post"> 
<table>
<tr>
   <td>NAME:</td>
   <td><input type="text" name="name"required="required"></td>
</tr>
<tr>
	<td>EMAIL:</td>
    <td><input type="email"name="email" required="required"></td>
	</tr>
<tr>
    <td>PASSWORD:</td>
    <td><input type="password"  name="password"required="required"/></td></tr>
<tr>
<td>MOBILE:</td>
<td><input type="mobile"  name="number"required="required"maxlength="10"/></td></tr><br>
<tr>
<td>ADDRESS:</td>
<td><input type="textarea"name="address"/></td></tr>
<tr>
<td></td>
<td><input type="submit"name="Go"value="Go"/>
</td>
</tr>
</table>
</form>
</body>
</html>

