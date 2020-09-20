<?php
include 'connect.php';
global $link;
/* Displays user information and some useful messages */
session_start();
// Check if nimda is logged in using the session variable
if ( $_SESSION['a'] != "nunimda" ) {
  session_unset();
  session_destroy();
  header ('Location: firstLogin.php');
} else {

  $id = $_GET['id'];

  // STUDENTI--
  $sql = "SELECT course_code FROM assigned_courses WHERE assigned_id = '$id'";
  $result = mysqli_query($link, $sql);
  if ( mysqli_num_rows($result) == 1 ){
    $user = mysqli_fetch_array($result);
    $neededCode = $user['course_code'];
  }
  $sql = "UPDATE courses SET participation = participation - 1  WHERE code = '$neededCode' AND courses.participation > 0";
  mysqli_query($link, $sql);  // <---

  $sql="DELETE FROM assigned_courses WHERE assigned_id = '$id'";
  if (mysqli_query($link, $sql))
  header ('Location: ../bazingaTeacher.php');
  else
  echo 'ERROR: Could not able to execute ' . $sql . mysqli_error($link);
  mysqli_close($link);
}
?>
