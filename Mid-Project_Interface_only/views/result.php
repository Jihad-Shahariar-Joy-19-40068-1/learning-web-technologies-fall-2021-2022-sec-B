<?php
  if(isset($_COOKIE['flag'])){
  	include('header.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Result</title>



</head>
<body>
	<br>
  <table border="5" align="center">
  <tr align="center">
    <td><h2>Sl.No.</h2></td>
    <td><h2>Course</h2></td>
    <td><h3>Quizzes(20)</h3></td>
    <td><h3>Attaindance(10)</h3></td>
    <td><h3>Performance(10)</h3></td>
    <td><h3>Assignments(30)</h3></td>
    <td><h3>Assessments(30)</h3></td>
    <td><h2>Total(100)</h2></td>
    <td><h2>Grade</h2></td>
    <td><h2>CGPA</h2></td>
  </tr>

  <tr align="center">
    <td><h3>1.</h3></td>
    <td><h3>Chemistry</h3></td>
    <td><h3>18</h3></td>
    <td><h3>10</h3></td>
    <td><h3>9</h3></td>
    <td><h3>30</h3></td>
    <td><h3>25</h3></td>
    <td><h3>92</h3></td>
    <td><h3>A+</h3></td>
    <td><h3>4.00</h3></td>
  </tr>

  <tr align="center">
    <td><h3>2.</h3></td>
    <td><h3>Web Technologies</h3></td>
    <td><h3>16</h3></td>
    <td><h3>10</h3></td>
    <td><h3>9</h3></td>
    <td><h3>22</h3></td>
    <td><h3>23</h3></td>
    <td><h3>80</h3></td>
    <td><h3>B+</h3></td>
    <td><h3>3.50</h3></td>
  </tr>

  <tr align="center">
    <td><h3>3.</h3></td>
    <td><h3>Computer Networks</h3></td>
    <td><h3>17</h3></td>
    <td><h3>10</h3></td>
    <td><h3>8</h3></td>
    <td><h3>25</h3></td>
    <td><h3>25</h3></td>
    <td><h3>85</h3></td>
    <td><h3>A</h3></td>
    <td><h3>3.75</h3></td>
  </tr>

  <tr align="center">
    <td><h3>4.</h3></td>
    <td><h3>Resarch Methodology</h3></td>
    <td><h3>19</h3></td>
    <td><h3>10</h3></td>
    <td><h3>9</h3></td>
    <td><h3>28</h3></td>
    <td><h3>27</h3></td>
    <td><h3>93</h3></td>
    <td><h3>A+</h3></td>
    <td><h3>4.00</h3></td>
  </tr>

  <tr align="center">
    <td colspan="5">
      <h3>Total Grade : A </h3>
    </td>
    <td colspan="5">
      <h3>CGPA : 3.8 </h3>
    </td>
  </tr>

  <tr height="60px" align="center">
    <td colspan="10">
      <a href="home.php"><input type="button" name="" value="HOME"></a>
      <a href="../controller/logout.php"><input type="button" name="" value="LOGOUT"></a>
    </td>
  </tr>

  </table>
</body>
</html>
<?php
}else{
  header('location: login.html');
 }
?>