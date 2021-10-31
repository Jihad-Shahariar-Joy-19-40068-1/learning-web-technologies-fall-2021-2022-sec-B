<?php
	if(isset($_COOKIE['flag'])){
		include('header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Class Infromation</title>



</head>
<body>
	<br>
	<table border="5" align="center">

	<tr height="80px">
			<td colspan="5" align="center">
				<h3>Search Course/Class Info : <input type="text" name="" value=""></h3>
			</td>
	</tr>

	<tr align="center">
		<td><h1>Class\Info</h1></td>
		<td width="20%"><h2>Course Code</h2></td>
		<td><h2>Faculty</h2></td>
		<td width="20%"><h2>Room No</h2></td>
	</tr>

	<tr align="center">
		<td><h2>Chemistry</h2></td>
		<td><h3>CHEM1101</h3></td>
		<td><h3>DR. MOHAMMAD ANISUR RAHMAN JAMIL</h3></td>
		<td><h3>Theory:DN0512 <br> Lab:6101</h3></td>
	</tr>

	<tr align="center">
		<td><h2>Web Technologies</h2></td>
		<td><h3>CSC3215</h3></td>
		<td><h3>MD. AL-AMIN</h3></td>
		<td><h3>Theory:DS0505 <br> Lab:DS0107</h3></td>
	</tr>

	<tr align="center">
		<td><h2>Computer Networks</h2></td>
		<td><h3>COE3206</h3></td>
		<td><h3>SHAHRIN CHOWDHURY</h3></td>
		<td><h3>Theory:DS0506 <br> Lab:DS0203</h3></td>
	</tr>

	<tr align="center">
		<td><h2>Resarch Methodology</h2></td>
		<td><h3>CSC4197</h3></td>
		<td><h3>DR. DIP NANDI</h3></td>
		<td><h3>Theory:1108 <br> Theory:1108</h3></td>
	</tr>

	<tr height="80px" align="center">
		<td colspan="5">
			<a href="home.php"><input type="button" name="" value="HOME"></a>
			<a href="routine.php"><input type="button" name="" value="< Go to Routine "></a>
			<a href="teachers-info.php"><input type="button" name="" value=" Go To Teachers Information >"></a>
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