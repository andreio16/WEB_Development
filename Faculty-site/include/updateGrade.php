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

$code = $_POST['code'];
$grade = $_POST['grade'];
// Query de UPDATE
$sql = "UPDATE assigned_courses SET grade = '$grade' WHERE assigned_id = '$code'";

if ($result = mysqli_query($link, $sql))
  echo "<script type='text/javascript'>window.location.replace(\"http://localhost/Tech_WEB4/bazingaTeacher2.php\");</script>";
 else
  echo 'ERROR: Could not able to execute ' . $sql . mysqli_error($link);

mysqli_close($link);
?>
