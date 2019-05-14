<?php include('login.php');?>
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
    <link rel="stylesheet" href="assets/css/edit-style.css">

    <script>
      $(document).ready(function(){
          $("#hide").click(function(){
              $("nav").slideToggle("fast");
          });
      });
        //   document.getElementById("hide").onclick = function() {myFunction()};
    </script>

  </head>
  <body>

    <?php include 'header.php';?>

    <p> <a href="lisaakuva.php?logout='1'" style="color: red;">Kirjaudu ulos</a> </p>
          <p> <a href="password_change.php" style="color: red;">Vaihda salasana</a> </p>    
          <p> <a href="newuser.php" style="color: red;">Luo Käyttäjä</a> </p>   
          <p> <a href="galleria/lisaakuva.php" style="color: red;">Takas</a> </p>
          <p>Käyttäjä: <?php echo $_SESSION['username']?></p>

    <?php include('errors.php'); ?>

    <div id="login_page">
        <div id="login_screen">
            <!-- Valitaan muokattava sivu -->
                Valitse muokattava sivu: <br>
                <a href="<?php echo $_SERVER['PHP_SELF']; ?>?sivu=index">Etusivu</a> <br>
                <a href="<?php echo $_SERVER['PHP_SELF']; ?>?sivu=moisio">Moisio</a> <br>
                <a href="<?php echo $_SERVER['PHP_SELF']; ?>?sivu=pirtti">Pirtti</a> <br>
        </div>

        <!-- Haetaan tekstit tietokannasta ja tuodaan ne sivulle muokattavaksi käyttäen TinyMCE tekstinmuokkaus pohjaa -->
        
        <?php 
        
          if (isset($_GET['sivu'])) {
      
            include 'db.php';

            $html_content= "";

            $sql = "SELECT * FROM pirtti_db.content WHERE page_name ='" . $_GET['sivu'] ."';";
            $results = mysqli_query($conn, $sql);
    
            if(mysqli_num_rows($results)) {
              while ($rows = mysqli_fetch_array($results)) {
                echo '<form method="post" action="tallenna_sivu.php">';
                echo '<textarea name="html_content" class="container-edit ' . '">';
                echo $rows['html_content'];
                echo '</textarea>';
                echo 'Vaihda laatikon väriä';
                echo '<br>';
                echo '<select name="class">';
                // Tekstilaatikoiden väriä voi myös muuttaa halutessaan
                if ($rows['class'] == 'red') {
                  echo '<option selected value="red">Punainen</option>';
                } else {
                  echo '<option value="red">Punainen</option>';
                }

                if ($rows['class'] == 'green') {
                  echo '<option selected value="green">Vihreä</option>';
                } else {
                  echo '<option value="green">Vihreä</option>';
                }

                if ($rows['class'] == 'blue') {
                  echo '<option selected value="blue">Sininen</option>';
                } else {
                  echo '<option value="blue">Sininen</option>';
                }  
                echo '</select>';
                echo '<input name="id" type="hidden" value="' . $rows['id'] . '"><br>';
                echo '<input type="submit" name="tallenna" value="Tallenna">';
                echo '</form>';
              }
            }
          }
        ?>

    </div>

    <footer>
      <p>Päiväkotiyhdistys Pirtti ry, Copyright &copy; 2017</p>
    </footer>

<script src="./assets/tinymce/js/tinymce/tinymce.min.js"></script>

<script language="javascript">
  

  // TinyMCE -init koodi
  tinymce.init({
  selector: '.container-edit',
  height: 500,
  menubar: false,
  plugins: [
    'advlist autolink lists link image charmap print preview anchor textcolor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table paste code help wordcount'
  ],
  toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tiny.cloud/css/codepen.min.css'
  ]
});

function myFunction(x) {
    x.classList.toggle("change");
}

$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("fast");
    });
});

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

</body>
</html>
