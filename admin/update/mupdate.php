<?php include("header.php"); ?>
<body>
<div class="row">
 <div class="col-md-4"></div>
  <div class="col-md-4">
		<form action="select.php"  method="post" enctype="multipart/form-data">
		<table class="table table-responsive">
		<tr>
					<td>
						View Categories:
					</td>
					<td>
						<select name="categories">
						 <option disabled="disabled" selected="selected">Entered Categories</option>
						 <?php
								$con=mysqli_connect("localhost","root","","musical");
								$sel="select * from addcat";
								$res=mysqli_query($con,$sel);
								while($row=mysqli_fetch_array($res))
								{
									 echo "<option value='$row[cid]'>".$row['cname']."</option>";

								}
						?>
					</select>
					</td>
		</tr>
		<tr>
		<td>Name:</td>
		<td><input type="text"name="name"></td>
		</tr>
		<tr>
		<td>Price:</td>
		<td><input type="text"name="price"></td>
		
		</tr>
		<tr>
		<td>Pic:</td>
		<td><input type="file"name="pic"></td>
		
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
    
<?php include("footer.php");?>