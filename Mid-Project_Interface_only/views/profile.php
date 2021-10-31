<?php
	if(isset($_COOKIE['flag'])){
		include('header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Profile</title>



</head>
<body>
		<h3><table border="5" align="center">
		<tr height="100px">
      	
			<td colspan="2" align="center">
				<h2>Student Profile
				<a href="profile-edit.php">
					<img src=" ../assets/avatar.png" alt="" align="right" width="55px" height="55px" />
				</a><br>
        		</h2>
        		<p align="right">[EDIT]</p>
			</td>
		</tr>

		<tr height="50px">
			<td width="150px">Name</td>
			<!--<td><input type="text" name="" value=""></td>-->
			<td width="300px">Jihad Shahariar Joy</td>
		</tr>

		<tr height="50px">
			<td>Email</td>
			<!--<td><input type="text" name="" value=""></td>-->
			<td>jihadshahariarjoy2211@gmail.com</td>
		</tr>

		<tr height="50px">
			<td>Gender</td>
			 <!--<td>
				 <input type="radio" name="Gender" value="">Male
				<input type="radio" name="Gender" value="">Female
				<input type="radio" name="Gender" value="">Other
			</td>-->
			<td>Male</td>
		</tr>

		<tr height="50px">
			<td>Date of Birth</td>
			 <!--<td>
				<input type="number" name="" value="" max="31" min="1">/
				<input type="number" name="" value="" max="12" min="1">/
				<input type="number" name="" value="" max="2021" min="1900"> <i>(dd/mm/yyyy)</i>
			</td>-->
			<td>27/11/2000</td>
		</tr>

		<tr height="50px">
			<td>Blood Group</td>
			<!--<td>
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
			</td>-->
			<td>O+</td>
		</tr>

		<tr height="50px">
			<td>Degree</td>
			<!--<td>
				<input type="checkbox" name="option[]" value="">SSC
				<input type="checkbox" name="option[]" value="">HSC
				<input type="checkbox" name="option[]" value="">BSc.
				<input type="checkbox" name="option[]" value="">MSc.
			</td>-->
			<td>BSc</td>
		</tr>

		<tr height="50px">
			<td>Photo</td>
			<!--<td colspan="2"><input type="file" name="" value=""></td>-->
			<td align="center"><img src="../assets/face.jpg" width="260px" height="300px"></td>
		</tr>

		
	</table></h3>
</body>
</html>
<?php
 
 }else{
 	header('location: login.html');
 }
?>