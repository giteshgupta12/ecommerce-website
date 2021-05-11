<?php include"header.php";
if(!isset($_SESSION['email']))
{
//header("location:rlogin.php?msg=please login first to see page");
}
?>

<html>
	<head>
		<body>
		<form action="pay2.php" method="POST">
		<table class="table table-responsive table bordered table-striped" style="padding:150px;">
		   <center><h1>Select Your Payment Method</h1><br><br>
			<input type="Radio" name="Pay" value="Debit Card" required="">&nbsp&nbsp&nbspDebit Card<br><br>
			<input type="Radio" name="Pay" value="Credit Card">&nbsp&nbsp&nbspCredit Card<br><br>
			<input type="Radio" name="Pay" value="CashOnDelivery">&nbsp&nbsp&nbspCashOnDelivery<br><br>
			<input type="submit" name="SUB" value="GO" class="btn btn-danger"/></br>
			</center>
			</table>
			</form>
		</body>
	</head>
</html>
<?php include"footer.php";
?>