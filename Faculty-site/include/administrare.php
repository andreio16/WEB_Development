<?php
include 'connect.php';
global $link;
 /*//am inregistrat administratorul (!!atentie doar prima data inregistram adminul)
$var = filter_var(SHA1 ('n19im89da'),FILTER_SANITIZE_ENCODED);
$sql = "INSERT INTO admins (user_admin, password_admin) VALUES ( 'nimda', '$var' )" ;
*/
//Z
  if (mysqli_query($link, $sql)) {
    $message = "V-ati inregistrat cu succes!";
  /* echo "<script type='text/javascript'>alert('$message'); </script>";*/}
  else {echo 'ERROR: Could not able to execute ' . $sql . mysqli_error($link);}
  mysqli_close($link);
 ?>
