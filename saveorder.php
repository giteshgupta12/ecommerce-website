<?php
include("header.php");
if(!isset($_SESSION['email']))
{
	header("location:rlogin.php?x=loginfirst");
}
else
{
	$e=$_SESSION['email'];	
}
?>


<div style="height:500px;">
<?php
 if(isset($_REQUEST['SUB'])){
	$paymentby =$_REQUEST['paymentby'];
	$address =$_REQUEST['address'];
	 $city=$_REQUEST['city'];
	$PinCode =$_REQUEST['PinCode'];
	$e =$_SESSION['email'];
	$date = date("d/m/y");
	$all="";


				
				$services=0;$accser=0;$total=0;

		if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0) {
				foreach($_SESSION['cart'] as $id=>$quantity){
					$services = $services. ",".$id;	
					$obj = mysqli_connect("localhost","root","","musical");

   $q="select * from addproduct where pid='$id'";
				$result=mysqli_query($obj,$q);
				if($row=mysqli_fetch_array($result))
				{
					$total += ($row['price']*$quantity);
					
				}

				
				
	}		}
	
	
	
				

$obj=mysqli_connect('localhost','root','','musical');

	{
$q="insert into finalorder values('','$paymentby','$address','$city','$PinCode','$e','$date','$services','$total','Pending')";
$k = mysqli_query($obj,$q);	
						if($k>0){

							$qry1 = "select * from `finalorder` where email='$e'";

							$result = mysqli_query($obj,$qry1);

							while($row = mysqli_fetch_array($result))
							{
								unset($_SESSION['cart']);
								$o = $row[0];
								$pid = $row['payment'];
							}
						}
					
					else{
						//header("location:index.php");
						echo mysqli_error($obj);
					}

	}

}
				?>
				<div id="a"><br><br><br><Br>
                <h1><center>    Thanks For Ordering The Product   </center></h1><br><Br><br><br>
	
                </h1>
				<h2><center>Your Order is Under Processing...
					<?php echo "Order Id is <a href='orders.php?x=$o'>$o </a>Is Accepted Wait Till Approved"; ?><br>
					<?php echo "Be Ready the Payment of <b> Rs. $total</b> for the $pid"; ?><br>
					<a href="index.php">Continue Your Shopping</a> <br>
				</h2></center>
				</div>

</div>

<?php

include("footer.php");
?>