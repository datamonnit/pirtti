<?php include('login.php');
  include('db.php');

  require_once('db.php');
  
  if(isset($_POST) & !empty($_POST)){
      $username = mysqli_real_escape_string($conn, $_POST['username']);
      $query = "SELECT * FROM gallery_user WHERE username='$username'";
      $results = mysqli_query($conn, $query);
      if (mysqli_num_rows($results) == 1) {
          $row = mysqli_fetch_assoc($results);
          $password = $row['password'];
          $to = $row['email'];
          $subject = "Palautettu salasanasi";
          
          function password_generate($chars) 
          {
            $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
            return substr(str_shuffle($data), 0, $chars);
          }
          $newPassword = password_generate(7);
          $newPassword_md5 = md5($newPassword);
              $gr = "UPDATE gallery_user SET password='$newPassword_md5' WHERE id = '$row[id]'";
              $results = mysqli_query($conn, $gr);
  
          echo "</br>".$newPassword;
          echo "</br>".$newPassword_md5;

          $message = "Tässä on uusi salasana: " . $newPassword;
          $headers = "From: miklas.marko@live.com" . "\n";
          if(mail($to, $subject, $message, $headers)){
              echo "Salasana on lähetetty sähköpostiosoitteeseesi";
       
          }else{
              echo "Salasanan palauttaminen epäonnistui, yritä uudelleen";
          }
   
      }else{
          echo "Käyttäjänimiä ei ole tietokannassa";
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
    <title>Päiväkoti Pirtti | Etusivu</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/slider.css">
    <script>
      $(document).ready(function(){
          $("#hide").click(function(){
              $("nav").slideToggle("fast");
          });
      });
          document.getElementById("hide").onclick = function() {myFunction()};
    </script>
    <style>

</style>

  </head>
  <body>

    <?php include 'header.php';?>
    </div>
    </header>
  <hr class="style-two">
  <center>
    <?php include('errors.php'); ?>
    <form class="form-signin" method="POST">
        <div class="input-group">
		  <input type="text" name="username" class="css-input" placeholder="Username" required>
		</div>
        <button class="css-input"  type="submit">Lähetä</button>
      </form></center>
<script language="javascript">

</script>


<script>
function myFunction(x) {
    x.classList.toggle("change");
}
</script>

  <footer>
      <p>Päiväkotiyhdistys Pirtti ry, Copyright &copy; 2017</p>
  </footer>
  </body>

  <script>
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("fast");
    });
});
</script>
<script>

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>
</html>


