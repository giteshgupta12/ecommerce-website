<?php include("header.php");
if(!isset($_SESSION['name']))
{
	header("location:index.php");
}
?>
<body>
<div class="row">
 <div class="col-md-4"></div>
  <div class="col-md-4">
  <?php
  $x=$_REQUEST['id'];
								$con=mysqli_connect("localhost","root","","musical");
								$sel="select * from addproduct where pid='$x'";
								$res=mysqli_query($con,$sel);
								if($row=mysqli_fetch_array($res))
								{
									$n=$row['name'];
									$p=$row['price'];
								}
						
						?>
		<form action="update.php"  method="post" enctype="multipart/form-data">
		<table class="table table-responsive">
		<tr>
					<td>
						Product ID
					</td>
				
						
						<td><input type="text" name="pid" value="<?php echo $x; ?>" readonly="readonly"/></td>					</td>
		</tr>
		<tr>
		<td>Name:</td>
		<td><input type="text" name="name" value="<?php echo $n; ?>"/></td>

		</tr>
		<tr>
		<td>Price:</td>
		<td><input type="text" name="price" value="<?php echo $p; ?>"/></td>
		
		</tr>
		<tr>
		<td>Pic:</td>
		<td><input type="file" name="pic"/></td>
		
		</tr>
		<tr>
			<td></td>
			<td><input type="submit"/>
		</tr>
		<div class="col-md-4"></div>
		</table>
		</form>
     </div>
<div class="col-md-4"></div>
</div>
    
</body>
<?php include("footer.php");?>