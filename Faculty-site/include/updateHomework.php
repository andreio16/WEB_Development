<?php
include 'connect.php';
global $link;



$email = $_SESSION['email'];
// Preluam id_user
$sql = "SELECT client_id FROM users WHERE email = '$email'";
$result = mysqli_query($link, $sql);
if ( mysqli_num_rows($result) == 1 ){
  $user = mysqli_fetch_array($result);
  $id_user = $user['client_id'];      //<--
}

$sql = "SELECT code, subject, homework, course_code  FROM courses, assigned_courses WHERE user_id = '$id_user' AND code = course_code";
$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {
  $products[] = array(
    'code' => $row['code'],
    'subject' => $row['subject'],
    'homework' => $row['homework']
  );
}
mysqli_close($link);
?>
