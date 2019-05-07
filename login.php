<?php
 
 include('db.php');
  session_start();
  $errors = array(); 

// Haetaan käyttäjä ja tarkistetaan se 

if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

    if (empty($username)) {
        array_push($errors, "Käyttäjätunnus on pakollinen");
    }
    if (empty($password)) {
        array_push($errors, "Salasana tarvitaan");
    }

    // 

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

  // Luodaan uusi käyttäjä

  if (isset($_POST['reg_user'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);
  
  // Tarkistetaan pakolliset kentät
  
    if (empty($username)) { array_push($errors, "Käyttäjätunnus on pakollinen"); }
    if (empty($email)) { array_push($errors, "Sähköposti on pakollinen"); }
    if (empty($password_1)) { array_push($errors, "Salasana on pakollinen"); }
    if ($password_1 != $password_2) {
    array_push($errors, "salasanat eivät täsmää");
    }
 
    // Tarkistetaan löytyykö samalla nimellä käyttäjää jo
  
    $user_check_query = "SELECT * FROM gallery_user WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
    if ($user) { 
      if ($user['username'] === $username) {
        array_push($errors, "Käyttäjätunnus on jo olemassa");
      }
  
      if ($user['email'] === $email) {
        array_push($errors, "Sähköposti on jo olemassa");
      }
    }
  
  
    if (count($errors) == 0) {
      $password = md5($password_1);

      // Tallennetaan ja viedään "suljetulle sivulle"
  
      $query = "INSERT INTO gallery_user (username, email, password) VALUES('$username', '$email', '$password')";
      mysqli_query($conn, $query);
      $_SESSION['username'] = $username;
      header('location: adminimg.php');
    }
  }