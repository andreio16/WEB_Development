<?php
  /* Displays user information and some useful messages */
  session_start();
  // Check if nimda is logged in using the session variable
  if ( $_SESSION['a'] != "nunimda" ) {
    session_unset();
    session_destroy();
    header ('Location: firstLogin.php');
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
  <?php include '/include/connect.php' ?>
  <body>
    <div class="page">
      <header class="header--page">
        <h1 class="header__logo">
          <span>W</span>
          <span>E</span>
          <span>B</span>
          <span>A</span>
          <span>d</span>
          <span>m</span>
          <span>i</span>
          <span>n</span>
          <span>s</span>
          <p>
            <span class="space--left">
              <i class="fas fa-code"></i>
          </span>
        </p>
        </h1>
      </header>
      <nav class="navi">
         <ul class="navi__ul">
            <li class="navi__li"><a href="bazingaTeacher.php">Catalog An-2020</a></li>
            <li class="navi__li"><a href="bazingaTeacher1.php">Gestionare Teme</a></li>
            <li class="navi__li"><a href="bazingaTeacher2.php">Gestionare Note</a></li>
            <li class="navi__li"><a href="/Tech_WEB4/include/logout.php">Inapoi la Site</a></li>
         </ul>
      </nav>
      <section class="section--public1" id="pag1">
        <h1>Catalogul Studentiilor Inscrisi in Anul Universitar - 2020</h1>
          <?php include '/include/updateCatalog.php' ?>
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
