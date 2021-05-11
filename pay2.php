    <?php include"header.php"
	?>
	<?php 
if(!isset($_SESSION['email']))
{
header("location:rlogin.php?msg=please login first to see page");
}
?>
<div class="col-md-4" style="padding:25px;">
<head>
	
</head>
<form action="saveorder.php"  method="get">
<?php
$pay=$_REQUEST['Pay'];

if($pay=="Debit Card"||$pay =="Credit Card")
{
?>
	<input type="text" class="form-control" value="<?php echo $pay; ?>" name="paymentby"  readonly/><br/>
	Enter Card Number<input size="16" class="form-control" id="card"  name="CreditCard"/></br>
	Expire<select name="Expire" class="form-control" id="month" required="">
	  <option>January</option>
 	   <option> February </option>	
 		  <option>March</option> 	 	
		  <option>April</option> 
		  <option>May</option> 
          <option>June</option> 	 	
 		  <option>July </option>	 
		  <option>August </option>	 
 		  <option>September </option>	
 		  <option>October</option> 
 		  <option>November </option>
 		  <option>December</option>
		  </select></br>
		 <select name="year" class="form-control" id="year" required="">
		 <?php 
		echo '<option value="2018">2018</option>';
	
		echo '<option value="2019">2019</option>';

		echo '<option value="2020">2020</option>';

		echo '<option value="2021">2021</option>';

		echo '<option value="2022">2022</option>';

		echo '<option value="2023">2023</option>';

		echo '<option value="2024">2024</option>';

		echo '<option value="2025">2025</option>';

		echo '<option value="2026">2026</option>';

		echo '<option value="2027">2027</option>';

		echo '<option value="2028">2028</option>';

		echo '<option value="2029">2029</option>';

		echo '<option value="2030">2030</option>';

		echo '<option value="2031">2031</option>';

		echo '<option value="2032">2032</option>';

		echo '<option value="2033">2033</option>';

		echo '<option value="2034">2034</option>';

		echo '<option value="2035">2035</option>';

		echo '<option value="2036">2036</option>';

	?>
	</select><br>
	CCV<tr><input size="4" class="form-control" id="ccv1"  Name="CCV"/><br></tr>
	
	<?php 
	}
	else
	{
	?>
	<input type="text" name="paymentby" value="COD" readonly/>
	<?php
	}
	?>
	</br>
	Enter Address<textarea name="address" id="add" class="form-control"> </textarea></br>
	City<input type="text" name="city" id="city1" class="form-control" onblur="return city()" /></br>
	PinCode<input type="num" name="PinCode" id="pin"  class="form-control"/></br>
	<input type="submit"  name="SUB" value="GO"  class="btn btn-danger"/>
	</form>
	</div>
<div class="clearfix"></div>
	<?php include"footer.php";
	?>