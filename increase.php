<?php session_start();
			$obj = mysqli_connect("localhost","root","","musical");

	$id = 	$_REQUEST['id'];
	$qty = 	$_REQUEST['qty'];
	$c = "select * from `addproduct` where pid='$id'";
	$resc = mysqli_query($obj,$c);
	
		if($qty==0){
			unset($_SESSION['cart'][$id]);
		}
		else{
			$_SESSION['cart'][$id] =$qty ;
		}
		echo "<script>window.location='checkout.php';</script>";
		//echo '<script type="text/javascript">window.location=\''.$_SERVER['HTTP_REFERER'].'\';</script>';				 
		//header('location:' . $_SERVER['HTTP_REFERER']);
		
		//print_r($_SESSION['cart']);
	
	
	
	
	
