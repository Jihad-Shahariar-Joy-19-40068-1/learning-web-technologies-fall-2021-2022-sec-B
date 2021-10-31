<?php
	if(isset($_COOKIE['flag'])){
		include('header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>About Us/Me</title>



</head>
<body>
	<br>
	<center>
		<img src="../assets/pic.jpg" width="300px" height="400px">
		<br>
		<h1>Jihad Shahariar Joy</h1>
		<h3>Program : Bachelor of Science in Computer Science & Engineering</h3>
		<h3>Department : FACULTY OF SCIENCE & TECHNOLOGY</h3>
		<h3>ID : 19-40068-1</h3>
		<h3>DOB : 27/11/2000</h3>
		<h4>Email : jihadshahariarjoy2211@gmail.com</h4>
		<a href="home.php"><input type="button" name="" value="BACK / HOME"></a>
	</center>
</body>
</html>
<?php
 
 }else{
 	header('location: login.html');
 }
?>