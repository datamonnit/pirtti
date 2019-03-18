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
    <!-- <header>
      <button onclick="topFunction()" id="myBtn">Ylös</button>
      <div class="container">
          <div id="title"> <p>Puh. 0440 214 297<br>Telkänkatu 2 50190 Mikkeli<br>pkpirttiry@surffi.fi</p></div>
          <h1> Päiväkoti Pirtti</h1>
          <button name="myButton" id="hide">&#9776</button> -->
          <!-- <button name="myButton" id="hide">
            <div class="juttu" onclick="myFunction(this)"> 
              <div class="bar1"></div>
              <div class="bar2"></div>
              <div class="bar3"></div>
            </div>
          </button> -->
        
          <!-- <nav>
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
              <li  class="tab6"><a href="kuvia.php" class="fa fa-image">&nbsp;Kuvia</a></li>
            </ul>
          </nav>
      </div>
    </header><hr class="style-two">  -->

	    <?php include 'header.php';?>

 <!-- sidemenun alkup. paikka -->
<!-- 
 <div onclick="openSlideMenu()" id="pikalinkit" class=pikalinkit>
    <svg style="padding: 15px 10px 25px 10px;" width="30" height="30"><path d="M0,5 30,5" stroke="#000" stroke-width="3"/><path d="M0,14 30,14" stroke="#000" stroke-width="3"/><path d="M0,23 30,23" stroke="#000" stroke-width="3"/>   </svg> <h5 id="pikah5">pikalinkit</h5>
    
        
      </div>
 <div id="side-menu" class="side-nav">
      <h6> Pikalinkit</h6>
      <hr class="style-two" style="padding:-5px; border:2;height:6px;background:#ffffffad;">
      <a  href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>      
      <a  href="./assets/VarhaiskasvatussuunnitelmaPäiväkotiPirtti.pdf">Varhaiskasvatussuunnitelma</a>
      <a  href="http://www.mikkeli.fi/palvelut/yksityisen-paivakotihoidon-palveluseteli/">Palvelusetelihakemus</a>
      <a  href="http://www.mikkeli.fi/palvelut/varhaiskasvatuksen-asiakasmaksut">Varhaiskasvatuksen asiakasmaksut</a>
      <a  href="paivahoitohakemus.html">Päivähoitohakemus</a>
      <a  href="palvelusetelihakemus.html">Esiopetushakemus</a>
    </div>  -->
  
  
  <section id="showcase">
    <div class="container">
        <div class="header">
          <div class="header_img">
            <img src="./assets/img/kuva2.png">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="boxes"> 
   
    <div class="container2">
      <h1>Päiväkotiyhdistys Pirtti ry</h1>
    <p>Päiväkotiyhdistys Pirtti ry omistaa ja hallinnoi Päiväkoti Pirttiä ja Moision päiväkotia Mikkelissä.

    Päiväkotiyhdistyksen hallinnosta ja taloudesta vastaa johtokunta , johon kuuluu puheenjohtajan lisäksi kuusi varsinaista jäsentä ja neljä varajäsentä.<
    Johtokunta kokoontuu tarpeen mukaan ja kokouksissa sihteerinä ja asioiden esittelijänä toimii päiväkodin johtaja.Johtokunnan jäsenet ovat Etelä-Savon sairaanhoitopiirin henkilökuntaa ja päiväkodeissa hoidossa olevien lasten vanhempia. <br><br>
    Päiväkotien yhteisenä johtajana toimii Heli Joensuu. <br>
    <br>
    Molemmissa päiväkodeissa annetaan myös esiopetussuunnitelman mukaista esiopetusta.</p>
    </div>


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
