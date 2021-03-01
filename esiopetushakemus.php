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
    <title>Päiväkoti Pirtti | Esiopetushakemus</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/slider.css">

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

    .paivahoitohakemus {
      margin: auto;
      max-width: 50vw;
        border-radius: 2px;
        background-color: #f2f2f2;
        padding: 15px;
        margin-bottom: 500px;
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
  .paivahoitohakemus {
    margin: auto;
    max-width: 100%;
      border-radius: 2px;
      background-color: #f2f2f2;
      padding: 15px;
      padding-top: 20px;
      margin-bottom: 500px;

  }


     }


    </style>
  </head>

  <body>
  <button onclick="topFunction()" id="myBtn">Ylös</button>

    <?php include 'header.php';?>

    <hr class="style-two">
  <section class="hakemus">
    <div class="paivahoitohakemus">
      <form action="esiopetushakemussend.php" method="POST">

<!-- Lapsen Henkilötiedot -->
<h1> Esiopetushakemus </h1> <br>

        <h2> Lapsen henkilötiedot </h2>

        <label for="enimi">Etunimet:</label><br>
        <input type="text" id="lapsietunimet" name="lapsietunimi" placeholder="Etunimet"><br>

        <label for="snimi">Sukunimi:</label><br>
        <input type="text" id="lapsisukunimi" name="lapsisukunimi" placeholder="Sukunimi"><br>

        <label for="htunnus">Henkilötunnus:</label><br>
        <input type="text" id="lapsihenkilotunnus" name="lapsihenkilotunnus" placeholder="Henkilötunnus"><br>


        <label for="osoite">Lähiosoite, postinumero ja postitoimipaikka:</label><br>
        <input type="text" id="lapsiosoite" name="lapsiosoite" placeholder="Lähiosoite, postinumero ja postitoimipaikka"><br>

        <label for="kotikunta">Kotikunta:</label><br>
        <input type="text" id="lapsikotikunta" name="lapsikotikunta" placeholder="kotikunta"><br>

        <label for="akieli">Äidinkieli:</label><br>
          <select onchange="yesnoCheck(this);" id="lapsiaidinkieli" name="lapsiaidinkieli">
            <option disabled="" selected value="valitse">Valitse</option>
            <option value="suomi">Suomi</option>
            <option value="ruotsi">Ruotsi</option>
            <option value="other">Muu, mikä?</option>
          </select><br>
          <div id="ifYes" style="display: none;">
          <input type="text" id="lapsiaidinkieli" name="lapsiaidinkieli" placeholder="Muu, mikä?"/><br />
</div>
<script>

</script>

        <label for="lemmikkeja">Onko kotonasi lemmikkieläimiä:</label><br>
          <select onchange="yesnoCheck2(this);" id="lemmikkeja" name="lemmikkeja">
            <option disabled="" selected value="valitse">Valitse</option>
            <option value="ei">Ei</option>
            <option value="muu">On, mikä?</option>
          </select><br>
          <div id="Yes" style="display: none;">
          <input type="text" id="lemmikkeja" name="lapsiaidinkieli" placeholder="On, mikä?"/><br />
          </div>


  <hr class="style-two">
  <h2> Huoltajien henkilötiedot </h2>

  <label for="enimi">Etunimi:</label><br>
  <input type="text" id="huoltajaetunimi" name="huoltajaetunimi" placeholder="Etunimi"><br>

  <label for="snimi">Sukunimi:</label><br>
  <input type="text" id="huoltajasukunimi" name="huoltajasukunimi" placeholder="Sukunimi"><br>

  <label for="ammatti">Ammatti/Tehtävä:</label><br>
  <input type="text" id="huoltajaammatti" name="huoltajaammatti" placeholder="Ammatti/Tehtävä"><br>

  <label for="tyo">Nykyinen työ-/opiskelupaikka:</label><br>
  <input type="text" id="huoltajatyo" name="huoltajatyo" placeholder="Nykyinen työ-/opiskelupaikka"><br>

  <label for="tyo">Puhelinnumero:</label><br>
  <input type="text" id="huoltajapuhelin" name="huoltajapuhelin" placeholder="Puhelinnumero"><br>

  <label for="taika">Työaika esim(7:00-15:00):</label><br>
  <input type="text" id="huoltajatyoaika" name="huoltajatyoaika" placeholder="Työaika"><br>

  <label for="sposti">Sähköposti:</label><br>
  <input type="text" id="huoltajasahkoposti" name="huoltajasahkoposti" placeholder="Sähköposti"><br>
<hr class="style-two">

<h3> Puoliso/avopuoliso </h3>

<label for="enimi">Etunimi:</label><br>
<input type="text" id="puolisoetunimi" name="puolisoetunimi" placeholder="Etunimi"><br>

<label for="snimi">Sukunimi:</label><br>
<input type="text" id="puolisosukunimi" name="puolisosukunimi" placeholder="Sukunimi"><br>

<label for="ammatti">Ammatti/Tehtävä:</label><br>
<input type="text" id="puolisoammatti" name="puolisoammatti" placeholder="Ammatti/Tehtävä"><br>

<label for="tyo">Nykyinen työ-/opiskelupaikka:</label><br>
<input type="text" id="puolisotyo" name="puolisotyo" placeholder="Nykyinen työ-/opiskelupaikka"><br>

<label for="taika">Työaika esim(7:00-15:00):</label><br>
<input type="text" id="puolisotyoaika" name="puolisotyoaika" placeholder="Työaika"><br>

<label for="sposti">Sähköposti:</label><br>
<input type="text" id="puolisosähköposti" name="puolisosähköposti" placeholder="Sähköposti"><br>

<label for="perhesuhde">Perhesuhde:</label><br>
<select id="perhesuhde" name="perhesuhde">
  <option disabled="" selected value="valitse">Valitse</option>
  <option value="naimaton">Naimaton</option>
  <option value="avioliitossa">Avioliitossa</option>
  <option value="avoliitossa">Avoliitossa</option>
  <option value="leski">Leski</option>
  <option value="asumuserossa">Asumuserossa</option>
  <option value="eronnut">Eronnut</option>
  <option value="muuhuoltaja">Muu huoltaja</option>
</select><br>

<hr class="style-two">

        <h2> Varhaiskasvatuksen tarve </h2>
        <select id="paivahoidontarve" name="paivahoidontarve">
          <option disabled="" selected value="valitse">Valitse</option>
          <option value="kokopv">Pelkkä esiopetus, ei varhaiskasvatuksen tarvetta</option>
          <option value="15pv">Esiopetus ja enintään 5h/pv varhaiskasvatus</option>
        </select><br>


        <hr class="style-two">

        

       <h2> Kuljetuksen tarve </h2>
        <select id="kuljetustarve" name="kuljetustarve">
          <option disabled="" selected value="valitse">Valitse</option>
          <option value="ei tarvitse">Lapsi ei tarvitse kuljetusta</option>
          <option value="tarvitsee">Lapsi tarvitsee kuljetuksen</option>
        </select><br>

        <h2> Perheen muut lapset </h2>

        <label for="muutlapset">Kotona asuvien alle 18-vuotiaiden lasten nimet, syntymäajat sekä alle kouluikäisten päivähoitopaikat:</label><br>
        <textarea name="muutlapset" rows="8" cols="100">
        </textarea><br>
<hr class="style-two">
        <h2> Lapsen terveydentila</h2>
        <label for="">Saako tarvittaessa olla yhteydessä päivähoidon eri yhteistyötahojen (kuten neuvolan) kanssa lapsen kehitystä ja terveyttä koskevissa asioissa:</label><br>
        <label><input type="radio" id="kylla" name="neuvolayhteys" checked="checked" value="Kyllä" /> Kyllä </label><br>
        <label>  <input type="radio" id="ei" name="neuvolayhteys" value="Ei" />Ei</label><br>

        <label for="neuvola">Mitä lastenneuvolaa olette viimeksi käyttänyt, osoite:</label><br>
        <input type="text" id="neuvola" name="neuvola" oninvalid="this.setCustomValidity('Täytä tämä kohta')"><br>

        <label for="sairaudet">Sairaudet, allergiat, ruokavalio ym</label><br>
        <textarea name="sairaudet" rows="8" cols="100"></textarea><br>

        <label for="sairaalahoidot">Onko lapsi ollut sairaalahoidossa tai jatkuvassa lääkärinhoidossa, milloin ja miksi?</label><br>
        <textarea name="sairaalahoidot" rows="8" cols="100"></textarea><br>


        <label for="lisatiedot">Lisätiedot hakemuksen perusteeksi:</label><br>
        <textarea name="lisatiedot" rows="8" cols="100"></textarea><br>

        <input type="submit" value="Lähetä">
      </form>


    </div>
  </section>

  <script>
// Muu, mikä -kenttien näyttäminen/piilotaminen
  function yesnoCheck(that) {
      if (that.value == "other") {

          document.getElementById("ifYes").style.display = "block";
      } else {
          document.getElementById("ifYes").style.display = "none";
      }
  }

  function yesnoCheck2(that) {
    if (that.value == "muu") {

        document.getElementById("Yes").style.display = "block";
    } else {
        document.getElementById("Yes").style.display = "none";
    }
}  


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
