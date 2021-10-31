<?php
	if(isset($_COOKIE['flag'])){
		include('header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us/Me</title>


</head>
<body>
	<center>
	<br>
	<br>
	<a href="https://www.facebook.com/jihadshahariar.joy/">
		<img src="../assets/Facebook_f_logo.png" width="300px" height="300px">
	</a>
		<br>
		<br>
		<br>
		<a href="home.php"><input type="button" name="" value="BACK / HOME"></a>
	</center>
</body>
</html>
<?php
 
 }else{
 	header('location: login.html');
 }
?>