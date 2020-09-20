<?php
include 'connect.php';
global $link;



// Preluam user_id din GET
$code = $_GET['code'];

// Selectam id, first_name, last_name utilizatorului cu ID-ul = $user_id
$sql = "SELECT code, type, price, stock  FROM  products WHERE code = '$code' ";

if ($result = mysqli_query($link, $sql)) {
  // Daca avem doar un singur rezultat
  if (mysqli_num_rows($result) == 1) {
    while ($row = mysqli_fetch_array($result)) {

      // Citim datele din randul curent
      $code = $row['code'];
      $type = $row['type'];
      $price = $row['price'];
      $stock = $row['stock'];
    }
    // Eliberare rezultat
  //  mysqli_free_result($result);
  } else {
    echo 'Nu sunt intrari in baza de date';
  }
} else {
  echo 'ERROR: Could not able to execute ' . $sql . mysqli_error($link);
}

// Inchidere conexiune
mysqli_close($link);
?>

  <form action="admin-update.php" class="form" method="post" enctype="multipart/form-data">
    <div class="form__field">
      <label class="form__label" for="prod">Drona</label>
      <input class="form__input"  name="type" type="text" id="prod"  value="<?php echo $type; ?>" disabled>
    </div>
    <div class="form__field">
      <label class="form__label" for="pret">Pret (lei)</label>
      <input class="form__input"  name="price" type="text" id="pret"  value="<?php echo $price; ?>">
    </div>
    <div class="form__field">
      <label class="form__label" for="stoc">Stoc</label>
      <input class="form__input"  name="stock" type="text" id="stoc"  value="<?php echo $stock; ?>">
    </div>
    <!-- Input hidden prin care trimitem user_id -->
    <input type="hidden" name="code" value="<?php echo $code;?>">
    <button type="submit" class="form__button">Update</button>
  </form>
