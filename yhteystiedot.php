<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Päiväkoti pirtti">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	  <meta name="keywords" content="päiväkoti, päiväkotiyhdistys, Päiväkotiyhdistys pirtti ry">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <title>Päiväkoti Pirtti | Yhteystiedot</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/slider.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
    <!-- <header>
      <div class="container">
          <div id="title"> <p>Puh. 0440 214 297<br>Telkänkatu 2 50190 Mikkeli<br>pkpirttiry@surffi.fi</p></div>
          <h1> Päiväkoti Pirtti</h1>
          <button name="myButton" id="hide">&#9776</button>
          <nav>
            <ul>
              <li class="current tab1"><a href="index.html" class="fa fa-home">&nbsp;Etusivu </a></li>
              <li  class="current tab4"><a href="yhteystiedot.html" class="fa fa-info">&nbsp;Yhteystiedot</a></li>
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
      <section id="yhteystiedot">
        <div class="maps">
          <div class=" yhteystiedot">
            <h2> Yhteystiedot </h2>
            <div class="yhteystiedotpirtti">
                <p>Heli Joensuu, päiväkodin johtaja / lastentarhanopettaja</p>
              <h3> Päiväkoti Pirtti </h3>
                <p> Puh. yläkerta 0440 214 298</p>
                <p> Puh. alakerta 0447 214 297</p>
                <p> Telkänkatu 2 50190 Mikkeli</p>
                <p> pkpirttiry@surffi.fi</p>
                <p> puh. 0440 214 297</p>
                
              <h3> Päiväkoti Moisio </h3>
                <p> Moisiontie 5, 50520 Mikkeli</p>
                <p> moisiopk@surffi.fi</p>
                <p> puh. 0445 336 555</p>
                
                <button id="kartalla" onclick="window.location.href='https://goo.gl/maps/dLP99r2Ds8n'">Näytä kartalla <strong>(Päiväkoti pirtti)</strong></button>
                <button id="kartalla" onclick="window.location.href='https://goo.gl/maps/qAuJcwcbMXx'">Näytä kartalla <strong>(Moision päiväkoti)</strong></button>

            </div>

            </div>
          </div>
            <h2 id="juuj"> Päiväkoti Pirtti </h2>
            <script>
              function setURL(url){
                  document.getElementById('iframe').src = url;
              }
            </script>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1892.2470627236496!2d27.29933722395828!3d61.68823598352508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x469aa19aa8d32e1b%3A0xcabaeadedccf099e!2sP%C3%A4iv%C3%A4kotiyhdistys+Pirtti+Ry!5e0!3m2!1sfi!2sfi!4v1487151959017" class="mappi" id="iframe" width="500" height="500" frameborder="" style="border:0" allowfullscreen></iframe>
                <h2 id="juuj"> Päiväkoti Moisio</h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5514.218634229615!2d27.27420141573487!3d61.65849311208076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x469aa1b484b35df3%3A0xcbdbba74d9ae6590!2zTW9pc2lvbiBQw6RpdsOka290aQ!5e0!3m2!1sfi!2sfi!4v1538981205315" class="mappi" id="iframe" width="500" height="500" frameborder="" style="border:0" allowfullscreen></iframe>
              </div>
      </section>
      <footer>
        <p>Päiväkotiyhdistys Pirtti ry, Copyright &copy; 2017</p>
      </footer>
  </body>
</html>
