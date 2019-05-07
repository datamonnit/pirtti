<?php

include 'db.php';

$kuvat_html = "";

$sql = "SELECT * FROM gallery";
$results = mysqli_query($conn, $sql);

if (mysqli_num_rows($results)){
    while ($row = mysqli_fetch_array($results)){
      $kuvat_html .= "<div id='kuva' style='margin:3px;'>";
      $kuvat_html .= "<p style:'margin:3px'>".$row[1]."</p>";
      $kuvat_html .= "<a href='galleria/".$row[4]."'data-lightbox='roadtrip'  data-title='$row[3]'/> <img src='galleria/".$row[7]."'/></a >";
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
    <link rel="stylesheet" href="./assets/css/lightbox.css">
    <script src="./assets/js/lightbox.js"></script>
    <script>
      $(document).ready(function(){
          $("#hide").click(function(){
              $("nav").slideToggle("fast");
          });
      });
          document.getElementById("hide").onclick = function() {myFunction()};
    </script>
  </head>
  <body>


    <?php include 'header.php';?>

    <center>
    <hr class="style-two">
    <div class="juu">
    
      <div class="kuvat">
      <p style="color:black;"> Voit klikata kuvia suuremmiksi </p>
        <?php echo $kuvat_html;

        ?>
      </div>
    </div>

  <footer>
      <a href="adminimg.php"><p>Päiväkotiyhdistys Pirtti ry, Copyright &copy; 2018</p></a>

  </footer>
    </center>
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
