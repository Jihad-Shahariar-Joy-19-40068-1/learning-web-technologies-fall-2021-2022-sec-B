<?php
	if(isset($_COOKIE['flag'])){
		include('header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<style>
		/*<a href="#" class="myButton">green</a>*/
.myButton {
	/*background-color:#2063b0;*/
	background-color:#2778d6;
	border-radius:30px;
	border:3px solid #08298a;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:17px;
	padding:16px 31px;
	text-decoration:none;
	text-shadow:0px 1px 0px #283966;
}
.myButton:hover,.myButton:active,.myButton:focus {
	background: #43A047;
}

	</style>
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
		<div>
		<!-- <a href="home.php"><input type="button"  class="myButton" name="" value="BACK / HOME"></a> -->
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