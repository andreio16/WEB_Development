<?php
session_start();
include 'connect.php';
global $link;
// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != "da" ) {
  $message = "Trebuie intai sa te conectezi pe un cont!";
  echo "<script type='text/javascript'>alert('$message');window.location.replace(\"http://localhost/pWEB/index.php#CM\");</script>";
} else {


    // Makes it easier to read
    $email = $_SESSION['email'];
    // Preluam id_user
    $sql = "SELECT client_id FROM users WHERE email = '$email'";
    $result = mysqli_query($link, $sql);
    if ( mysqli_num_rows($result) == 1 ){
      $user = mysqli_fetch_array($result);
      $id_user = $user['client_id'];      // <--
    }

    // Preluam id_prod din POST formmular
    $product_id = $_POST['product_id'];    //<--

    // Preluam data curenta
    date_default_timezone_set("Europe/Bucharest");
    $data = date("d/m/Y/h:i:a");           //<--

    //INSERARE COMANDA !!! !!! !!!
    $sql = "INSERT INTO deliveries ( id_user, id_prod, data ) VALUES ( '$id_user', '$product_id', '$data') ";
    //ZENO
    if (mysqli_query($link, $sql)) {
      $message = "V-ati inregistrat cu succes!";
    /* echo "<script type='text/javascript'>alert('$message'); </script>";*/}
    else {echo 'ERROR: Could not able to execute ' . $sql . mysqli_error($link);}

    //->
        $phone = filter_var($_POST['phone'],FILTER_SANITIZE_NUMBER_INT);
        $address = filter_var($_POST['address'],FILTER_SANITIZE_STRING);
        $city = filter_var($_POST['city'],FILTER_SANITIZE_STRING);
        $zip = filter_var($_POST['zip'],FILTER_SANITIZE_NUMBER_INT);
        $zone_id = filter_var($_POST['zone_id'],FILTER_SANITIZE_STRING);
        $country = filter_var($_POST['country'],FILTER_SANITIZE_STRING);
        $sql = "UPDATE users SET  phone ='$phone', address ='$address', city ='$city', zip ='$zip', zone_id ='$zone_id', country ='$country'
        WHERE users.client_id = '$id_user' " ;
        //ZENO
        if (mysqli_query($link, $sql)) {
          $message = "V-ati inregistrat cu succes!";
        /* echo "<script type='text/javascript'>alert('$message'); </script>";*/}
        else {echo 'ERROR: Could not able to execute ' . $sql . mysqli_error($link);}
    //<-

    // STOCK--
    $sql = "UPDATE products SET stock = stock - 1  WHERE code = '$product_id' ";
    if ($result = mysqli_query($link, $sql)) {
      $message = "Ati cumparat cu succes produsul! Va multumim!";
      echo "<script type='text/javascript'>alert('$message');window.location.replace(\"http://localhost/pWEB/products.php\");</script>";
    } else {
      echo 'ERROR: Could not able to execute ' . $sql . mysqli_error($link);
    }

  //mysqli_free_result($result);
  mysqli_close($link);
}
 ?>
