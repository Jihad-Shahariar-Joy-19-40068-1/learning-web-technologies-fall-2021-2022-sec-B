<?php
	if(isset($_COOKIE['flag'])){
		include('header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>LIBRARY</title>


</head>
<body>

	<h3><table border="5" align="center" width="80%">
		<tr height="80px">
			<td colspan="6" align="center">
				<h3>Search Book : <input type="text" name="" value=""></h3>
			</td>
		</tr>

		<tr height="50px" align="center">
			<td>ID</td>
			<td>Book Name</td>
			<td>Author Name</td>
			<!--<td>Issue Date</td>
			<td>Due Date</td>
			<td>Return Date</td>-->
		</tr>

		<tr height="50px" align="center">
			<td>100</td>
			<td>Adventures of Tom Sawyer</td>
			<td>Mark Twain</td>
			<!--<td>27/10/2021</td>
			<td>30/10/2021</td>
			<td>03/11/2021</td>-->
		</tr>

		<tr height="50px" align="center">
			<td>101</td>
			<td>Alice in Wonderland</td>
			<td>Lewis Carrol</td>
			<!--<td>28/10/2021</td>
			<td>31/10/2021</td>
			<td>05/11/2021</td>-->
		</tr>

		<tr height="50px" align="center">
			<td>103</td>
			<td>Agni Veena</td>
			<td>Kazi Nasrul Islam</td>
			<!--<td>28/10/2021</td>
			<td>31/10/2021</td>
			<td>05/11/2021</td>-->
		</tr>

		<tr height="50px" align="center">
			<td>104</td>
			<td>Pride and Prejudice</td>
			<td>Jane Austen</td>
			<!--<td>27/10/2021</td>
			<td>30/10/2021</td>
			<td>03/11/2021</td>-->
		</tr>



		<tr height="60px" >
			<td colspan="6" align="center">
				<a href="home.php"><input type="button" name="" value="HOME"></a>
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