<?php
include 'connect.php';
global $link;

// Preluam user_id din GET
$code = $_GET['code'];

$sql = "SELECT assigned_id, grade  FROM  assigned_courses WHERE assigned_id = '$code' ";

if ($result = mysqli_query($link, $sql)) {
  // Daca avem doar un singur rezultat
  if (mysqli_num_rows($result) == 1) {
    while ($row = mysqli_fetch_array($result)) {
      // Citim datele din randul curent
      $code = $row['assigned_id'];
      $grade = $row['grade'];
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

  <form action="updateGrade.php?id=<?php echo $var;?>" class="form" method="post" enctype="multipart/form-data">
    <div class="form__field">
      <label class="form__label extra__label" for="prod">Nota curenta</label>
      <input class="form__input extra__input"  name="grade" type="text" id="prod"  value="<?php echo $grade; ?>">
    </div>
    <!-- Input hidden prin care trimitem user_id -->
    <input type="hidden" name="code" value="<?php echo $code;?>">
    <button type="submit" class="form__button">Update</button>
  </form>
