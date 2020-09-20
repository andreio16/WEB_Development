<?php
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != "da" ) {
  header ('Location: index.php#CM');
} else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
}

// Extragem informatiile necesare pentru produs
$code = $_GET['code'];

include 'connect.php';
global $link;

// Extragem informatiile necesare pentru produs
$sql = "SELECT code, title, description, specs, images, type, stock, price FROM products WHERE code = '$code'";
$result = mysqli_query($link, $sql);

if ( mysqli_num_rows( $result ) == 1 ) {
  while ( $row = mysqli_fetch_array($result) ) {
    $product = array(
      'code' => $row['code'],
      'title' => $row['title'],
      'description' => $row['description'],
      'specs' => $row['specs'],
      'images' => explode(',', $row['images']),
      'type' => $row['type'],
      'stock' => $row['stock'],
      'price' => $row['price']
    );
  }
} else {
  die('EROAREEEE!');
}
mysqli_close($link);
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
    <link rel="stylesheet" href="css/produse.css" type="text/css">
  </head>

  <body>
    <div class="page">
      <?php include '/include/header_modificat.php'; ?>
      <main class="clearfix divC">
        <?php include '/include/aside_modificat.php'; ?>
        <section class="style-1">
          <article>
            <h1><?php echo $product['title']; ?></h1> <hr> <br>
            <div class="continer">

              <div class="box box1">
                <?php unset($product['images'][0]); ?>
                <?php foreach( $product['images'] as $image ) { ?>
                <div class="box1-gallery-item">
                  <img src="<?php echo $image; ?>" class="box1-gallery-item-pic img-gallery" alt="<?php echo $product['title']; ?>">
                </div>
              <?php } ?>
              </div>
              <br>
              <div class="btn1">
                <label for="pstoc">Stoc: </label> <input type="number" id="pstoc" name="stoc" value="<?php echo $product['stock']; ?>"  disabled><br>
                <label for="ppret">Pret (in lei):</label> <input type="text" id="ppret" name="pret" value="<?php echo $product['price']; ?>"  disabled><br>

                  <?php if ($product['stock'] <= 0): ?>
                    <a href="product-deny.php?product_id=<?php echo $product['code']; ?>"><input type="button" name="cumpara" value="CUMPARA" class="btn2"></a>
                  <?php else: ?>
                    <a href="product-buy.php?product_id=<?php echo $product['code']; ?>"><input type="button" name="cumpara" value="CUMPARA" class="btn2"></a>
                  <?php endif; ?>

              </div>
              <br>
              <div class="box box2">
              <?php echo $product['specs']; ?>
              </div>
            </div>
          </article>
        </section>
    </main>
    <?php include '/include/footer.php'; ?>
    </div>
  </body>
</html>
