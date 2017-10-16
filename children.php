<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
<?php
include('config.php');
$sql="Select * FROM Student_Details";
$row=mysqli_query($db,$sql);
$row1=mysqli_fetch_assoc($row);
$cnt=mysqli_num_rows($row);
if($cnt>0)
{
	echo "<div>";
	echo "<table><tr><th>Sr.No.</th><th>Name</th><th>Father's Name</th><th>Class</th><th>Contact No.</th><th>Address</th><th>Result</th><th>Fees</th></tr>";
	while($cnt--)
	{
		$table=array();
		$table["Sr.No."]=$row1["Sr.No."];
		$table["Name"]=$row1["Name"];
		$table["Father's Name"]=$row1["Father's Name"];
		$table["Class"]=$row1["Class"];
		$table["Contact No."]=$row1["Contact No."];
		$table["Address"]=$row1["Address"];
		$table["Result"]=$row1["Result"];
		$table["Fees"]=$row1["Fees"];
		echo "<div style='float:left;padding-bottom:25px;background-color:white;margin:25px;'>";
		echo "<tr><td> ";
		echo $table["Sr.No."];
		echo " </td><td> ";
		echo $table["Name"];
		echo " </td><td> ";
		echo $table["Father's Name"];
		echo " </td><td> ";
		echo $table["Class"];
		echo " </td><td> ";
		echo $table["Contact No."];
		echo " </td><td> ";
		echo $table["Address"];
		echo " </td><td> ";
		echo $table["Result"];
		echo " </td><td> ";
		echo $table["Fees"];
		echo " </td></tr> ";
		$row1=mysqli_fetch_assoc($row);
	}
	echo "</div>";
}
?>
	
</body>
</html>
