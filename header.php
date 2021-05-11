<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Golden Music House</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="GOLDEN MUSIC HOUSE Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
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
		<div class="header" id="home" style="opacity:0;">	
		<!-- 	<div class="header-para">
				<p> <span></span></p>	
			</div>	 -->
			<ul class="header-in">
				
			<!-- 	<li ><a href="contact.html" > CONTACsddsT US</a></li> -->
			</ul>
				<div class="clearfix"> </div>
		</div>
		<!---->
		<div class="header-top">
			<div class="logo">
				<a href="index.php"><img src="images/logo.png" alt="" ></a>
			</div>
			<div class="header-top-on">
				<ul class="social-in">
	
			</div>
				<div class="clearfix"> </div>
		</div>
		<div class="header-bottom">
				<div class="top-nav">
				
			  <ul class="megamenu skyblue">
			  <?php if(!isset($_SESSION['email']))
			  {
			  ?>
			  <li><a class="pink"  href="index.php">Home</a></li>
				    
				      <li class="active grid"><a  href="#">Products</a>
					    <div class="megapanel">
						<div class="row">
							<div class="col1">
								<div class="h_nav">
									<ul>
									<?php
									$con=mysqli_connect("localhost","root","","musical");
								$sel="select * from addcat";
								$res=mysqli_query($con,$sel);
								while($row=mysqli_fetch_array($res))
								{
								
									?>
										<li><a href="store.php?x=<?php echo $row['cid']; ?>"><?php echo $row['cname']; ?></a></li>
									
										<?php
								}
									?>
												</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									 <img src="images/105.jpg" alt=""height="150px" style="margin-bottom:5px;border-radius:10px;">
									 <img src="images/73.jpg" alt=""height="150px"style="margin-bottom:5px;border-radius:10px;">
									 
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav"><img src="images/pooja.jpg" height="150px" alt=""style="margin-bottom:5px;border-radius:10px;">
								<img src="images/p.jpg" height="150px"alt=""style="margin-bottom:5px;border-radius:10px;">
		
									<!--<h4>Popular Brands</h4>
									<ul>
										<li><a href="store.html">Levis</a></li>
										<li><a href="store.html">Persol</a></li>
										<li><a href="store.html">Nike</a></li>
										<li><a href="store.html">Edwin</a></li>
										<li><a href="store.html">New Balance</a></li>
										<li><a href="store.html">Jack & Jones</a></li>
										<li><a href="store.html">Paul Smith</a></li>
										<li><a href="store.html">Ray-Ban</a></li>
										<li><a href="store.html">Wood Wood</a></li>
									</ul>	
								</div>												
							</div>---->
						  </div>
						</div>
					</li>
					
				    			
				<li><a class="pink"  href="rlogin.php">Login</a></li>


				<?php
			  }
				else
				{
					?>

					<li><a class="pink"  href="index.php">Home</a></li>
				    
				      <li class="active grid"><a  href="#">Products</a>
					    <div class="megapanel">
						<div class="row">
							<div class="col1">
								<div class="h_nav">
									<ul>
									<?php
									$con=mysqli_connect("localhost","root","","musical");
								$sel="select * from addcat";
								$res=mysqli_query($con,$sel);
								while($row=mysqli_fetch_array($res))
								{
								
									?>
										<li><a href="store.php?x=<?php echo $row['cid']; ?>"><?php echo $row['cname']; ?></a></li>
									
										<?php
								}
									?>
												</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									 <img src="images/105.jpg" alt=""height="150px" style="margin-bottom:5px;border-radius:10px;">
									 <img src="images/73.jpg" alt=""height="150px"style="margin-bottom:5px;border-radius:10px;">
									 
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav"><img src="images/pooja.jpg" height="150px" alt=""style="margin-bottom:5px;border-radius:10px;">
								<img src="images/p.jpg" height="150px"alt=""style="margin-bottom:5px;border-radius:10px;">
		
									<!--<h4>Popular Brands</h4>
									<ul>
										<li><a href="store.html">Levis</a></li>
										<li><a href="store.html">Persol</a></li>
										<li><a href="store.html">Nike</a></li>
										<li><a href="store.html">Edwin</a></li>
										<li><a href="store.html">New Balance</a></li>
										<li><a href="store.html">Jack & Jones</a></li>
										<li><a href="store.html">Paul Smith</a></li>
										<li><a href="store.html">Ray-Ban</a></li>
										<li><a href="store.html">Wood Wood</a></li>
									</ul>	
								</div>												
							</div>---->
						  </div>
						</div>
					</li>
					
				    			
				<li><a class="pink"  href="logout.php">Logout</a></li>



<?php
				}
?>
				
			  </ul> 
				</div>
				<?php $t = 0;
if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0) {
	foreach($_SESSION['cart'] as $id=>$quantity){
			$t++;
	}
	count($_SESSION['cart']);
}

?>
					<div class="cart icon1 sub-icon1">
						<h6 >Shopping Cart:
						<a href="checkout.php"><span class="item"><?php echo $t; ?>items</span></a>
						
						
						
					</li>
</h6>
						
					</div>
			<div class="clearfix"> </div>
		</div>