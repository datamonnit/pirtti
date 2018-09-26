<?php
  include('db.php');
  session_start();
  $errors = array(); 



if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

    if (empty($username)) {
        array_push($errors, "Käyttäjätunnus on pakollinen");
    }
    if (empty($password)) {
        array_push($errors, "salasana tarvitaan");
    }

    if (count($errors) == 0) {
      $password = md5($password);
      $query = "SELECT * FROM gallery_user WHERE username='$username' AND password='$password'";
      $results = mysqli_query($conn, $query);
      if (mysqli_num_rows($results) == 1) {
          $row = mysqli_fetch_assoc($results);
          $_SESSION['username'] = $username;
          header('location: galleria/lisaakuva.php');
      }else {
        array_push($errors, "Väärä käyttäjätunnuksen / salasanan yhdistelmä");
      }
    }
  }