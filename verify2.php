<html>
<head>
<title>Vahvistus</title>
</head>
<body>
<?php
require('db.php');

if (isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
        // Verify data
  $email = $conn->real_escape_string($_GET['email']); // Set email variable
  $hash = $conn->real_escape_string($_GET['hash']); // Set hash variable

  $sql = "SELECT huoltajasahkoposti, hash FROM esiopetushakemus WHERE huoltajasahkoposti='$email' AND hash='$hash'";

  if (!$search = $conn->query($sql)) {
    die($conn->error);
  }

  $row = $search->fetch_assoc();
  var_dump($row);

  $match = $search->num_rows;
  echo $match;
    if($match > 0){

      $sql = "DELETE FROM esiopetushakemus WHERE hash='$hash'";

      if ($conn->query($sql) === TRUE) {  
        echo "Hakemus kuitattu luetuksi";
        $to      = $email;
        $subject = ' Päivähoitohakemus on luettu!';
        $message = '
        Hei!
        Jättämänne päivähoitohakemus on kuitattu luetuksi.
        -----------------------
        Päiväkotiyhdistys Pirtti ry
        Puh. 0440 214 297
        Telkänkatu 2 50190 Mikkeli
        pkpirttiry@surffi.fi

        (Tämä on automaattisesti lähetetty ilmoitus. Älä vastaa tähän viestiin!)
        ';
        $headers = 'Päivähoitohakemus | Pirtti' . "\r\n";
        mail($to, $subject, $message, $headers);
      } else { 
        echo "virhe:" . $conn->error; 
      }
    }
  }


?>
</body>
</html>
