<?php include("header.php");?>

<body>
<div class="row">
 <div class="col-md-1"></div>
  <div class="col-md-8">
				<table class="table table-responsive">
				<tr>
				<th>Order_ID</th>
				<th>Payment</th>
				<th>Address</th>
				<th>City</th>
				<th>Services ID</th>
				<th>Eamil</th>
				<th>Total</th>
				<th>Status</th>
				<th>Approval</th>

				</tr>
						 <?php
								$con=mysqli_connect("localhost","root","","musical");
								$sel="select * from finalorder";
								$res=mysqli_query($con,$sel);
								while($row=mysqli_fetch_array($res))
								{
									 echo "<tr>";
									 echo "<td>".$row['oid']."</td>";
									 echo "<td>".$row['payment']."</td>";
									 echo "<td>".$row['address']."</td>";
									 echo "<td>".$row['city']."</td>";
									 echo "<td>".$row['service']."</td>";
									 echo "<td>".$row['email']."</td>";
									 echo "<td>".$row['total']."</td>";
									 echo "<td>".$row['status']."</td>";
									 echo "<td><a href='approved.php?x=$row[oid]' class='btn btn-success'>APPROVED</a></td>";
									 echo "</tr>";
								}
						?>
					</table>
     </div>
<div class="col-md-1"></div>
</div>
    
<?php include("footer.php");?>