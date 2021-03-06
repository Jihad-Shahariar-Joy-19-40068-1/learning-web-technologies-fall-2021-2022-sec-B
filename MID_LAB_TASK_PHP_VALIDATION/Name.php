<?php
$nameErr =  "";
$name =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);

    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
}  


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <br>
  <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error"> <?php echo $nameErr;?></span>
  <br>
  
  <input type="submit" name="submit" value="Submit"> 
</form>

<?php
echo "<h2>Input:</h2>";
echo $name;
echo "<br>";

?>