<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>RooH - Ek Muheem</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/color/jquery.color-2.1.2.js"></script>
  <link rel="icon" href="favicon.ico" type="image/x-icon">


  <link rel="stylesheet" href="style.css">

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




	}
}
?>	
</body>
</html>
