<?php
include '/include/connect.php';
global $link;

$sql = "SELECT client_id, first_name, last_name, code, subject, user_id, course_code, assigned_id   FROM  users, courses, assigned_courses  WHERE client_id = assigned_courses.user_id AND assigned_courses.course_code = courses.code";
if ($result = mysqli_query($link, $sql)) {
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {

    // Citim variabilele din randul curent returnat
    $client_id = $row['client_id'];
    $firstName = $row['first_name'];
    $lastName = $row['last_name'];
    $code = $row['code'];
    $subject = $row['subject'];
    $assigned_id = $row['assigned_id'];
    // Sintaxa HereDoc
    echo <<<HTML
      <div class="alignClass">
        <br>
        <pre class="first_letter_upp">Nr.Matricol: {$client_id}    Nume: {$firstName}    Prenume: {$lastName}    Curs: {$subject}    <a href="include/evalueazaStudent.php?code={$assigned_id}">[Edit Record]</a></pre>
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
