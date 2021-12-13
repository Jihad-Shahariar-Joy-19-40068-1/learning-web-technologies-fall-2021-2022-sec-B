<?php
	if(isset($_COOKIE['flag'])){
		include('header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<style>
.myButton {
	box-shadow:inset 0px 0px 0px 0px #dcecfb;
	background:linear-gradient(to bottom, #bddbfa 5%, #80b5ea 100%);
	background-color:#bddbfa;
	border-radius:8px;
	border:3px solid #3488db;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	color: black;
	font-size:17px;
	font-weight:bold;
	padding:10px 20px;
	text-decoration:none;
	text-shadow:0px 1px 0px #528ecc;
}
.myButton:hover,.myButton:active,.myButton:focus {
	background: #43A047;
}
	</style>
	<title>About Us/Me</title>



</head>
<body>
	<br>
	<center>
		<table border="3" width="70%">
			<tr align="center">
				<td>
					<img src="../assets/pic.jpg" width="340px" height="445px">
				</td>
				<td>
		<table border="2" cellspacing="3" cellpadding="3" align="center">
			<tr align="center">
				<td colspan="2"><h1>Jihad Shahariar Joy</h1></td>
			</tr>
			<tr align="center">
				<td width="25%"><h3>Program : </h3></td>
				<td><h3> Bachelor of Science in Computer Science & Engineering</h3></td>
			</tr>
			<tr align="center">
				<td><h3>Department : </h3></td>
				<td align="center"><h3> FACULTY OF SCIENCE & TECHNOLOGY</h3></td>
			</tr>
			<tr align="center">
				<td><h3>ID : </h3></td>
				<td><h3> 19-40068-1</h3></td>
			</tr>
			<tr align="center">
				<td><h3>Date of Birth : </h3></td>
				<td><h3> 27/11/2000</h3></td>
			</tr>
			<tr align="center">
				<td><h3>Email : </h3></td>
				<td><h4> jihadshahariarjoy2211@gmail.com</h4></td>
			</tr>
		</table>
		</td>
		</tr>
		</table>
		<br>
		<!-- <a href="home.php"><input type="button" name="" value="BACK / HOME"></a> -->
		<div>
			<a href="home.php" class="myButton">BACK / HOME</a>
		</div>
	</center>
</body>
</html>
<?php
 
 }else{
 	header('location: login.html');
 }
?>