<?php
include 'connect.php';
global $link;
session_start();
// Check if nimda is logged in using the session variable
if ( $_SESSION['a'] != "nunimda" ) {
  session_unset();
  session_destroy();
  header ('Location: firstLogin.php');
}

// Citim variabilele din POST
$homework = $_POST['homework'];
$code = $_POST['code'];
$id = $_GET['id'];
// Query de UPDATE
$sql = "UPDATE courses SET homework = '$homework' WHERE code = '$code'";

if ($result = mysqli_query($link, $sql)) {
  $message = "Ati modificat starea produsului!"."$id";
  echo "<script type='text/javascript'>alert('$message');</script>";
  echo "<script type='text/javascript'>window.location.replace(\"http://localhost/Tech_WEB4/bazingaTeacher1.php\");</script>";
} else {
  echo 'ERROR: Could not able to execute ' . $sql . mysqli_error($link);
}

//mysqli_free_result($result);
mysqli_close($link);
?>
