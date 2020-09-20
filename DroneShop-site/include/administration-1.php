<?php
include 'connect.php';
global $link;

$sql = "SELECT* FROM deliveries, users, products WHERE users.client_id = deliveries.id_user  AND products.code = deliveries.id_prod ";
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
       <th>Adresa</th>
       <th>Oras</th>
       <th>Judet</th>
       <th>Produs</th>
       <th>Pret</th>
       <th>Data</th>
       <th>Sterge</th>
      </tr>
      <?php
       $i=1;
         while($row = mysqli_fetch_array($rez))
           {
                echo"<tr>
                       <td>".$i."</td> <td>".$row['first_name']."</td> <td>".$row['last_name']."</td> <td>".$row['phone']."</td> <td>".$row['address']."</td>
                       <td>".$row['city']."</td> <td>".$row['zone_id']."</td> <td>".$row['type']."</td> <td>".$row['price']."</td> <td>".$row['data']."</td>
                       <td><a href=\"admin-sterge.php?id=".$row['id_d']."\">şterge</a></td>
                     </tr>";
                $i++;
           }
      ?>
   </table>
