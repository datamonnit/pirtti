<?php   
  session_start();

        $conn = mysqli_connect("localhost", "root", "", "pirttil");
// session_start();
// var_dump($_POST);

// if (isset($_POST['username']) && isset($_POST['pswrd'])) {
//   if ($_POST['username'] === 'nakki') {
//     $_SESSION['logged_in'] = true;
//     header('Location: galleria/lisaakuva.php');
//   } else {
//     header('Location: adminimg.php');
//   }

// }

if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  $password = md5($password);
  $query = "SELECT * FROM gallery_user WHERE username='$username' AND password='$password'";
  $results = mysqli_query($conn, $query);
  if (mysqli_num_rows($results) == 1) {
      $row = mysqli_fetch_assoc($results);
      $_SESSION['username'] = $username;
      header('location: galleria/lisaakuva.php');
  }
}