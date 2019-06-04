<?php
	include_once('config.php');

	$pvm = time();

	$paivakoti = $_POST['paivakoti'];
	$lapsietunimi = $_POST['lapsietunimi'];
	$lapsisukunimi = $_POST['lapsisukunimi'];
	$lapsihenkilotunnus = $_POST['lapsihenkilotunnus'];
  $lapsiosoite = $_POST['lapsiosoite'];
  $lapsikotikunta = $_POST['lapsikotikunta'];
  $puhkoti = $_POST['puhkoti'];
	$lapsiaidinkieli = $_POST['lapsiaidinkieli'];
	$lemmikkeja = $_POST['lemmikkeja'];
	$huoltajaetunimi = $_POST['huoltajaetunimi'];
	$huoltajasukunimi = $_POST['huoltajasukunimi'];
	$huoltajahenkilotunnus = $_POST['huoltajahenkilotunnus'];
	$huoltajaammatti = $_POST['huoltajaammatti'];
	$huoltajatyo = $_POST['huoltajatyo'];
	$huoltajatyoaika = $_POST['huoltajatyoaika'];
	$huoltajatyoosoite = $_POST['huoltajantyoosoite'];
	$huoltajasahkoposti = $_POST['huoltajasahkoposti'];
	$puolisoetunimi = $_POST['puolisoetunimi'];
	$puolisohenkilotunnus = $_POST['puolisohenkilotunnus'];
	$puolisoammatti = $_POST['puolisoammatti'];
	$puolisotyo = $_POST['puolisotyo'];
	$puolisotyoaika = $_POST['puolisotyoaika'];
	$puolisotyoosoite = $_POST['puolisotyoosoite'];
	$puolisosähköposti = $_POST['puolisosähköposti'];
	$perhesuhde = (isset($_POST['perhesuhde'])) ? $_POST['perhesuhde'] : "";
  $paivahoidontarve = $_POST['paivahoidontarve'];
	$alkamispaiva = $_POST['alkamispaiva'];
	$hoitopvlukum = $_POST['hoitopvlukum'];
	$hoitoaika = $_POST['hoitoaika'];
  $kuljetustarve = $_POST['kuljetustarve'];
	$muutlapset = $_POST['muutlapset'];
	$neuvolayhteys = $_POST['neuvolayhteys'];
	$neuvola = $_POST['neuvola'];
	$sairaudet = $_POST['sairaudet'];
	$sairaalahoidot = (isset($_POST['sairaalahoidot'])) ? $_POST['sairaalahoidot'] : "";
	$lisatiedot = (isset($_POST['lisatiedot'])) ? $_POST['lisatiedot'] : "";
	$message =

						"Päiväkoti: $paivakoti"
	.PHP_EOL.	"Lapsen etunimet: $lapsietunimi "
	.PHP_EOL.	"Lapsen sukunimi:   $lapsisukunimi"
	.PHP_EOL.	"Lapsen henkilötunnus:   $lapsihenkilotunnus"
  .PHP_EOL.	"Lähiosoite, postinumero ja postitoimipaikka: $lapsiosoite"
  .PHP_EOL.	"Kotikunta: $lapsikotikunta"
  .PHP_EOL.	"Puhelin kotiin: $puhkoti"
	.PHP_EOL.	"Lapsen äidinkieli:   $lapsiaidinkieli"
	.PHP_EOL.	"Onko kotona lemmikkieläimiä:   $lemmikkeja"
	.PHP_EOL. PHP_EOL. PHP_EOL.

	$message .=
	PHP_EOL.	"Huoltajan etunimi:   $huoltajaetunimi"
	.PHP_EOL.	"Huoltajan sukunimi:   $huoltajasukunimi"
	.PHP_EOL.	"Huoltajan henkilotunnus:   $huoltajahenkilotunnus"
	.PHP_EOL.	"Huoltajan ammatti:   $huoltajaammatti"
	.PHP_EOL.	"Huoltajan työ:   $huoltajatyo"
	.PHP_EOL.	"Huoltajan työaika:   $huoltajatyoaika"
	.PHP_EOL.	"Huoltajan työpaikan osoite ja puhelinnumero:   $huoltajatyoosoite"
	.PHP_EOL.	"Huoltajan sähköposti:   $huoltajasahkoposti"
	.PHP_EOL. PHP_EOL. PHP_EOL.

	$message .=
	PHP_EOL.	"Puolison etunimi:   $puolisoetunimi"
	.PHP_EOL.	"Puolison sukunimi:   $puolisosukunimi"
	.PHP_EOL.	"Puolison henkilotunnus:   $puolisohenkilotunnus"
	.PHP_EOL.	"Puolison työ:   $puolisotyo"
	.PHP_EOL.	"Puolison työaika:   $puolisotyoaika"
	.PHP_EOL.	"Puolison työpaikan osoite ja puhelinnumero:   $puolisotyoosoite"
	.PHP_EOL.	"Puolison sähköposti:   $puolisosähköposti"
	.PHP_EOL.	"Perhesuhde:   $perhesuhde"
	.PHP_EOL. PHP_EOL. PHP_EOL.

	$message .=
  PHP_EOL.	"Päivähoidon tarve: $paivahoidontarve"
	.PHP_EOL.	"Toivottu alkamispäivä:   $alkamispaiva"
	.PHP_EOL.	"Hoitopäivien lukumäärä/kk:   $hoitopvlukum"
	.PHP_EOL.	"Päivittäinen hoitoaika:   $hoitoaika"
	.PHP_EOL. PHP_EOL. PHP_EOL.
  PHP_EOL.	"Kuljetuksen tarve: $kuljetustarve"
  .PHP_EOL. PHP_EOL. PHP_EOL.
	PHP_EOL.	"Kotona asuvien alle 18-vuotiaiden lasten nimet, syntymäajat sekä alle kouluikäisten päivähoitopaikat:   $muutlapset"
	.PHP_EOL. PHP_EOL. PHP_EOL.
	PHP_EOL.	"Saako tarvittaessa olla yhteydessä päivähoidon eri yhteistyötahojen (kuten neuvolan) kanssa lapsen kehitystä ja terveyttä koskevissa asioissa::   $neuvolayhteys"
	.PHP_EOL.	"Mitä lastenneuvolaa olette viimeksi käyttänyt, osoite:   $neuvola"
	.PHP_EOL.	"Sairaudet, allergiat, ruokavalio ym:   $sairaudet"
	.PHP_EOL.	"Onko lapsi ollut sairaalahoidossa tai jatkuvassa lääkärinhoidossa, milloin ja miksi?:   $sairaalahoidot"
	.PHP_EOL.	"Lisätiedot hakemuksen perusteeksi:   $lisatiedot"
	.PHP_EOL. PHP_EOL. PHP_EOL.
	PHP_EOL.	"Älä vastaa tähän viestiin!";

	$hash = md5($paivakoti.$huoltajasahkoposti.$huoltajapuhelin.$pvm);

	$message .= PHP_EOL. "Kuittaa hakemus luetuksi: " . $http_host  ."verify2.php?email=$huoltajasahkoposti&hash=$hash";


	if (true === false){
		echo "<script>alert('Hakemuksen lähettämisessä tapahtui virhe! Yritä uudelleen!')</script>";
		exit();
	} else {
		// kantaan
		require('db.php');
	// INSERT esiopetushakemus (paivakoti, huoltajasahkoposti, huoltajapuhelin, hakumuspvm)

	$sql = "INSERT INTO esiopetushakemus (paivakoti, huoltajasahkoposti, huoltajapuhelin, pvm, hash) VALUES ('$paivakoti', '$huoltajasahkoposti', '$huoltajapuhelin',  DATE(NOW()), '$hash')" ;
	if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// sähköpostiin
		$headers = 'From: paivahoitohakemus@pirtti.com' . "\r\n" .
						    'Reply-To: noreply@pirtti.com' . "\r\n" .
						    'X-Mailer: PHP/' . phpversion();
	mail('pkpirttiry@surffi.fi', 'Paivahoitohakemus | Pirtti',$message, $headers);
	echo "Esiopetushakemus lähetetty!";
header( "Refresh:1; url=kiitos.php", true, 5);



}
$conn->close();
?>
<html>

</html>
