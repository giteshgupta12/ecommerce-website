<?php include("header.php");
if(!isset($_SESSION['name']))
{
	header("location:index.php");
}
?>
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
    <h1><u>Add Product</u></h1>
    <form action="submit.php" method="post">
    	<table class="table table-responsive"> 
    		<tr>
    			<td>Select category<select name="category">
				<option disabled="disabled">--Select Category--</option>
				<?php
					$con=mysqli_connect("localhost","root","","musical");
					$sel="select * from addcat ";
					$res=mysqli_query($con,$sel);
				    while($row=mysqli_fetch_array($res))
								{
									 echo "<option value='$row[cid]'>".$row['cname']."</option>";

								}
				?>
				

				</select></td>
    		    
    		</tr>
    	
    </table>
    </form>
</div>
<div class="col-md-4"></div>
	</div>
<?php include("footer.php");?>