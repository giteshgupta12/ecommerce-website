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
echo "<td><img src='$row[pic]'></td>";
echo"<td>"."<a href='mupdate?id=$row[cid]'>update</a>"."</td>";
echo"<td>"."<a href='mupdate?id=$row[cid]'>Delete</a>"."</td>";
echo "</tr>";
}
echo "</table>";
?>