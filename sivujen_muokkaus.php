<?php include('login.php');

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
        //   document.getElementById("hide").onclick = function() {myFunction()};
    </script>
    <style>

</style>

  </head>
  <body>

    <?php include 'header.php';?>

    <p> <a href="lisaakuva.php?logout='1'" style="color: red;">Kirjaudu ulos</a> </p>
          <p> <a href="password_change.php" style="color: red;">Vaihda salasana</a> </p>    
          <p> <a href="newuser.php" style="color: red;">Luo Käyttäjä</a> </p>   
          <p> <a href="galleria/lisaakuva.php" style="color: red;">Takas</a> </p>
          <p>Käyttäjä: <?php echo $_SESSION['username']?></p>
      </div>

    <?php include('errors.php'); ?>

    <div id="login_page">
        <div id="login_screen">
            <!-- Muokkaus kenttä -->
                Valitse muokattava sivu: <br>
                <a href="<?php echo $_SERVER['PHP_SELF']; ?>?sivu=index">Etusivu</a> <br>
                <a href="<?php echo $_SERVER['PHP_SELF']; ?>?sivu=moisio">Moisio</a> <br>
                <a href="<?php echo $_SERVER['PHP_SELF']; ?>?sivu=pirtti">Pirtti</a> <br>
        </div>

 <?php if (isset($_GET['sivu'])) {
    
        include 'db.php';

        $html_content= "";

        $sql = "SELECT * FROM pirtti_db.content WHERE page_name ='" . $_GET['sivu'] ."';";
        $results = mysqli_query($conn, $sql);
  
        if(mysqli_num_rows($results)) {
          while ($rows = mysqli_fetch_array($results)) {
            echo '<div class="container-x ' . '">';
            echo $rows['html_content'];
            echo '</div>';
          }
        }
     }
    
    ?>

      <div class="container-x"></div>


    </div>


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
