<?php
include 'connect.php';
global $link;
/*
$_SESSION['email'] = $_POST['email'];
$_SESSION['first_name'] = $_POST['first_name'];
$_SESSION['last_name'] = $_POST['last_name'];*/
 //header ('Location: droneXshop.php#CM'); // nu merge in combinatie cu javascript
  $first_name = filter_var($_POST['first_name'],FILTER_SANITIZE_STRING);        //protejare impotriva sql-injection
  $last_name = filter_var($_POST['last_name'],FILTER_SANITIZE_STRING);
  $email = filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);
  $phone = filter_var($_POST['phone'],FILTER_SANITIZE_NUMBER_INT);
  $address = filter_var($_POST['address'],FILTER_SANITIZE_STRING);
  $city = filter_var($_POST['city'],FILTER_SANITIZE_STRING);
  $zip = filter_var($_POST['zip'],FILTER_SANITIZE_NUMBER_INT);
  $zone_id = filter_var($_POST['zone_id'],FILTER_SANITIZE_STRING);
  $password =  filter_var(SHA1 ($_POST['password']),FILTER_SANITIZE_ENCODED);
  $country = filter_var($_POST['country'],FILTER_SANITIZE_STRING);

  $sql2 ="SELECT * FROM users WHERE email= '$email'";
  if ($result = mysqli_query($link, $sql2)) {
    if (mysqli_num_rows($result) > 0) {
      $message = "Exista deja un utilizator cu acest e-mail!";
      echo "<script type='text/javascript'>alert('$message');window.location.replace(\"http://localhost/pWEB/index.php#I\");</script>";
        //ZENO
        if (mysqli_query($link, $sql2)) {echo 'Records inserted successfully.';}
          else {echo 'ERROR: Could not able to execute ' . $sql2 . mysqli_error($link);}
    }
    else {
      // Inserare date
      $sql = "INSERT INTO users (first_name, last_name, email, phone, address, city, zip, zone_id, password, country)
      VALUES ('$first_name', '$last_name', '$email', '$phone', '$address', '$city', '$zip', '$zone_id', '$password', '$country')" ;
      //ZENO
        if (mysqli_query($link, $sql)) {
          $message = "V-ati inregistrat cu succes!";
          echo "<script type='text/javascript'>alert('$message');window.location.replace(\"http://localhost/pWEB/index.php#CM\");</script>";}
        else {echo 'ERROR: Could not able to execute ' . $sql . mysqli_error($link);}
      }
  }
  // Inchidere conexiune
  mysqli_close($link);
?>
