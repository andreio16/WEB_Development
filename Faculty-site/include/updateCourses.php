<?php
include 'connect.php';
global $link;

$sql = "SELECT code, subject, description, participation FROM courses";
$result = mysqli_query($link, $sql);
while ($row = mysqli_fetch_array($result)) {
  $products[] = array(
    'code' => $row['code'],
    'subject' => $row['subject'],
    'description' => $row['description'],
    'participation' => $row['participation']
  );
}
mysqli_close($link);
?>
