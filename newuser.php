<?php include('login.php');

   
  if(!isset($_SESSION['username'])){
    header("location: adminimg.php");

}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: adminimg.php");
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
        
    </script>
    <style>

</style>

  </head>
  <body>

        <p> <a href="password_change.php?logout='1'" style="color: red;">Kirjaudu ulos</a> </p>
        <p> <a href="galleria/lisaakuva.php" style="color: red;">Takas</a> </p>
        <p>Käyttäjä: <?php echo $_SESSION['username']?></p> 
      </div>
    </header> -->
    <?php include 'galleria/header.php';?>
    <p> <a href="password_change.php?logout='1'" style="color: red;">Kirjaudu ulos</a> </p>
        <p> <a href="galleria/lisaakuva.php" style="color: red;">Takas</a> </p>
          <P>Käyttäjä: <?php echo $_SESSION['username']?></p>
    </div>
    </header>
  <hr class="style-two">
    <center>
    <?php include('errors.php'); ?>
            <div id="login_page">
                <div id="login_screen">
                    <form method="post" action="adminimg.php">
                        Käyttäjätunnus:<br>
                        <input type="text" class="css-input" name="username">
                        <br>
                        Sähköposti:<br>
                        <input type="email" class="css-input" name="email" >
                        <br>
                        Salasana:<br>
                        <input type="password" class="css-input" name="password_1" >
                        <br>
                        Salasana uudelleen:<br>
                        <input type="password" class="css-input" name="password_2" >
                        <br>
                        <button type="submit" class="css-input" value="submit" name="reg_user">Luo</button>
                        <a href="adminimg.php">Kirjaudu</a>
                    </form> 
                </div>
            </div>  </center>
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
