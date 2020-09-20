<?php
/* Displays user information and some useful messages */
session_start();
// Check if nimda is logged in using the session variable
if ( $_SESSION['a'] != "nunimda" ) {
  session_unset();
  session_destroy();
  header ('Location: index.php#CM');
}

 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <link rel="icon" href="photos/icoSite.png">
     <title>Drone-X- Shop</title>
     <link rel="stylesheet" href="css/style.css" type="text/css">
     <link rel="stylesheet" href="css/responsive.css" type="text/css">
     <link rel="stylesheet" href="css/admin.css" type="text/css">
   </head>
   <body>
     <div class="page">
       <?php include '/include/header_admin.php'; ?>
       <main class="clearfix divC">
         <?php include '/include/aside_admin.php'; ?>
         <section class="style-1">
           <article>
             <?php include '/include/administration-1.php'; ?>
            </article>
         </section>
     </main>
     <?php include '/include/footer.php'; ?>
     </div>
   </body>
 </html>
