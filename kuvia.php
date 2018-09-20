<?php
        $conn = mysqli_connect("localhost", "root", "", "pirttil");

// $dirname = "galleria/thumbs/";
// $images = scandir($dirname);
// $ignore = array(".", ".");
$kuvat_html = "";
// foreach($images as $thumb){
//   if(!in_array($thumb, $ignore)) {
//       $image = str_replace("thumb_", "", $thumb);
//       $kuvat_html .= "<a href='galleria/uploads/$image'> <img src='$dirname$thumb' />";
     
//   };
// }

$sql = "SELECT * FROM gallery";
$results = mysqli_query($conn, $sql);

if (mysqli_num_rows($results)){
    while ($row = mysqli_fetch_array($results)){
      $kuvat_html .= "<div id='kuva' style='margin:3px;'>";
      $kuvat_html .= "<p style:'margin:3px'>".$row[1]."</p>";
      $kuvat_html .= "<a href='galleria/".$row[4]."'/> <img src='galleria/".$row[7]."'/></a >";
      $kuvat_html .= "<p id='desc'>".$row[3]."</p>";
      $kuvat_html .= "</div>";
    }
}

  
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Päiväkoti pirtti">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <meta name="keywords" content="päiväkoti, päiväkotiyhdistys, Päiväkotiyhdistys pirtti ry">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <title>Päiväkoti Pirtti | Kuvia</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/slider.css">
    <script>
      $(document).ready(function(){
          $("button").click(function(){
              $("nav").toggle(500);
          });
      });




    </script>
    <style>
      #kuva {
        margin: auto;
        border: 1px solid #ccc;
        float: left;
        width: 180px;
        background: #00000071;
      }

      #kuva:hover {
        border: 1px solid #777;
      }

      #kuva img {
        width: 100%;
        height: auto;
      }

      #desc {
      padding: 15px;
      text-align: center;
      }

    </style>
  </head>
  <body>
    <header>
      <div class="container">
          <div id="title"> <p>Puh. 0440 214 297<br>Telkänkatu 2 50190 Mikkeli<br>pkpirttiry@surffi.fi</p></div>
          <h1> Päiväkoti Pirtti</h1>
          <!-- <button id="hide">&#9776</button> -->
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
              <li  class="current tab6"><a href="kuvia.php" class="fa fa-image">&nbsp;Kuvia</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <hr class="style-two">
    <div class="juu"><center>
    
      <div class="kuvat">
      <p style="color:balck;"> Voit klikata kuvia suuremmiksi </p>
        <?php echo $kuvat_html;

        ?>
      </div>
    </center>
    <div/>

    <!-- <footer>
      <p>Päiväkotiyhdistys Pirtti ry, Copyright &copy; 2017</p>
      <p><a style="color:black;"  href="galleria/lisaakuva.php">Kirjaudu</a></p>
    </footer> -->

    <script>
  var slideIndex = 1;
  showDivs(slideIndex);

  function plusDivs(n) {
    showDivs(slideIndex += n);
  }

  function currentDiv(n) {
    showDivs(slideIndex = n);
  }

  function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    if (n > x.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x.length}
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
       dots[i].className = dots[i].className.replace(" w3-white", "");
    }
    x[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " w3-white";
  }
  </script>

  </body>
</html>
