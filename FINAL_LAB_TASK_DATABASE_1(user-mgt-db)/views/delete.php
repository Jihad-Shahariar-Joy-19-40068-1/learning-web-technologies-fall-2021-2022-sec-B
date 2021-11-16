<?php 
	include('header.php');
	require_once('../model/usersModel.php');
	$id = $_REQUEST['id'];
	$user = getUserById($id);
	//print_r($user);
?>

<html>
<head>
	<title> Delete User</title>
</head>
<body>
	<center>
		<a href="userlist.php">Back</a>|
		<a href="../controller/logout.php">Logout</a>
	</center>
	<form method="post" action="../controller/deleteUser.php">
		<fieldset>
			<legend>Delete User</legend>
			<table>
				<tr>
					<td>Username: </td>
					<!--<td><input type="text" name="username" value="<?=$user['username']?>"></td>-->
					<td><?=$user['username']?></td>
				</tr>
				<tr>
					<td>Password:</td>
					<!--<td><input type="password" name="password" value="<?=$user['password']?>"></td>-->
					<td><?=$user['password']?></td>
				</tr>
				<tr>
					<td>Email:</td>
					<!--<td><input type="email" name="email" value="<?=$user['email']?>"></td>-->
					<td><?=$user['email']?></td>
				</tr>
				<tr>
					<td>Are You Sure! <br> Delete?</td>
				</tr>
				<tr>
					<td><input type="hidden" name="id" value="<?=$id?>"> </td>
					<td><input type="submit" name="submit" value="Delete"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>