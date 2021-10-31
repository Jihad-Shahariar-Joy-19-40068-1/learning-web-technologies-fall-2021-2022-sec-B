<?php
	if(isset($_COOKIE['flag'])){
		include('header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Teacher's Infromation</title>
	

	
</head>
<body>
	<br>
	<table border="5" align="center">

	<tr height="80px">
			<td colspan="5" align="center">
				<h3>Search Teacher : <input type="text" name="" value=""></h3>
			</td>
	</tr>

	<tr align="center">
		<td><h1>Teacher\Info</h1></td>
		<td width="20%"><h2>Course</h2></td>
		<td width="20%"><h2>Email</h2></td>
		<td width="20%"><h2>Room No</h2></td>
		<td><h2>Picture</h2></td>
	</tr>

	<tr align="center">
		<td><h3>DR. MOHAMMAD ANISUR RAHMAN JAMI</h3></td>
		<td><h3>Chemistry</h3></td>
		<td><h3>anisur.rahman@aiub.edu</h3></td>
		<td><h3>??</h3></td>
		<td><img src="../assets/1.jpg" width="100px" height="100px"></td>
	</tr>

	<tr align="center">
		<td><h3>MD. AL-AMIN</h3></td>
		<td><h3>Web Technologies</h3></td>
		<td><h3>alamin@aiub.edu</h3></td>
		<td><h3>??</h3></td>
		<td><img src="../assets/2.jpg" width="100px" height="100px"></td>
	</tr>

	<tr align="center">
		<td><h3>SHAHRIN CHOWDHURY</h3></td>
		<td><h3>Computer Networks</h3></td>
		<td><h3>shahrin@aiub.edu</h3></td>
		<td><h3>??</h3></td>
		<td><img src="../assets/3.jpg" width="100px" height="100px"></td>
	</tr>

	<tr align="center">
		<td><h3>DR. DIP NANDI</h3></td>
		<td><h3>Resarch Methodology</h3></td>
		<td><h3>dip.nandi@aiub.edu</h3></td>
		<td><h3>??</h3></td>
		<td><img src="../assets/4.jpg" width="100px" height="100px"></td>
	</tr>

	<tr height="70px" align="center">
		<td colspan="5">
			<a href="home.php"><input type="button" name="" value="HOME"></a>
			<a href="class-info.php"><input type="button" name="" value="< Go To Class Information "></a>
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