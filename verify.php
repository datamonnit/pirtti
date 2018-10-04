<html>
<head>
<title>Vahvistus</title>
</head>
<body>
<?php
require('db.php');

if(isset($_GET['hash']) && !empty($_GET['hash'])){
        // Verify data
    $email = $conn->real_escape_string($_GET['email']); // Set email variable
    $hash = $conn->real_escape_string($_GET['hash']); // Set hash variable
    $tablename = $conn->real_escape_string($_GET['tablename']); 


    $sql = "SELECT hash FROM $tablename WHERE huoltajasahkoposti='$email' AND hash='$hash'";
    $results = mysqli_query($conn, $sql);
  
    if (mysqli_num_rows($results)){
      while ($row = mysqli_fetch_array($results)){
          $sql = "DELETE FROM $tablename WHERE hash='$hash'";
          $results= mysqli_query($conn, $sql) or die("Failed".mysqli_error());

          echo "Hakemus kuitattu luetuksi";
          $to      = $email;
          $subject = ' Päivähoitohakemus on luettu!';
          $message = '
          Hei!
          Jättämänne päivähoitohakemus on kuitattu luetuksi.
          -----------------------
          Päiväkotiyhdistys Pirtti ry
          jotainjotain
          jotainjotain
  
          (Tämä on automaattisesti lähetetty ilmoitus. Älä vastaa tähän viestiin!)
          ';
          $headers = 'From: paivahoitohakemus@pirtti.com' . "\r\n";
          mail($to, $subject, $message, $headers);
          header( "Refresh:0; url=paivahoitohakemus.html", true, 5);
      }
  }
}
  
// if (!$search = $conn->query($sql)) {
// die($conn->error);
// }

// $row = $search->fetch_assoc();
// var_dump($row);

// $match = $search->num_rows;
//   echo $match;
//     if($match > 0){

//       $sql = "DELETE FROM paivahoitohakemus WHERE hash='$hash'"

//     if ($conn->query($sql) === TRUE) {  
//         echo "Hakemus kuitattu luetuksi";
//         $to      = $email;
//         $subject = ' Päivähoitohakemus on luettu!';
//         $message = '
//         Hei!
//         Jättämänne päivähoitohakemus on kuitattu luetuksi.
//         -----------------------
//         Päiväkotiyhdistys Pirtti ry
//         jotainjotain
//         jotainjotain

//         (Tämä on automaattisesti lähetetty ilmoitus. Älä vastaa tähän viestiin!)
//         ';
//         $headers = 'Päivähoitohakemus | Pirtti' . "\r\n";
//         mail($to, $subject, $message, $headers);
//       }
//     }



?>
</body>
</html>
