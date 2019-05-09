<!-- Root Header Start -->
<script> //Valikonpiilotus
       $(document).ready(function(){
          $("#hide").click(function(){
              $("nav").slideToggle("fast");
          });
      });
    </script>
<header>
<button onclick="topFunction()" id="myBtn">Ylös</button>
      <div class="container">
          <div id="title"> <p>Puh. 0440 214 297<br>Telkänkatu 2 50190 Mikkeli<br>pkpirttiry@surffi.fi</p></div>
          <h1> Päiväkotiyhdistys Pirtti ry  </h1>
    <button name="myButton" id="hide"> 
    <div class="juttu" onclick="myFunction(this)">
    <div class="bar1"></div>
    <div class="bar2"></div>
    <div class="bar3"></div>
    </div></button>
        
          <nav>
            <ul>
              <li class="current tab1"><a href="index.php" class="fa fa-home">&nbsp;Etusivu </a></li>
              <li class="current tab1"><a href="moisio.php" class="fa fa-info">&nbsp;Moisio </a></li>
              <li class="current tab1"><a href="pirtti.php" class="fa fa-info">&nbsp;pirtti </a></li>
              <li  class="tab4"><a href="yhteystiedot.php" class="fa fa-info">&nbsp;Yhteystiedot</a></li>
              <li  class="tab5 dropdown">
                <a class="fa fa-file" href="javascript:void(0)" class="dropbtn" >&nbsp;Hakemukset</a>
                  <div class="dropdown-content">
                    <a href="paivahoitohakemus.php">Päivähoitohakemus</a>
                    <a href="esiopetushakemus.php">Esiopetushakemus</a>
                    <a href="palvelusetelihakemus.php">Palvelusetelihakemus</a>				 
                  </div>
              </li>
              <li  class="tab6"><a href="kuvia.php" class="fa fa-image">&nbsp;Kuvia</a></li>
            </ul>
          </nav>
      </div>
    </header><hr class="style-two"> 
    <!-- Header End -->