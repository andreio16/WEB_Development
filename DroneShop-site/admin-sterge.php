<?php
include 'connect.php';
global $link;
/* Displays user information and some useful messages */
session_start();
// Check if nimda is logged in using the session variable
if ( $_SESSION['a'] != "nunimda" ) {
  session_unset();
  session_destroy();
  header ('Location: index.php#CM');
} else {
  $id=$_GET['id'];
  $sql="DELETE FROM deliveries WHERE id_d = '$id'";

  //ZENO
    if (mysqli_query($link, $sql)) {header ('Location: admin.php');}
    else {echo 'ERROR: Could not able to execute ' . $sql . mysqli_error($link);}
    // Inchidere conexiune
    mysqli_close($link);
}


?>
