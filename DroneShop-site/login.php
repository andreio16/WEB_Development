<?php
include 'connect.php';
global $link;
session_start();
$email = $_POST['email'];
$sqll ="SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($link, $sqll);


//admin---------------------
$sqla = "SELECT * FROM admins WHERE user_admin = '$email'" ;
$resulta = mysqli_query($link, $sqla);

// log-in pentru useri
if ( mysqli_num_rows($result) == 0 ){ // Nu exista user-ul
    /*$message = "Utilizatorul cu acest e-mail nu exista!";
    echo "<script type='text/javascript'>alert('$message');window.location.replace(\"http://localhost/pWEB/droneXshop.php#CM\");</script>";*/

    //log-in admin
    $usera =  mysqli_fetch_assoc($resulta);
    if (SHA1($_POST['password']) == $usera['password_admin']){
      $_SESSION['a'] = "nunimda";
      $message = "V-ati logat cu succes domnule ADMIN!";
      echo "<script type='text/javascript'>alert('$message');window.location.replace(\"http://localhost/pWEB/admin.php\");</script>";
      }else {
            $message = "Utilizatorul cu acest e-mail nu exista!";
            echo "<script type='text/javascript'>alert('$message');window.location.replace(\"http://localhost/pWEB/index.php#CM\");</script>";
          }
    //-----------------------------
}
else { // exista
    $user =  mysqli_fetch_assoc($result);
    if (SHA1($_POST['password']) == $user['password']) {

        $_SESSION['email'] = $user['email'];
        $_SESSION['first_name'] = $user['first_name'];
        $_SESSION['last_name'] = $user['last_name'];
        $_SESSION['phone'] = $user['phone'];
        $_SESSION['address'] = $user['address'];
        $_SESSION['city'] = $user['city'];
        $_SESSION['zip'] = $user['zip'];
        $_SESSION['zone_id'] = $user['zone_id'];
        $_SESSION['country'] = $user['country'];

        $_SESSION['logged_in'] = true;

        $message = "V-ati logat cu succes!";
        echo "<script type='text/javascript'>alert('$message');window.location.replace(\"http://localhost/pWEB/products.php\");</script>";
    }
    else {
          $message = "Ati introdus o parola gresita!";
          echo "<script type='text/javascript'>alert('$message');window.location.replace(\"http://localhost/pWEB/index.php#CM\");</script>";
    }
}


  if (mysqli_query($link, $sql)) {echo 'Records inserted successfully.';}
  else {echo 'ERROR: Could not able to execute ' . $sql . mysqli_error($link);}
    mysqli_close($link);
 ?>
