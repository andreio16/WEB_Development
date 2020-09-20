<?php
/* Log out process, unsets and destroys session variables */
session_start();
session_unset();
session_destroy();
$message = "V-ati delogat cu succes!";
echo "<script type='text/javascript'>alert('$message');window.location.replace(\"http://localhost/Tech_WEB4/firstLogin.php\");</script>";
?>
