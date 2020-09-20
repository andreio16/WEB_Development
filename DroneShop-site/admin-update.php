<?php
include 'connect.php';
global $link;
session_start();
// Check if nimda is logged in using the session variable
if ( $_SESSION['a'] != "nunimda" ) {
  session_unset();
  session_destroy();
  header ('Location: index.php#CM');
}

// Citim variabilele din POST
$pret = $_POST['price'];
$stoc = $_POST['stock'];
$code = $_POST['code'];
// Query de UPDATE
$sql = "UPDATE products SET stock = '$stoc', price = '$pret' WHERE code = '$code'";

if ($result = mysqli_query($link, $sql)) {
  $message = "Ati modificat starea produsului!";
  echo "<script type='text/javascript'>alert('$message');window.location.replace(\"http://localhost/pWEB/admin-pg2.php\");</script>";
} else {
  echo 'ERROR: Could not able to execute ' . $sql . mysqli_error($link);
}

//mysqli_free_result($result);
mysqli_close($link);
?>
