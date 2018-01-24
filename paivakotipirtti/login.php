<?php
session_start();
var_dump($_POST);

if (isset($_POST['username']) && isset($_POST['pswrd'])) {
  if ($_POST['username'] === 'nakki') {
    $_SESSION['logged_in'] = true;
    header('Location: galleria/lisaakuva.php');
  } else {
    header('Location: adminimg.php');
  }

}
