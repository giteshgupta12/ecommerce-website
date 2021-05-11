<?php
$con=mysqli_connect("localhost","root","","first");
$ins="select * from teacher";
echo "<table border='4'>";
$run=mysqli_query($con,$ins);
while($row=mysqli_fetch_array($run))
{
	echo "<tr>";
echo "<td>".$row['T_NAME']."</td>";
echo "<td>".$row['T_Email']."</td>";
echo "<td>".$row['T_password']."</td>";
echo "<td>".$row['T_Qual']."</td>";
echo "<td>".$row['T_Course']."</td>";
echo"<td>".$row['Experience']."</td>";
echo"<td>"."<a href='edit.php?id=$row[T_ID]'>EDIT</a>"."</td>";
echo "</tr>";
}
echo "</table>";
?>