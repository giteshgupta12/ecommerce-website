<?php include("header.php"); ?>
		<div class="page">
			<h6><a href="#">Page Title</a><b>|</b>Page description The quick, brown <span class="for">fox jumps over a lazy dog. DJs flock by when TV ax quiz prog.</span></h6>
		</div>
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
									
					
						<div class="col-md-3 store-top">
							<div class="bottom-grid-top">
								<a href="single.html"><img class="img-responsive" src="admin/<?php echo $row['pic']; ?>" alt="" >
								<div class="five">
								<h6 class="one">10%</h6>
								</div>
								<div class="pre">
									<p><?php echo $row['name']; ?></p>
									<span>Rs<?php echo $row['price']; ?></span>
									<div class="clearfix"> </div>
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

		
		<!---->
		<div class="footer">
			<p class="footer-class">© 2015 Mihstore All Rights Reserved | Template by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
							<a href="#home" class="scroll to-Top" >  GO TO TOP!</a>

		<div class="clearfix"> </div>
		</div>
	</div>

	<!---->
</body>
</html>