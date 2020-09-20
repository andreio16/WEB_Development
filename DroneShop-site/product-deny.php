<?php
session_start();
if ( $_SESSION['logged_in'] != "da" ) {
header ('Location: index.php#CM');
} else {
  $message = "Ne pare rau, dar acest produs nu mai este in stoc!";
  echo "<script type='text/javascript'>alert('$message');window.location.replace(\"http://localhost/pWEB/products.php\");</script>";
}
 ?>
