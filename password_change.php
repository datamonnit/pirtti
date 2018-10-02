<?php
    include('db.php');
    session_start();
    $errors = array(); 

    if(!isset($_SESSION['username'])){
        header("location: adminimg.php");

    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header("location: adminimg.php");
            
    }



    if(isset($_POST) & !empty($_POST)){
      $username = mysqli_real_escape_string($conn, $_POST['username']);
      $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
      $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);
      $query = "SELECT * FROM gallery_user WHERE username='$username'";
      $results = mysqli_query($conn, $query);
      
      if (mysqli_num_rows($results) == 1) {
          $row = mysqli_fetch_assoc($results);

          if ($password_1 != $password_2) {
            array_push($errors, "salasanat eivät täsmää");
          }

          if (count($errors) == 0) {
            $password = md5($password_1);
            $gr = "UPDATE gallery_user SET password='$password' WHERE id = '$row[id]'";
            $results = mysqli_query($conn, $gr);
            }
        }
    }

?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Päiväkoti pirtti">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="keywords" content="päiväkoti, päiväkotiyhdistys, Päiväkotiyhdistys pirtti ry">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <title>Päiväkoti Pirtti - Lisää kuva</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/slider.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <script src="assets/js/lightbox.js"></script>
    
    <script> //Valikonpiilotus
      $(document).ready(function(){
          $("#hide").click(function(){
              $("nav").slideToggle("fast");
          });
      });
    </script>
    <style>

    </style>
  </head>
  <body>
    <header>
      <button onclick="topFunction()" id="myBtn">Ylös</button>
      <div class="container">
          <div id="title"> <p>Puh. 0440 214 297<br>Telkänkatu 2 50190 Mikkeli<br>pkpirttiry@surffi.fi</p></div>
          <h1> Päiväkoti Pirtti</h1>
          <button name="myButton" id="hide">
            <div class="juttu" onclick="myFunction(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
            </div></button>
        <nav>
          <ul>
            <li class="current tab1"><a href="index.html" class="fa fa-home">&nbsp;Etusivu </a></li>
            <li  class="tab4"><a href="yhteystiedot.html" class="fa fa-info">&nbsp;Yhteystiedot</a></li>
            <li  class="tab5 dropdown">
              <a class="fa fa-file" href="javascript:void(0)" class="dropbtn" >&nbsp;Hakemukset</a>
              <div class="dropdown-content">
              <a href="paivahoitohakemus.html">Päivähoitohakemus</a>
              <a href="esiopetushakemus.html">Esiopetushakemus</a>
              <a href="palvelusetelihakemus.html">Palvelusetelihakemus</a>
              </div>
              </li>
            <li  class="tab6"><a href="../kuvia.php" class="fa fa-image">&nbsp;Kuvia</a></li>
            </ul>
          </nav>
          <p> <a href="password_change.php?logout='1'" style="color: red;">Kirjaudu ulos</a> </p>
          <p> <a href="galleria/lisaakuva.php" style="color: red;">Takas</a> </p>   
          <p> <a href="newuser.php" style="color: red;">luo Käyttäjä</a> </p>   
          <P>Käyttäjä: <?php echo $_SESSION['username']?></p>
      </div>
    </header>
  <hr class="style-two">
  <center>

        <form class="form-signin" method="POST">
        <?php include('errors.php'); ?>
                Käyttäjätunnus:<br>
                <input class="css-input" type="text" name="username" >
                <br><br>
                Salasana:<br>
                <input  class="css-input" type="password" name="password_1">
                <br><br>
                Salasana uudelleen:<br>
                <input class="css-input" type="password" name="password_2">
                <br><br>
                <button class="css-input" type="submit" name="passchan">Vaihda salasana</button>                
            </form> 
<script>
function myFunction(x) {
    x.classList.toggle("change");
}
</script>


  </body>
  <script>
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("fast");
    });
});
</script>
<script>
// When the user clicks on the button, scroll to the top of the document
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>
</html>
