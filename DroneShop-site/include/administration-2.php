<?php
include 'connect.php';
global $link;

$sql = "SELECT code, type, price, stock  FROM  products ";
if ($result = mysqli_query($link, $sql)) {
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {

    // Citim variabilele din randul curent returnat
    $code = $row['code'];
    $type = $row['type'];

    // Sintaxa HereDoc
    echo <<<HTML
      <div class="result__item">
        <br>
        <pre>Drona {$type}  <a href="admin-pg2.1.php?code={$code}">[Edit Record]</a></pre>
        <hr>
      </div>
HTML;
    }
    // Eliberare rezultat
  //  mysqli_free_result($result);
  } else {
    echo 'Nu sunt intrari in baza de date.';
  }
} else {
  echo 'ERROR: Could not able to execute ' . $sql . mysqli_error($link);
}

// Inchidere conexiune
mysqli_close($link);
?>
