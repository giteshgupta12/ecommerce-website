<?php 
	include "header.php";
	?>
<!-- products -->
<div class="products">	 
	<div class="container">
		<div class="col-md-9 product-w3ls-right">
			<!-- breadcrumbs --> 
			 
			<div class="clearfix"> </div>
			<!-- //breadcrumbs -->
			<div class="product-top">
				
				<div class="clearfix"> </div>
			</div>
			<div class="table-responsive" style="padding-top:100px;">
				<table class="table">
					<tr>
						<th>Sr.No</th>
						<th>Item Name</th>
						<th>Product Pic</th>
						<th>Quantity</th>
						<th>Price</th>
						<th>Final Price</th>
					</tr>
					<tr>
						<?php 
							$t =0;$total=0;
							if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0) {
								foreach($_SESSION['cart'] as $id=>$quantity){
									
										$obj = mysqli_connect("localhost","root","","musical");
	
									$t++;
									
									$q="select * from addproduct where pid='$id'";
									//echo $q;
									$result=mysqli_query($obj,$q);
									if($row=mysqli_fetch_array($result))
									{
									?> 
									<td><?php echo $t; ?></td>
									<td><?php echo $row['name']."<br/>"; ?></td>
									<td><?php               
										
										echo "<img class='immanu' src='admin/".$row['pic']."' style='width:100px; height:100px ; '/><br/>";
									?></td>
									<td><h6>
										<form action="increase.php">
											<input type="hidden" value="<?php echo $id; ?>" name="id"/>
											<input type="number" style="width:50px" value="<?php echo $quantity; ?>" name="qty" pattern="[0-9]{4}" title="Must be a Number"/><input type="submit" value="update" class="btn btn-primary btn-xs">
										</form>
									</h6></td>
									<td><h2>&#8377;<?php echo $row['price']; ?></h2></td>
									<td><h2>&#8377;<?php $total += ($row['price']*$quantity); echo ($row['price']*$quantity)."<br/>"; 
										$_SESSION['total']=$total;
									?></h2>
									<a href='removeit.php?x=<?php echo $id; ?>'>remove</a></td>
								</tr>
								<?php }
							}
						}
					?>
					<tr>
						<td colspan="5"><h2>Total</h2></td>
						<td><h2>&#8377;<?php echo $total; ?></h2></td>
						<td><h2><a href="pay.php">PAY</a></h2></td>
					</tr>
				</table>
				</div>
			<!-- add-products --> 
			<!-- //add-products -->
		</div>
		<!-- filterbar -->
		<div class="clearfix"> </div>
		
		</div>
</div>
<!--//products-->  
<?php
	include "footer.php";
?>							