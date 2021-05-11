<?php include("header.php"); ?>
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
    <h1><u>Admin Login Form</u></h1>
    <form action="check.php" method="posts">
    	<table class="table table-responsive"> 
    		<tr>
    			<td>User Name</td>
    		    <td><input type="text" class="form-control" name="name" required="required"></td>
    		</tr>
    		<tr>
    			<td>Password</td>
    		    <td><input type="password" class="form-control" name="password"required="required"></td>
    		</tr>
    		<tr>
                <td></td>
                <td><input type="submit" class="btn btn-success" value="login" name="login"></td>
            </tr>
    </table>
    </form>
</div>
<div class="col-md-4"></div>
	</div>
<?php include("footer.php");