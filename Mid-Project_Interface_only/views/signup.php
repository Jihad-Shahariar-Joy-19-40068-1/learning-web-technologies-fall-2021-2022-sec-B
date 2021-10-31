<?php
	if(isset($_COOKIE['flag'])){
    include('header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign-up Page</title>

	<center>
	<style>
        .container{
            border-style: outset; width: 30%;
        }
    </style>
</head>
<body>
	<h1><br></h1>
	<h1><br></h1>
<div class="container">
	<form method="post" action="signupCheck.php">
		<fieldset>
		<center>
			<h2>Sign-up</h2>
			<label>User Id/Name:</label>
			<br>
			<input type="text" name="username" value="">
			<br><br>
			<label>Password:</label>
			<br>
			<input type="password" name="password" value="">
			<br><br>
			<label>Email:</label>
			<br>
			<input type="email" name="email" value="">
			<br><br>
			<a href="home.php"><input type="button" name="" value="HOME"></a>
			<a href="signup.php"><input type="button" name="" value="RESET"></a>
			<input type="submit" name="submit" value="SUBMIT">
		</center>
		</fieldset>
	</form>
	</div>
</body>
</center>
</html>
<?php
}else{
 	header('location: login.html');
 }
?>