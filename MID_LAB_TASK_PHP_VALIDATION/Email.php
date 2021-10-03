<?php
	if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = input_data($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
	else {
		$emailErr = "Email is " . $email;
	}
  }
		
	
?>
<!DOCTYPE html>
<html>
<head>
<title>Email form</title>
</head>
<body>
	<form method="post" action="#">
		<fieldset>
		<legend>Email</legend>
		<input type="text" name="email" value=""> <br>
		<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
	
</body>
</html>