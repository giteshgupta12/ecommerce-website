<?php include("header.php"); ?>
		<div class="page">
			<!-- <h6><a href="#">Page Title</a><b>|</b>Page description The quick, brown <span class="for">fox jumps over a lazy dog. DJs flock by when TV ax quiz prog.</span></h6>
		 --></div>
		<div class="content">

		
				<div class="content-bottom store">
					<h3>products</h3>
					<div class="bottom-grid">
					<?php
					$x=$_REQUEST['x'];
					$con=mysqli_connect("localhost","root","","musical");
								$sel="select * from addproduct where cid='$x'";
								$res=mysqli_query($con,$sel);
								while($row=mysqli_fetch_array($res))
								{
								
									?>
									
					
						<div class="col-md-3 store-top" style="margin-bottom:10px;">
							<div class="bottom-grid-top">
								<img class="img-responsive" src="admin/<?php echo $row['pic']; ?>" alt="" style="width:300px; height:250px;">
								<div class="five">
								</div>
								<div class="pre">
									<p><?php echo $row['name']; ?></p>
									<span>Rs<?php echo $row['price']; ?></span>
								<div class="clearfix"> </div>
								<a href="addtocart.php?x=<?php echo $row['pid']; ?>"><button class="btn btn-success">ADD TO CART</button></a>
	
								</div></a>
								
								
							</div>
						</div>

						<?php

}
?>
						<div class="clearfix"> </div>
					</div>


					<div class="bottom-grid">
						<div class="clearfix"> </div>
					</div>


					<div class="bottom-grid">
						<div class="clearfix"> </div>
					</div>


				</div>
				
			</div>

		
	<?php include("footer.php")?>