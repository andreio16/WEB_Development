<?php
include 'connect.php';
global $link;

// Preluam user_id din GET
$code = $_GET['code'];

$sql = "SELECT code, subject, homework  FROM  courses WHERE code = '$code' ";

if ($result = mysqli_query($link, $sql)) {
  // Daca avem doar un singur rezultat
  if (mysqli_num_rows($result) == 1) {
    while ($row = mysqli_fetch_array($result)) {
      // Citim datele din randul curent
      $code = $row['code'];
      $subject = $row['subject'];
      $homework = $row['homework'];
    }
  } else {
    echo 'Nu sunt intrari in baza de date';
  }
} else {
  echo 'ERROR: Could not able to execute ' . $sql . mysqli_error($link);
}
$var = 'Am trimis prin link (By HAHAH JOKERZzzScriptz) ';
// Inchidere conexiune
mysqli_close($link);
?>

  <form action="updateCatalogTema.php?id=<?php echo $var;?>" class="form" method="post" enctype="multipart/form-data">
    <div class="form__field">
      <label class="form__label" for="prod">Cursul</label>
      <input class="form__input"  name="subject" type="text" id="prod"  value="<?php echo $subject; ?>" disabled>
    </div>
    <div class="form__field">
      <label class="form__label" for="pret">Introdu Tema</label>
    </div>
    <div class="form__field">
    <textarea name="homework" rows="10" cols="80"><?php echo $homework; ?></textarea>
    </div>
    <!-- Input hidden prin care trimitem user_id -->
    <input type="hidden" name="code" value="<?php echo $code;?>">
    <button type="submit" class="form__button">Update</button>
  </form>
