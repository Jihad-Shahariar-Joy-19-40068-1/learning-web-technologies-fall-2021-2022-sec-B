<?php 
	require_once('../model/usersModel.php');
	$id = $_REQUEST['id'];
	$user = getProductById($id);
	//print_r($user);
?>

<html>
<head>
	<title> Delete User</title>
</head>
<body>
	<form method="post" action="../controller/deleteUser.php">
		<fieldset>
			<legend>Delete Product</legend>
			<table>
				<tr>
					<td>Name: </td>
					<!--<td><input type="text" name="username" value="<?=$user['name']?>"></td>-->
					<td><?=$user['name']?></td>
				</tr>
				<tr>
					<td>Buying Price:</td>
					<!--<td><input type="password" name="password" value="<?=$user['buyingPrice']?>"></td>-->
					<td><?=$user['buyingPrice']?></td>
				</tr>
				<tr>
					<td>Selling Price:</td>
					<!--<td><input type="email" name="email" value="<?=$user['sellingPrice']?>"></td>-->
					<td><?=$user['sellingPrice']?></td>
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