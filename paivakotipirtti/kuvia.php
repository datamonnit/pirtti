<?php
$dirname = "galleria/uploads/";
$images = scandir($dirname);
$ignore = Array(".", "..");
$kuvat_html = "";
foreach($images as $curimg){
  if(!in_array($curimg, $ignore)) {
      $kuvat_html .= "<div class='container9' style='float:left;margin-right:10px'><p><a href='uploads/$curimg'> <img  height='150' width='150' src='uploads/$curimg' /><br>\n</div></p>";
  };
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
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/slider.css">
    <script>
      $(document).ready(function(){
          $("button").click(function(){
              $("nav").toggle(500);
          });
      });
        document.getElementById("hide").onclick = function() {myFunction()};



    </script>
  </head>
  <body>
    <header>
      <div class="container">
          <div id="title"> <p>Puh. 0440 214 297<br>Telkänkatu 2 50190 Mikkeli<br>pkpirttiry@surffi.fi</p></div>
          <h1> Päiväkoti Pirtti</h1>
          <button id="hide">&#9776</button>
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
              <li  class="current tab6"><a href="kuvia.php" class="fa fa-image">&nbsp;Kuvia</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <hr class="style-two">
    <section id="showcase">

      <div class="container">
        <?php echo $kuvat_html;

        ?>
      </div><br><br><br><br>
    </section>


    <footer>
      <p>Päiväkotiyhdistys Pirtti ry, Copyright &copy; 2017</p>
    </footer>

    <script>
  // var slideIndex = 1;
  // showDivs(slideIndex);
  //
  // function plusDivs(n) {
  //   showDivs(slideIndex += n);
  // }
  //
  // function currentDiv(n) {
  //   showDivs(slideIndex = n);
  // }
  //
  // function showDivs(n) {
  //   var i;
  //   var x = document.getElementsByClassName("mySlides");
  //   var dots = document.getElementsByClassName("demo");
  //   if (n > x.length) {slideIndex = 1}
  //   if (n < 1) {slideIndex = x.length}
  //   for (i = 0; i < x.length; i++) {
  //      x[i].style.display = "none";
  //   }
  //   for (i = 0; i < dots.length; i++) {
  //      dots[i].className = dots[i].className.replace(" w3-white", "");
  //   }
  //   x[slideIndex-1].style.display = "block";
  //   dots[slideIndex-1].className += " w3-white";
  // }
  </script>

  </body>
</html>
