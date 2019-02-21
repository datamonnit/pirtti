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
    <title>Päiväkoti Pirtti | Palvelusetelihakemus</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/slider.css">
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

    <!-- <header>
      <button onclick="topFunction()" id="myBtn">Ylös</button>
      <div class="container">
        <div id="title"> <p>Puh. 0440 214 297<br>Telkänkatu 2 50190 Mikkeli<br>pkpirttiry@surffi.fi</p></div>
          <h1> Päiväkoti Pirtti</h1>
<button name="myButton" id="hide">      <div class="juttu" onclick="myFunction(this)">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div></button>
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
            <li  class="tab6"><a href="kuvia.php" class="fa fa-image">&nbsp;Kuvia</a></li>
          </ul>
        </nav>
      </div>
    </header> -->
    <?php include 'header.php';?>

    <hr class="style-two">
    <section id="boxes"> 
    <div class="container3">
      <p>
      <p><strong>Asiakasmaksut:</strong><br /><a id="LPlnk584278" href="http://www.mikkeli.fi/sisalto/palvelut/varhaiskasvatus/varhaiskasvatuksen-asiakasmaksut" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable">www.mikkeli.fi/sisalto/palvelut/varhaiskasvatus/varhaiskasvatuksen-asiakasmaksut</a><br/>
      <br/><strong>Facebook&nbsp; : pkpirttiry</strong>
      <br /><br />
      <strong>Palvelusetelihakemus:</strong><br /><a href="https://mikkeli.daisynet.fi/eDaisy" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable">https://mikkeli.daisynet.fi/eDaisy</a></p>
      <p><strong>Omavalvontasuunnitelma Moisio</strong></p>
      <a href="assets/PDF/OmavalvontasuunnitelmaMoisio.docx">Lataa</a>
      <p><strong>Omavalvontasuunnitelma Pirtti</strong></p>
      <a href="assets/PDF/OmavalvontasuunnitelmaPirtti.docx">Lataa</a>
        </div>
        <section> 
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
