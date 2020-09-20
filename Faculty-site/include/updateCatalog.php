<?php
include 'connect.php';
global $link;

$sql = "SELECT* FROM assigned_courses, users, courses WHERE users.client_id = assigned_courses.user_id  AND courses.code = assigned_courses.course_code";
$rez = mysqli_query($link, $sql);
/* //am inregistrat administratorul
$var = filter_var(SHA1 ('n19im89da'),FILTER_SANITIZE_ENCODED);
$sql = "INSERT INTO admins (user_admin, password_admin) VALUES ( 'nimda', '$var' )" ;
*/

//$sql = "UPDATE products SET stock = '88' WHERE code =1";

//ZENO
  if (mysqli_query($link, $sql)) {
    $message = "V-ati inregistrat cu succes!";
  /* echo "<script type='text/javascript'>alert('$message'); </script>";*/}
  else {echo 'ERROR: Could not able to execute ' . $sql . mysqli_error($link);}
  mysqli_close($link);
 ?>
  <table id="tab">
     <tr>
       <th>Nr.crt.</th>
       <th>Nume</th>
       <th>Prenume</th>
       <th>Telefon</th>
       <th>Email</th>
       <th>Oras</th>
       <th>Curs</th>
       <th>Nota</th>
       <th>Data Inscrierii</th>
       <th>Sterge</th>
      </tr>
      <?php
       $i=1;
         while($row = mysqli_fetch_array($rez))
           {
                echo"<tr>
                       <td>".$i."</td> <td>".$row['first_name']."</td> <td>".$row['last_name']."</td> <td>".$row['phone']."</td> <td>".$row['email']."</td>
                       <td>".$row['city']."</td> <td>".$row['subject']."</td> <td>".$row['grade']."</td> <td>".$row['data']."</td>
                       <td><a href=\"include\stergeInregistrareCatalog.php?id=".$row['assigned_id']."\">şterge</a></td>
                     </tr>";
                $i++;
           }
      ?>
   </table>
