<?php
  /* Displays user information and some useful messages */
  session_start();
  // Check if user is logged in using the session variable
  if ( $_SESSION['logged_in'] != "da" ) {
    header ('Location: firstLogin.php');
  }
  else {
      // Makes it easier to read
      $first_name = $_SESSION['first_name'];
      $last_name = $_SESSION['last_name'];
      $email = $_SESSION['email'];
  }
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="css/pictures/earth.png">
    <link rel="stylesheet" href="css/styleLog.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script src="include/functions.js" type="text/javascript"></script>
    <script src="https://kit.fontawesome.com/efd1118723.js" crossorigin="anonymous"></script>

	  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mysterious Web Page 101</title
  </head>
  <?php include '/include/updateCourses.php' ?>
  <body>
    <div class="page">
      <header class="header--page">
        <h1 class="header__logo">
          <span>W</span>
          <span>E</span>
          <span>B</span>
          <span>L</span>
          <span>i</span>
          <span>g</span>
          <span>h</span>
          <span>t</span>
          <span>s</span>
          <p>
            <span class="space--left">
              <i class="fas fa-code"></i>
          </span>
        </p>
        </h1>
        <?php echo ' <span class="header__welcome">Bine ai venit <span class="first_letter_upp">'.$first_name.'! </span></span>  ';?>
      </header>
      <nav class="navi">
         <ul class="navi__ul">
            <li class="navi__li"><a href="bazinga.php">Home - Courses</a></li>
            <li class="navi__li"><a href="bazinga1.php">Homework</a></li>
            <li class="navi__li"><a href="bazinga2.php">Grades</a></li>
            <li class="navi__li"><a href="/Tech_WEB4/include/logout.php">Logout</a></li>
         </ul>
      </nav>
      <section class="section--public1">
        <h1>All Courses</h1>
        <?php foreach ($products as $product) { ?>
            <div class="dbContent">
              <div class="dbContent-text">
              <h2><?php echo $product['subject']; ?></h2>
              <p>
                <?php echo $product['description']; ?>
                <br>
                <span class="yellow">Participanti : <?php echo $product['participation']; ?> studenti</span>
                <br>
                <a href="course.php?code=<?php echo $product['code']; ?>"><span class="signUp">Inscrie-te la acest curs Aici!</span></a>
              </p>
              </div>
            </div>
       <?php } ?>
      </section>
      <footer class="footer--public">
          <?php include '/include/footer.php' ?>
      </footer>
    </div>
<!--
    <form name="logForm" action="/action_page.php" onsubmit="return validateForm()" method="post">
      Login User:
      <br>
      <input type="text" name="username" value="" autocomplete="off">
      <br>
      Password:
      <br>
      <input type="password" name="pass" value="">
      <br><br>
      <input type="submit" value="Submit">

    </form>
-->
  </body>
</html>
