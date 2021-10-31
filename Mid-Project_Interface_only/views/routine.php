<?php
	if(isset($_COOKIE['flag'])){
		include('header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Class Routine</title>



</head>
<body>
	<br>
	<table border="5" align="center">
	<tr align="center">
		<td><h1>Day\Time</h1></td>
		<td><h2>Morning</h2></td>
		<td><h2>Noon</h2></td>
		<td><h2>Afternoon</h2></td>
		<td width="25%"><h2>Evening</h2></td>
	</tr>

	<tr align="center">
		<td><h1>Saturday</h1></td>
		<td colspan="4"><h3> No Classes On This Day </h3></td>
	</tr>

	<tr align="center">
		<td><h1>Sunday</h1></td>
		<td><h3> Chemistry <br> 8 a.m.- 11 a.m. </h3></td>
		<td></td>
		<td><h3> Web Technologies <br> 11 a.m.- 2.p.m. </h3></td>
		<td></td>
	</tr>

	<tr align="center">
		<td><h1>Monday</h1></td>
		<td></td>
		<td><h3> Computer Networks <br> 8 a.m. - 11 a.m. </h3></td>
		<td><h3> Resarch Methodology <br> 12.30 p.m. - 2 p.m. </h3></td>
		<td></td>
	</tr>

	<tr align="center">
		<td><h1>Tuesday</h1></td>
		<td><h3> Chemistry <br> 8 a.m.- 10 a.m. </h3></td>
		<td></td>
		<td><h3> Web Technologies <br> 12 a.m.- 2.p.m. </h3></td>
		<td></td>
	</tr>

	<tr align="center">
		<td><h1>Wednesday</h1></td>
		<td></td>
		<td><h3> Computer Networks <br> 8 a.m. - 10 a.m. </h3></td>
		<td><h3> Resarch Methodology <br> 12.30 p.m. - 2 p.m. </h3></td>
		<td></td>
	</tr>

	<tr align="center">
		<td><h1>Thursday</h1></td>
		<td colspan="4"><h3> No Classes On This Day </h3></td>
	</tr>

	<tr align="center">
		<td><h1>Friday</h1></td>
		<td colspan="4"><h3> No Classes On This Day </h3></td>
	</tr>
	<tr height="100px" align="center">
		<td colspan="5">
			<a href="home.php"><input type="button" name="" value="HOME"></a>
			<a href="class-info.php"><input type="button" name="" value=" Go To Class Information >"></a>
			<a href="../controller/logout.php"><input type="button" name="" value="LOGOUT"></a>
		</td>
	</tr>
	</table>
</body>
</html>
<?php
 
 }else{
 	header('location: login.html');
 }
?>