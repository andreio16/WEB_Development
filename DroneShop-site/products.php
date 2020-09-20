<?php
/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != "da" ) {
  header ('Location: index.php#CM');
}
else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
}

include '/include/public_update.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="photos/icoSite.png">
    <title>Drone-X- Shop</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/responsive.css" type="text/css">
    <link rel="stylesheet" href="css/form.css" type="text/css">
  </head>
  <body>
    <div class="page">
      <?php include '/include/header_modificat.php'; ?>
      <main class="clearfix divC">
        <?php include '/include/aside_modificat.php'; ?>
        <section class="style-1">
          <article>
            <h1>Drone-X Shop | Magazinul de drone</h1> <hr> <br>
            <p>Distractie maxima, acrobatii trasnite si filme HD</p> <br>
            <div class="acasa-container">
              <?php foreach ($products as $product) { ?>
              <div class="acasa-item">
                <div class="acasa-item-pic">
                  <a href="product.php?code=<?php echo $product['code']; ?>"><img src="<?php echo $product['images'][0]; ?>" alt="<?php echo $product['title']; ?>"></a>
                </div>
                <div class="acasa-item-text">
                  <strong><?php echo $product['title']; ?></strong> <br> <br>
                  <p>
                  <small> <small>
                    <?php echo $product['description']; ?>
                    <span class="red"> <strong>Pret: <?php echo $product['price']; ?> lei</strong> </span>
                  </small> </small>
                  </p>
                </div>
              </div>
            <?php } ?>
            </div>
            </article>
            <article id="DN">
              <h1>Despre Noi</h1> <hr> <br>
              <p> Vino si descopera cea mai variata gama de produse din  segmentele  de top ale producatorilor
                  in domeniu. Iti oferim cele mai noi produse reprezentative pentru fiecare segment de piata la
                  cel mai avantajos pret.
              </p> <br>
              <p> Daca esti pasionat de drone si doresti filmari la calitate 4k, noi te putem ajuta sa alegi
                  produsul dorit , la un pret avantajos si cu livrare direct din stoc.
              </p> <br>
              <p> Suntem distribuitor autorizat pentru toata gama de produse Drone-X, companie care a adus o
                  revolutie tehnologica in ceea ce priveste dronele profesionale si cele de agrement. Poti
                  opta intre o drona hobby, cum este Dji Spark si, Dji Mavic Pro, o drona avansata din punct
                  de vedere al controlului, camerei video si tehnologiilor inglobate. Daca doresti sa treci
                  granitele inregistrarilor video la calitate  4k, atunci Phantom 4 PRO este este
                  drona de care ai nevoie. Pentru profesionisti alegerea optima poate fi reprezentata de Inspire 2.
              </p> <br>
              <p> Livrarea se face imediat prin intermediul curieratului rapid. Timpul de procesare al comenzilor este de maxim 12 ore iar livrarea produselor care se afla in stoc  se va face in 24 ore.
                  Garantam pe deplin calitatea produselor noastre.
              </p> <br> <br>
            </article>
            <article id="C">
              <h1>Contact</h1> <hr> <br>
              <h2><small>Drone-X Sediul Central</small></h2> <br> <br>
              <p><strong>Adresa:</strong> Strada Hermann Oberth, nr. 247-251, sect. 3, cod 039937, Sibiu</p>
              <p><strong>Tel:</strong> 021.419.75.52 / 021.369.05.83</p>
              <p><strong>Fax:</strong> 021977.63.47</p>
              <p><strong>Email:</strong> office@dronix.ro</p> <br> <br>
              <iframe src="https://www.google.com/maps/d/embed?mid=1GbDuZd_Y_UWml1OZkM9zl0kEHdRyBHID"></iframe>
            </article>
        </section>
  <!--  </div> -->
    </main>

    <?php include '/include/footer.php'; ?>

    </div>
  </body>
</html>
