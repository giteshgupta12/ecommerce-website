<?php include("header.php");
if(!isset($_SESSION['name']))
{
	header("location:index.php");
}
?>
<?php 
$con=mysqli_connect("localhost","root","","musical");
$ins="select * from addproduct";
echo "<table border='4'>";
$run=mysqli_query($con,$ins);
while($row=mysqli_fetch_array($run))
{
	echo "<tr>";
echo "<td>".$row['cid']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['price']."</td>";
echo "<td><img src='$row[pic]' width='100px' height='100px'></td>";
echo"<td>"."<a href='mupdate.php?id=$row[pid]'>update</a>"."</td>";
echo"<td>"."<a href='delete.php?id=$row[pid]'>Delete</a>"."</td>";
echo "</tr>";
}
echo "</table>";
?>

<?php include("footer.php");?>