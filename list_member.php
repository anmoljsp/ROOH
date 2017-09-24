<?php
include 'connect.php';
echo "<html><body><div id='1'>CURRENT MEMBERS<div id='1.1'><div id='1.2'>";
$sql="SELECT * FROM add_member";
$result=mysqli_query($db,$sql);
while ($row=mysqli_fetch_assoc($result))
{
	//echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['pro_pic'] ).'"/>';
	//echo $row['year'];
	$src="images/".$row["pic_name"];
	//echo $src;
	echo "<div style='float:left;'><table><tr><td rowspan='6'>";
	echo '<img style="height:100px;width:150px;" src="data:image/jpeg;base64,'.base64_encode( $row['pro_pic'] ).'"/>';
	echo "</td></tr><tr><td>NAME:</td><td>";
	echo $row['name'];
	echo "</td></tr><tr><td>DEPARTMENT:</td><td>";
	echo $row['department'];
	echo "</td></tr><tr><td>EMAIL:</td><td>";
	echo $row['email'];
	echo "</td></tr><tr><td>YEAR:</td><td>";
	echo $row['year'];
	echo "</td></tr><tr><td>DESIGNATION:</td><td>";
	echo $row['designation'];
	echo "</td></tr></table></div>";
}
echo "<div id ='1.3'>ALUMINI</div><div id='1.4'>";

$sql1="SELECT * FROM alumini_member";
$result1=mysqli_query($db,$sql1);
while ($row1=mysqli_fetch_assoc($result1))
{
	//echo $row['year'];
	$src="images/".$row1["pic_name"];
	//echo $src;
	echo "<div><table><tr><td rowspan='6'>";
	echo '<img style="height:100px;width:150px;" src="data:image/jpeg;base64,'.base64_encode( $row1['pro_pic'] ).'"/>';
	echo "</td></tr><tr><td>NAME:</td><td>";
	echo $row1['name'];
	echo "</td></tr><tr><td>DEPARTMENT:</td><td>";
	echo $row1['department'];
	echo "</td></tr><tr><td>EMAIL:</td><td>";
	echo $row1['email'];
	echo "</td></tr><tr><td>YEAR:</td><td>";
	echo $row1['year'];
	echo "</td></tr><tr><td>DESIGNATION:</td><td>";
	echo $row1['designation'];
	echo "</td></tr></table></div>";
}

echo "</div></div></body></html>";
?>