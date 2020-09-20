<?php
include 'connect.php';
global $link;
  $first_name = filter_var($_POST['first_name'],FILTER_SANITIZE_STRING);        //protejare impotriva sql-injection
  $last_name = filter_var($_POST['last_name'],FILTER_SANITIZE_STRING);
  $email = filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);
  $phone = filter_var($_POST['phone'],FILTER_SANITIZE_NUMBER_INT);
  $city = filter_var($_POST['city'],FILTER_SANITIZE_STRING);
  $zone_id = filter_var($_POST['zone_id'],FILTER_SANITIZE_STRING);
  $password =  filter_var(SHA1 ($_POST['password']),FILTER_SANITIZE_ENCODED);

  $sql2 ="SELECT * FROM users WHERE email= '$email'";
  if ($result = mysqli_query($link, $sql2)) {
    if (mysqli_num_rows($result) > 0) {
      $message = "Exista deja un utilizator cu acest e-mail!";
      echo "<script type='text/javascript'>alert('$message');window.location.replace(\"http://localhost/Tech_WEB4/firstLogin.php\");</script>";
        //Z
        if (mysqli_query($link, $sql2)) {echo 'Records inserted successfully.';}
          else {echo 'ERROR: Could not able to execute ' . $sql2 . mysqli_error($link);}
    }
    else {
      // Inserare date
      $sql = "INSERT INTO users (first_name, last_name, email, phone, city, zone_id, password)
      VALUES ('$first_name', '$last_name', '$email', '$phone', '$city', '$zone_id', '$password')" ;
      //Z
        if (mysqli_query($link, $sql)) {
          $message = "V-ati inregistrat cu succes!";
          echo "<script type='text/javascript'>alert('$message');window.location.replace(\"http://localhost/Tech_WEB4/firstLogin.php\");</script>";}
        else {echo 'ERROR: Could not able to execute ' . $sql . mysqli_error($link);}
      }
  }
  // Inchidere conexiune
  mysqli_close($link);
?>
