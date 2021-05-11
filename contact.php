<?php include_once("header.php");?>

		<div class="page">
			
		</div>
		<div class="content">
			<!---->
		<div class="contact">
				<div class="col-md-8 contact-top">
					<h1><span>Contact Us</span></h1>
						<form action="contact1.php" method="post">
				<div>
				
					<span> Name</span>
					<input type="text"name="name">
				</div> 				
				<div> 	
					<span class="me-at">Email</span>
					<input type="text"name="email"> 
				</div>
				<div> 
					<span class="word-in">Message</span>
					<textarea name="message"> </textarea>
				</div>				
					<input type="submit" value="Submit"> 
				</form>
				</div>
				<div class="col-md-4 contact-bottom">
					<h3>Our Address</h3>
					<ul class="social ">
						<li><span>Railway road,Near PNB bank,Jalandhar</span></li>
						<li><span>Mb  :+91 9988282291</span></li>
						<li><span>Mb  :+91 9988164272</span></li>
						<li><a href="mailto:info@example.com">goldenmusic@gmail.com</a></li>
					</ul>
							
					<div class="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d37494223.23909492!2d103!3d55!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x453c569a896724fb%3A0x1409fdf86611f613!2sRussia!5e0!3m2!1sen!2sin!4v1415776049771"></iframe>
					</div>
				</div>
			<div class="clearfix"> </div>
			</div>

		</div>
		<?php include("footer.php");?>