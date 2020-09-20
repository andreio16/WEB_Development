<?php
include 'connect.php';
global $link;

$sql = "SELECT code, title, description, specs, images, type, stock, price FROM products";
$result = mysqli_query($link, $sql);
while ($row = mysqli_fetch_array($result)) {
  $products[] = array(
    'code' => $row['code'],
    'title' => $row['title'],
    'description' => $row['description'],
    'specs' => $row['specs'],
    'images' => explode(',', $row['images']),
    'type' => $row['type'],
    'stock' => $row['stock'],
    'price' => $row['price']
  );
}
mysqli_close($link);
?>
