<?php
require 'dbh.php';
if (isset($_POST['user_email']) and isset($_POST['user_pass'])){

// Assigning POST values to variables.
$email = $_POST['user_email'];
$password = md5($_POST['user_pass']);

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM users WHERE email='$email' and password='$password'";

$result = mysqli_query($conn, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){
  header("location: home.php");

}else{

  echo "<p>Invalid Login Credentials</p>";
}
}
?>
<style>
p{
  text-align:center;
}
</style>
