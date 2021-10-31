<?php
	if(isset($_COOKIE['flag'])){
		include('header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>NOTICE</title>
</head>
<body>
	<br>
	<center>
		<table border="5" align="center">
			<tr align="center">
				<td width="50%"><h2>TITLE</h2></td>
				<td><h2>DETAILS</h2></td>
			</tr>
			<tr align="center">
				<td><h3>Holiday Due to Eid-ul-Fitr</h3></td>
				<td>13 May 2021 This year, <br>
					Eid al-Fitr in Bangladesh is on 13 May 2021.<br>
					The School will remain closed on that day.
				</td>
			</tr>
			<tr align="center">
				<td><h3>Makup Class on Saturday</h3></td>
				<td>15 May 2021<br>
					Makup class of 11 May.
				</td>
			</tr>



			<tr align="center">
				<td><h3>Makup Class on Thursday</h3></td>
				<td>20 May 2021<br>
					Makup class of 12 May.
				</td>
			</tr>
			<tr align="center">
				<td><h3>Makup Class on Saturday</h3></td>
				<td>22 May 2021<br>
					Makup class As per Sunday Routine.
				</td>
			</tr>
			<tr align="center">
				<td><h3>Makup Class on Thursday</h3></td>
				<td>27 May 2021<br>
					Makup class As per Monday Routine.
				</td>
			</tr>



		</table>
	</center>
</body>
</html>

<?php
 
 }else{
  header('location: login.html');
 }
?>