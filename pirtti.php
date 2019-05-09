<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Päiväkoti pirtti">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	  <meta name="keywords" content="päiväkoti, päiväkotiyhdistys, Päiväkotiyhdistys pirtti ry">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="./assets/js/main.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/slider.css">
    <title>Päiväkotiyhdistys Pirtti Ry | Etusivu</title>
  </head>
    <script>
      $(document).ready(function(){
          $("#hide").click(function(){
              $("nav").slideToggle("fast");
          });
      });
          document.getElementById("hide").onclick = function() {myFunction()};
    </script>
  <body>

	    <?php include 'header.php';?>

  <section id="showcase">
  <h1><strong>Päiväkoti Pirtti</strong></h1>

  <section id="showcase">
    <div class="container">
        <div class="header">
          <div class="header_img">
            <img src="./assets/img/bannerikuva1.png">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="boxes"> 

  <!-- Tietokantahaku -->

  <?php

      include 'db.php';

      $html_content= "";

      $sql = "SELECT * FROM pirtti_db.content WHERE page_name = 'pirtti'";
      $results = mysqli_query($conn, $sql);

      if(mysqli_num_rows($results)) {
        while ($rows = mysqli_fetch_array($results)) {
          echo '<div class="container-x ' . $rows['class'] . '">';
          echo $rows['html_content'];
          echo '</div>';
        }
      }

  ?>
   
    <div class="container-x">
      <!-- <p><strong>Päiväkoti Pirtti</strong> on Päiväkotyhdistys Pirtti ry:n ylläpitämä yksityinen päiväkoti Mikkelissä. Päiväkoti on aloittanut toimintansa vuonna 1977. Päiväkoti Pirtti sijaitsee Tikanpellon alueella Tuppuralan kaupunginosassa. 
Mikkelin kaupunki valvoo päiväkodin toimintaa ja sen toimintaa ohjaavat samat lait ja asetukset kuin kunnallista varhaiskasvatusta. Päiväkodissamme on käytössä yksityisen päiväkotihoidon palveluseteli. Perhe hakee palveluseteliä Mikkelin kaupungilta saatuaan päivähoitopaikan päiväkodista. Varhaiskasvatuksen asiakasmaksut määräytyvät kunnallisten maksumääritysperusteiden mukaan. Kunnalliseen asiakasmaksuun lisätään yksityisen päivähoidon omavastuulisä, joka on kokopäivähoidossa olevilta 30 euroa kuukaudessa.
Päiväkoti Pirtissä toimii viisi lapsiryhmää 1-6 – vuotiaille lapsille.

      </p> -->
    </div>

    <div class="container3">
      <!-- <p>
          <h1>Ryhmät:</h1>
          <ul>
          <li>Nuput, 1-3 -vuotiaat (8 päivähoitopaikkaa)</li>
          <li>Metsätähdet, 3-4 -vuotiaat (8 päivähoitopaikkaa)</li>
          <li>Sinikellot, 4-5 -vuotiaat (14-16 päivähoitopaikkaa)</li>
          <li>Esikot, esikoulu (8-10 esiopetuspaikkaa)</li>
        </ul>
      </p> -->
        </div>
    <div class="container4">
      <!-- <p>Henkilökuntaan kuuluu neljä lastentarhanopettajaa, kolme lastenhoitajaa sekä avustaja.
      </p> -->
    </div>
    <!-- <div class="container5">
      <p> <h1>Henkilökunta:</h1><br>
        Heli Joensuu, päiväkodin johtaja / lastentarhanopettaja<br>
        Sari Pekkanen, varajohtaja, sosionomi (amk)<br>
        Eija Laamanen, lastentarhanopettaja<br>
        Riitta Ruuska , lastenhoitaja<br>
        Arja Hurri , päivähoitaja<br>
        Taija Virtanen, lähihoitaja<br>
      </p>
    </div> -->
  </section>
  <footer>
      <a href="adminimg.php"><p>Päiväkotiyhdistys Pirtti ry, Copyright &copy; 2018</p></a>

  </footer>
  </body>

  <!-- Sivumenun piilotus -->
  <script>
  function openSlideMenu(){
      document.getElementById('side-menu').style.width = '250px';
      document.getElementById('side-menu').style.opacity = '100';
      document.getElementById('pikalinkit').style.opacity = '0';
    }
  
    function closeSlideMenu(){
      document.getElementById('side-menu').style.width = '0';
      document.getElementById('side-menu').style.opacity = '0';
      document.getElementById('pikalinkit').style.opacity = '100';
    }
  </script>

<!-- ylämenu piilotus -->
<script>
$(document).ready(function(){
    $("#hide").click(function(){
        $("nav").slideToggle("fast");
    });
});
</script>

<!-- Ylös nappi -->
<script>
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

function topFunction() {
    document.body.scrollTop = 10;
    document.documentElement.scrollTop = 10;
}
</script>


</html>
