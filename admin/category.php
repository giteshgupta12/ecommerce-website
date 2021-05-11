<?php include("header.php");
if(!isset($_SESSION['name']))
{
	header("location:index.php");
}
?>
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
    <h1><u>Add category</u></h1>
    <form action="submit.php" method="post">
    	<table class="table table-responsive"> 
    		<tr>
    			<td>Category name</td>
    		    <td><input type="text" class="form-control" name="name" required="required"></td>
    		</tr>
    		<tr>
                <td></td>
                <td><input type="submit" class="btn btn-success" value="Go" name="GO"></td>
            </tr>
    </table>
    </form>
</div>
<div class="col-md-4"></div>
	</div>
<?php include("footer.php");?>