<?php
//pääsysivulle


//tarkistus
if(isset($_POST["submit"])) {
  //kuvanpaikka
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "Tiedostomuoto ei sallittu!";
        $uploadOk = 0;
    }

  if (file_exists($target_file)) {
      echo "Sama kuva on jo ladattu!";
      $uploadOk = 0;
  }
  if ($_FILES["fileToUpload"]["size"] > 500000) {
      echo "Kuvan tiedostokoko on liian suuri";
     $uploadOk = 0;
  }
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
      echo "Vain JPG, JPEG, PNG & GIF tiedostomuodot ovat sallittuja.";
      $uploadOk = 0;
  }
  //kuvan lataaminen
  if ($uploadOk == 0) {
      echo "Kuvan lataamisessa tapahtui virhe!";
  } else {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "Tiedosto ". basename( $_FILES["fileToUpload"]["name"]). " on ladattu.";
               echo '<div style="float:left;margin-right:10px"><p>Tässä lataamasi kuva</p>
         <img height=150px; width=150px; src="'.$target_file.'" alt="kuvaa ei löydy" /></br>
         <p>
         </div>';
      } else {
          echo "Kuvan lataamisessa tapahtui virhe!";
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
    <link rel="stylesheet" href="..../assets/css/style.css">
    <link rel="stylesheet" href="..../assets/css/slider.css">
    <script> //Valikonpiilotus
      $(document).ready(function(){
          $("#hide").click(function(){
              $("nav").slideToggle("fast");
          });
      });
    </script>
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
            <li class="current tab1"><a href="pirtti.html" class="fa fa-home">&nbsp;Etusivu </a></li>
            <li  class="tab4"><a href="yhteystiedot.html" class="fa fa-info">&nbsp;Yhteystiedot</a></li>
            <li  class="tab5 dropdown">
              <a class="fa fa-file" href="javascript:void(0)" class="dropbtn" >&nbsp;Hakemukset</a>
              <div class="dropdown-content">
              <a href="paivahoitohakemus.html">Päivähoitohakemus</a>
              <a href="esiopetushakemus.html">Esiopetushakemus</a>
              <a href="palvelusetelihakemus.html">Palvelusetelihakemus</a>
              </div>
              </li>
            <li  class="tab6"><a href="kuvia.php" class="fa fa-image">&nbsp;Kuvia</a></li>
            </ul>
          </nav>
      </div>
    </header>
  <hr class="style-two">
  <center>

    <form action="lisaakuva.php" method="post" enctype="multipart/form-data"><br>
      <label for="enimi">Valitse ladattava kuva:</label><br>
      <input type="file" name="fileToUpload" id="fileToUpload"><br>
      <label for="enimi">Otsikko:</label><br>
      <input type="text" name="otsikko" id="otsikko" placeholder="Anna kuvalle otsikko"><br>
      <input type="submit" value="Upload Image" name="submit"><br>
    </form></center>

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
