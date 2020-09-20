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
   <style media="screen">
   .form {
     max-width: 235px;
   }
   .form .form__field {
     margin-bottom: 10px;
   }

   .form .form__input,
   .form .form__select,
   .form .form__textarea {
     border: 1px solid grey;
     height: 15px;
     padding: 5px;
   }
   .form .form__select {
       height: 25px;
   }

   .form .form__label {
     width: 80px;
     display: inline-block;
   }

   .form .form__button {
     height: 30px;
     float: right;
   }
   </style>
   <body>
     <div class="page">
       <?php include '/include/header_admin.php'; ?>
       <main class="clearfix divC">
         <?php include '/include/aside_admin.php'; ?>
         <section class="style-1">
           <article>
             <?php include 'form-a.php'; ?>
            </article>
         </section>
     </main>
     <?php include '/include/footer.php'; ?>
     </div>
   </body>
 </html>
