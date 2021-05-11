<?php
include_once("header.php");
?>
	<body>
		<div class="page">
			
		</div>
		<div class="content">

			<div class="col-md-9">
			<div class="shoe">
				<img class="img-responsive" src="images/u.jpg" alt="" >
				<div class="product">
				</div>
			</div>
				<div class="content-bottom">
					<h3>Popular Products</h3
					<div class="bottom-grid">
						<div class="col-md-4 shirt">
							<div class="bottom-grid-top">
								<img class="img-responsive" src="images/pooja.jpg" alt="" >
								<div class="five">
								
								</div>
								<div class="pre">
									<p>Electronic Guitar</p>
									<span>price:6500</span>
									<div class="clearfix"> </div>
								</div></a>
								
								
							</div>
						</div>
						<div class="col-md-4 shirt">
							<div class="bottom-grid-top">
								<img class="img-responsive" src="images/7stopper.jpg" alt=""style="height:160px">
								<div class="five">
							
								</div>
								<div class="pre">
									<p>7 stopper hurmonium</p>
									<span>price:4500</span>
									<div class="clearfix"> </div>
								</div></a>
								
								
							</div>
						</div>
						<div class="col-md-4 shirt">
							<div class="bottom-grid-top">
								<img class="img-responsive" src="images/73.jpg" alt="" >
								<div class="five">
							
								</div>
								<div class="pre">
									<p>STEEL TABLA</p>
									<span>price:3400</span>
									<div class="clearfix"> </div>
								</div></a>
								
								
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="bottom-grid">
						<div class="col-md-4 shirt">
							<div class="bottom-grid-top">
								<img class="img-responsive" src="images/75.jpg" alt="" >
								<div class="five">
								
								</div>
								<div class="pre">
									<p>Electronic Tabla</p>
									<span>price:6500</span>
									<div class="clearfix"> </div>
								</div></a>
								
								
							</div>
						</div>
						<div class="col-md-4 shirt">
							<div class="bottom-grid-top">
							<img class="img-responsive" src="images/27.jpg" alt="" >
								<div class="five">
								
								</div>
								<div class="pre">
									<p>Aam Dhol</p>
									<span>price:2800</span>
									<div class="clearfix"> </div>
								</div></a>
								
								
							</div>
						</div>
						<div class="col-md-4 shirt">
							<div class="bottom-grid-top">
							<img class="img-responsive" src="images/59.jpg" alt="" >
								<div class="five">
								
								</div>
								<div class="pre">
									<p>Stagy Dhol</p>
									<span>price:1900</span>
									<div class="clearfix"> </div>
								</div></a>
								
								
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="bottom-grid">
						<div class="col-md-4 shirt">
							<div class="bottom-grid-top">
							<img class="img-responsive" src="images/3.jpg" alt="" >
								<div class="five">
								
								</div>
								<div class="pre">
									<p>Bacha guitar</p>
									<span>price:3600</span>
									<div class="clearfix"> </div>
								</div></a>
								
								
							</div>
						</div>
						<div class="col-md-4 shirt">
							<div class="bottom-grid-top">
							<img class="img-responsive" src="images/G.jpg" alt="" >
								<div class="five">
								
								</div>
								<div class="pre">
									<p>Dhol stand</p>
									<span>price:2900</span>
									<div class="clearfix"> </div>
								</div></a>
								
								
							</div>
						</div>
						<div class="col-md-4 shirt">
							<div class="bottom-grid-top">
							<img class="img-responsive" src="images/M.jpg" alt="" >
								<div class="five">
								
								</div>
								<div class="pre">
									<p>Casio stand</p>
									<span>price:950</span>
									<div class="clearfix"> </div>
								</div></a>
								
								
							</div>
						</div>
					
					</div>
				</div>
							</div>

			<div class="col-md-3 col-md">
			<div class=" possible-about">
					<h4>Sort Products</h4>
						<div class="tab1">
							<ul class="place">
								
								<li class="sort">Sort by <span>category</span></li>
								<li class="by"><img src="images/do.png" alt=""></li>
									<div class="clearfix"> </div>
							</ul>
							<div class="single-bottom">
						
						<?php
									$con=mysqli_connect("localhost","root","","musical");
								$sel="select * from addcat";
								$res=mysqli_query($con,$sel);
								while($row=mysqli_fetch_array($res))
								{
								?>
						<a href="store.php?x=<?php echo $row['cid']; ?>">
							
							<label for="brand"><span><?php echo $row['cname']; ?></span><b></b></label>
						</a>
						<?php
								}
								?>
						
					</div>

						</div>
						
											</div>
						
						<!--script-->
						<script>
							$(document).ready(function(){
								$(".tab1 .single-bottom").hide();
								$(".tab2 .single-bottom").hide();
								$(".tab3 .w_nav2").hide();
								$(".tab4 .single-bottom").hide();
								$(".tab5 .star-at").hide();
								$(".tab1 ul").click(function(){
									$(".tab1 .single-bottom").slideToggle(300);
									$(".tab2 .single-bottom").hide();
									$(".tab3 .w_nav2").hide();
									$(".tab4 .single-bottom").hide();
									$(".tab5 .star-at").hide();
								})
								$(".tab2 ul").click(function(){
									$(".tab2 .single-bottom").slideToggle(300);
									$(".tab1 .single-bottom").hide();
									$(".tab3 .w_nav2").hide();
									$(".tab4 .single-bottom").hide();
									$(".tab5 .star-at").hide();
								})
								$(".tab3 ul").click(function(){
									$(".tab3 .w_nav2").slideToggle(300);
									$(".tab4 .single-bottom").hide();
									$(".tab5 .star-at").hide();
									$(".tab2 .single-bottom").hide();
									$(".tab1 .single-bottom").hide();
								})
								$(".tab4 ul").click(function(){
									$(".tab4 .single-bottom").slideToggle(300);
									$(".tab5 .star-at").hide();
									$(".tab3 .w_nav2").hide();
									$(".tab2 .single-bottom").hide();
									$(".tab1 .single-bottom").hide();
								})	
								$(".tab5 ul").click(function(){
									$(".tab5 .star-at").slideToggle(300);
									$(".tab4 .single-bottom").hide();
									$(".tab3 .w_nav2").hide();
									$(".tab2 .single-bottom").hide();
									$(".tab1 .single-bottom").hide();
								})	
							});
						</script>
						<!-- script -->
					</div>
				<!---->
				
			</div>
			<div class="clearfix"> </div>
		</div>

		</div>
		<!---->
		<?php
		
			include_once("footer.php");
			?>