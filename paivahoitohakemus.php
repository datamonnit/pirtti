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
    <title>Päiväkoti Pirtti | Päivähoitohakemus</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/slider.css">

    <style>
    #myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  border: none;
  outline: none;
  color: white;
  cursor: pointer;
  padding: 15px;
  content: ▲;
}

#myBtn:hover {
  background-color: gray;
}
    input[type=text], select  {
        width: 40%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
      background-color: darkgray;
    color: black;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 60%;
    transition: all 0.5s ease 0s;
    font-size: 20px;
    }
    input[type=submit]:hover {
        background-color:#54ff62;
    }
textarea {
  width: 60%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize:vertical ;
}


    label {
      color: #494949;
      font-weight: bold;
    }
    @media screen and (max-width: 800px) {
      input[type=text], select  {
          width: 100%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
      }

      input[type=submit] {
        background-color: darkgray;
      color: black;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
      transition: all 0.5s ease 0s;
      font-size: 20px;
      }
      input[type=submit]:hover {
          background-color:#54ff62;
      }
  textarea {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    resize:vertical ;
  }



     }


    </style>
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
  <button onclick="topFunction()" id="myBtn">Ylös</button>
    <!-- <header>
      <div class="container">
          <div id="title"> <p>Puh. 0440 214 297<br>Telkänkatu 2 50190 Mikkeli<br>pkpirttiry@surffi.fi</p></div>
          <h1> Päiväkoti Pirtti</h1>
          <button   id="hide">&#9776</button>
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
  <section class="hakemus">
    <div class="paivahoitohakemus">
      <form action="paivahoitohakemussend.php" method="POST">

<!-- Lapsen henkilötiedot -->
<h1> Päivähoitohakemus </h1> <br>

          <label for="paivakoti">Valitse päiväkoti:</label><br>
          <select onchange="yesnoCheck(this);" id="paivakoti" name="paivakoti">
            <option disabled="" selected value="valitse">Valitse</option>
            <option value="pkpirtti">Päiväkoti Pirtti</option>
            <option value="pkmoisio">Moision päiväkoti</option>
          </select><br>

          <h2> Lapsen henkilötiedot </h2>

          <label for="enimi">Etunimet:</label><br>
          <input type="text" id="lapsietunimet" name="lapsietunimi" placeholder="Etunimet"><br>

          <label for="snimi">Sukunimi:</label><br>
          <input type="text" id="lapsisukunimi" name="lapsisukunimi" placeholder="Sukunimi"><br>

          <label for="htunnus">Henkilötunnus:</label><br>
          <input type="text" id="lapsihenkilotunnus" name="lapsihenkilotunnus" placeholder="Henkilötunnus"><br>

          <label for="akieli">Äidinkieli:</label><br>
            <select onchange="yesnoCheck(this);" id="lapsiaidinkieli" name="lapsiaidinkieli">
              <option disabled="" selected value="valitse">Valitse</option>
              <option value="suomi">Suomi</option>
              <option value="ruotsi">Ruotsi</option>
              <option value="other">Muu, mikä? Kirjoita alle</option>
            </select><br>
            <div id="ifYes" style="display: none;">
<input type="text" id="lapsiaidinkieli" name="lapsiaidinkieli" placeholder="Muu, mikä?"/><br />
</div>
<script>
function yesnoCheck(that) {
    if (that.value == "other") {

        document.getElementById("ifYes").style.display = "block";
    } else {
        document.getElementById("ifYes").style.display = "none";
    }
}
</script>

          <label for="lemmikkeja">Onko kotonasi lemmikkieläimiä:</label><br>
            <select onchange="yesnoCheck2(this);" id="lemmikkeja" name="lemmikkeja">
              <option disabled="" selected value="valitse">Valitse</option>
              <option value="ei">Ei</option>
              <option value="on">On, mikä?</option>
            </select><br>
            <div id="Yes" style="display: none;">
<input type="text" id="lemmikkeja" name="lemmikkeja" placeholder="On, mikä?"/><br />
</div>

<script>
function yesnoCheck2(that) {
    if (that.value == "on") {

        document.getElementById("Yes").style.display = "block";
    } else {
        document.getElementById("Yes").style.display = "none";
    }
}
</script>
    <hr class="style-two">



          <h2> Huoltajien henkilötiedot </h2>

          <label for="enimi">Etunimi:</label><br>
          <input type="text" id="huoltajaetunimi" name="huoltajaetunimi" placeholder="Etunimi"><br>

          <label for="snimi">Sukunimi:</label><br>
          <input type="text" id="huoltajasukunimi" name="huoltajasukunimi" placeholder="Sukunimi"><br>

          <label for="htunnus">Henkilötunnus:</label><br>
          <input type="text" id="huoltajahenkilotunnus" name="huoltajahenkilotunnus" placeholder="Henkilotunnus"><br>

          <label for="ammatti">Ammatti/Tehtävä:</label><br>
          <input type="text" id="huoltajaammatti" name="huoltajaammatti" placeholder="Ammatti/Tehtävä"><br>

          <label for="tyo">Nykyinen työ-/opiskelupaikka:</label><br>
          <input type="text" id="huoltajatyo" name="huoltajatyo" placeholder="Nykyinen työ-/opiskelupaikka"><br>


          <label for="tyo">puhelinnumero:</label><br>
          <input type="text" id="huoltajapuhelin" name="huoltajapuhelin" placeholder="puhelinnumero"><br>

          <label for="taika">Työaika esim(7:00-15:00):</label><br>
          <input type="text" id="huoltajatyoaika" name="huoltajatyoaika" placeholder="Työaika"><br>

          <label for="tosoite">Työpaikan osoite ja puhelin:</label><br>
          <input type="text" id="huoltajatyoosoite" name="huoltajatyoosoite" placeholder="Työpaikan osoite ja puhelin"><br>

          <label for="sposti">Sähköposti:</label><br>
          <input type="text" id="huoltajasahkoposti" name="huoltajasahkoposti" placeholder="Sähköposti"><br>
  <hr class="style-two">



          <h3> Puoliso/avopuoliso </h3>

          <label for="enimi">Etunimi:</label><br>
          <input type="text" id="puolisoetunimi" name="puolisoetunimi" placeholder="Etunimi"><br>

          <label for="snimi">Sukunimi:</label><br>
          <input type="text" id="puolisosukunimi" name="puolisosukunimi" placeholder="Sukunimi"><br>

          <label for="htunnus">Henkilötunnus:</label><br>
          <input type="text" id="puolisohenkilotunnus" name="puolisohenkilotunnus" placeholder="Henkilotunnus"><br>

          <label for="ammatti">Ammatti/Tehtävä:</label><br>
          <input type="text" id="puolisoammatti" name="puolisoammatti" placeholder="Ammatti/Tehtävä"><br>

          <label for="tyo">Nykyinen työ-/opiskelupaikka:</label><br>
          <input type="text" id="puolisotyo" name="puolisotyo" placeholder="Nykyinen työ-/opiskelupaikka"><br>

          <label for="taika">Työaika esim(7:00-15:00):</label><br>
          <input type="text" id="puolisotyoaika" name="puolisotyoaika" placeholder="Työaika"><br>

          <label for="tosoite">Työpaikan osoite ja puhelin:</label><br>
          <input type="text" id="puolisotyoosoite" name="puolisotyoosoite" placeholder="Työpaikan osoite ja puhelin"><br>

          <label for="sposti">Sähköposti:</label><br>
          <input type="text" id="puolisosähköposti" name="puolisosähköposti" placeholder="Sähköposti"><br>

          <label for="perhesuhde">Perhesuhde</label><br>
          <select id="perhesuhde" name="perhesuhde">
            <option disabled selected value="valitse">Valitse</option>
            <option value="naimaton">Naimaton</option>
            <option value="avioliitossa">Avioliitossa</option>
            <option value="avoliitossa">Avoliitossa</option>
            <option value="leski">Leski</option>
            <option value="asumuserossa">Asumuserossa</option>
            <option value="eronnut">Eronnut</option>
            <option value="muuhuoltaja">Muu huoltaja</option>
          </select><br>

    <hr class="style-two">

            <h2> Toivottu päivähoitomuoto </h2>

            <select id="paivahoitomuoto" name="paivahoitomuoto">
              <option selected value="valitse">Valitse</option>
              <option value="kokopv">Kokopäivähoito</option>
              <option value="15pv">Max 15pv/kk</option>
              <option value="10pv">Max 10pv/kk</option>
            </select><br>
            <hr class="style-two">

            <h2> Toivottu hoitoaika </h2>

            <label for="alkpv">Hoidon tarpeen alkamispäivä:</label><br>
            <input type="text" id="alkamispaiva" name="alkamispaiva" placeholder="Alkamispäivä"><br>

            <label for="hoitopvlukum">Hoitopäivien lukumäärä/kk:</label><br>
            <input type="text" id="hoitopvlukum" name="hoitopvlukum" placeholder="Hoitopäivät"><br>

            <label for="hoitoaika">Päivittäinen hoitoaika:</label><br>
            <input type="text" id="hoitoaika" name="hoitoaika" placeholder="Päivittäinen hoitoaika"><br>
            <hr class="style-two">

            <h2> Perheen muut lapset </h2>

            <label for="muutlapset">Kotona asuvien alle 18-vuotiaiden lasten nimet, syntymäajat sekä alle kouluikäisten päivähoitopaikat:</label><br>
            <textarea name="muutlapset" rows="8" cols="100">
            </textarea><br>

            <h2> Lapsen terveydentila</h2>
            <label for="">Saako tarvittaessa olla yhteydessä päivähoidon eri yhteistyötahojen (kuten neuvolan) kanssa lapsen kehitystä ja terveyttä koskevissa asioissa:</label><br>
            <label><input type="radio" id="kylla" name="neuvolayhteys" checked="checked" value="Kyllä" /> Kyllä </label><br>
            <label>  <input type="radio" id="ei" name="neuvolayhteys" value="Ei" />Ei</label><br>

            <label for="neuvola">Mitä lastenneuvolaa olette viimeksi käyttänyt, osoite:</label><br>
            <input type="text" id="neuvola" name="neuvola" oninvalid="this.setCustomValidity('Täytä tämä kohta')"><br>

            <label for="sairaudet">Sairaudet, allergiat, ruokavalio ym</label><br>
            <textarea id="sairaudut" name="sairaudet" rows="8" cols="100"></textarea><br>

            <label for="sairaalahoidot">Onko lapsi ollut sairaalahoidossa tai jatkuvassa lääkärinhoidossa, milloin ja miksi?</label><br>
            <textarea name"sairaalahoidot" rows="8" cols="100"></textarea><br>


            <label for="lisatiedot">Lisätiedot hakemuksen perusteeksi:</label><br>
            <textarea id="lisatiedot" name"lisatiedot" rows="8" cols="100"></textarea><br>




            <input type="submit" value="submit">





      </form>
    </div>
  </section>

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

    <footer>
      <p>Päiväkotiyhdistys Pirtti ry, Copyright &copy; 2017</p>
    </footer>
  </body>
</html>
