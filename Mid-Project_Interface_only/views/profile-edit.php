<?php
	if(isset($_COOKIE['flag'])){
		include('header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Student Profile</title>



</head>
<body>
		<h3><table border="5" align="center">
		<tr height="100px">
			<th colspan="3" height="100"><h2>Edit Student Profile</h2></th>
		</tr>

		<tr height="50px">
			<td width="150px">Name</td>
			<td width="350px"><input type="text" name="" value=""></td>
		</tr>

		<tr height="50px">
			<td>Email</td>
			<td><input type="text" name="" value=""></td>
		</tr>

		<tr height="50px">
			<td>Gender</td>
			<td>
				<input type="radio" name="Gender" value="">Male
				<input type="radio" name="Gender" value="">Female
				<input type="radio" name="Gender" value="">Other
			</td>	
		</tr>

		<tr height="50px">
			<td>Date of Birth</td>
			<td>
				<input type="number" name="" value="" max="31" min="1">/
				<input type="number" name="" value="" max="12" min="1">/
				<input type="number" name="" value="" max="2021" min="1900"> <i>(dd/mm/yyyy)</i>
			</td>	
		</tr>

		<tr height="50px">
			<td>Blood Group</td>
			<td>
				<select name="">
					<option value="">A+</option>
					<option value="">A-</option>
					<option value="">B+</option>
					<option value="">B-</option>
					<option value="">O+</option>
					<option value="">O-</option>
					<option value="">AB+</option>
					<option value="">AB-</option>
				</select>
			</td>
		</tr>

		<tr height="50px">
			<td>Degree</td>
			<td>
				<input type="checkbox" name="option[]" value="">SSC
				<input type="checkbox" name="option[]" value="">HSC
				<input type="checkbox" name="option[]" value="">BSc.
				<input type="checkbox" name="option[]" value="">MSc.
			</td>
		</tr>

		<tr height="50px">
			<td>Photo</td>
			<td colspan="2"><input type="file" name="" value=""></td>
		</tr>

		<tr height="60px" >
			<td colspan="3" align="center">
				<a href="profile.php"><input type="button" name="" value="BACK"></a>
				<a href="profile-edit.php"><input type="button" name="" value="RESET"></a>
				<a href="profile-edit.php"><input type="button" name="" value="SUBMIT"></a>
			</td>
		</tr>
	</table></h3>
</body>
</html>
<?php
 
 }else{
 	header('location: login.html');
 }
?>