<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Mihstore A Ecommerce Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Mihstore Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Cabin:400,500,600,700' rel='stylesheet' type='text/css'>
<!--//fonts-->
<!--//slider-script-->
<script>$(document).ready(function(c) {
	$('.alert-close').on('click', function(c){
		$('.message').fadeOut('slow', function(c){
	  		$('.message').remove();
		});
	});	  
});
</script>
<script>$(document).ready(function(c) {
	$('.alert-close1').on('click', function(c){
		$('.message1').fadeOut('slow', function(c){
	  		$('.message1').remove();
		});
	});	  
});
</script>
<script>$(document).ready(function(c) {
	$('.alert-close2').on('click', function(c){
		$('.message2').fadeOut('slow', function(c){
	  		$('.message2').remove();
		});
	});	  
});
</script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
				</script>	
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>				

</head>
<body> 
<!--header-->
<div class="container">
		<div class="header" id="home">	
			<div class="header-para">
				<p>The quick brown <span>fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog.</span></p>	
			</div>	
			<ul class="header-in">
				
				<li ><a href="contact.html" > CONTACT US</a></li>
			</ul>
				<div class="clearfix"> </div>
		</div>
		<!---->
		<div class="header-top">
			<div class="logo">
				<a href="index.html"><img src="images/logo.png" alt="" ></a>
			</div>
			<div class="header-top-on">
				<ul class="social-in">
					<li><a href="#"><i> </i></a></li>						
					<li><a href="#"><i class="ic"> </i></a></li>
					<li><a href="#"><i class="ic1"> </i></a></li>
					<li><a href="#"><i class="ic2"> </i></a></li>
					<li><a href="#"><i class="ic3"> </i></a></li>
				</ul>
			</div>
				<div class="clearfix"> </div>
		</div>
		<div class="header-bottom">
				<div class="top-nav">
				
			  <ul class="megamenu skyblue">
				      <?php if(!isset($_SESSION['name'])) 
					  {
					  ?>
					<li><a class="pink"  href="category.php">Category</a></li>
					<li><a class="pink"  href="product.php">Product</a></li>
					<li><a class="pink"  href="manage.php">Manage</a></li>
					<li><a class="pink"  href="order.php">Order</a></li>
					<li><a class="pink"  href="index.php">Login</a></li>
				    <?php
					  }
					  else
					  {
						  ?>
						  					<li><a class="pink"  href="category.php">Category</a></li>
					<li><a class="pink"  href="product.php">Product</a></li>
					<li><a class="pink"  href="manage.php">Manage</a></li>
					<li><a class="pink"  href="order.php">Order</a></li>
					<li><a class="pink"  href="logout.php">Logout</a></li>
					<?php
					  }
						?>		
				
			  </ul> 
				</div>
					<div class="cart icon1 sub-icon1">
						<h6 >Shopping Cart:
						<span class="item">3 items</span>
						<span class="rate">70$</span>
						<li><a href="#" class="round"> </a>
						<ul class="sub-icon1 list">
						  <h3>Recently added items(3)</h3>
						  <div class="shopping_cart">
							  <div class="cart_box">
							   	 <div class="message">
							   	     <div class="alert-close"> </div> 
										<div class="list_img"><img src="images/si.jpg" class="img-responsive" alt=""></div>
										<div class="list_desc"><h4><a href="#">velit esse molestie</a></h4>
										
										<a href="#" class="offer">1 offer applied</a>
										</div>
		                              <div class="clearfix"></div>
	                              </div>
	                            </div>
	                           <div class="cart_box">
							   	 <div class="message1">
							   	     <div class="alert-close1"> </div> 
										<div class="list_img"><img src="images/si1.jpg" class="img-responsive" alt=""></div>
										<div class="list_desc"><h4><a href="#">velit esse molestie</a></h4>
										
										<a href="#" class="offer">1 offer applied</a>
										</div>
		                              <div class="clearfix"></div>
	                              </div>
	                            </div>
								<div class="cart_box">
							   	 <div class="message2">
							   	     <div class="alert-close2"> </div> 
										<div class="list_img"><img src="images/si.jpg" class="img-responsive" alt=""></div>
										<div class="list_desc"><h4><a href="#">velit esse molestie</a></h4>
										
										<a href="#" class="offer">1 offer applied</a>
										</div>
		                              <div class="clearfix"></div>
	                              </div>
	                            </div>
	                        </div>
							  <div class="check_button"><a href="cart.html">View Cart</a></div>
					      <div class="clearfix"></div>
						</ul>
					</li>
</h6>
						
					</div>
			<div class="clearfix"> </div>
		</div>