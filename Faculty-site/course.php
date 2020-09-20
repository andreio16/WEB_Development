<?php
session_start();
include '/include/connect.php';
global $link;
// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != "da" ) {
  header ('Location: firstLogin.php');
}
else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $phone = $_SESSION['phone'];

    // Preluam id_user
    $sql = "SELECT client_id FROM users WHERE email = '$email'";
    $result = mysqli_query($link, $sql);
    if ( mysqli_num_rows($result) == 1 ){
      $user = mysqli_fetch_array($result);
      $id_user = $user['client_id'];      //<--
    }

    // Extragem informatiile necesare pentru curs
    $code = $_GET['code'];

    // Preluam data curenta
    date_default_timezone_set("Europe/Bucharest");
    $data = date("d/m/Y/h:i:a");           //<--

    //INSERARE !!! !!! !!!
    $sql = "INSERT INTO assigned_courses ( user_id, course_code, data ) VALUES ( '$id_user', '$code', '$data') ";

    $sql_check ="SELECT assigned_id FROM assigned_courses WHERE user_id = '$id_user' AND course_code ='$code'";
    $result = mysqli_query($link, $sql_check);
    if (mysqli_num_rows($result) == 0)
    {
      mysqli_query($link, $sql);

      // STUDENTI++
      $sql = "UPDATE courses SET participation = participation + 1  WHERE code = '$code' ";
      if ($result = mysqli_query($link, $sql))
      {
        $message = "Te-ai inscris la cursul dorit!";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script type='text/javascript'>window.location.replace(\"http://localhost/Tech_WEB4/bazinga.php\");</script>";
      }
      else {echo 'ERROR: Could not able to execute ' . $sql . mysqli_error($link);}   // <--
    }
    else
    {
      $message = "Nu te poti inscrie de mai multe ori la acelasi curs!";
      echo "<script type='text/javascript'>window.alert('$message');</script>";
      echo "<script type='text/javascript'>window.location.replace(\"http://localhost/Tech_WEB4/bazinga.php\");</script>";
    }


   mysqli_close($link);
}
  ?>
