<?php

	$lapsietunimi = $_POST['lapsietunimi'];
	$lapsisukunimi = $_POST['lapsisukunimi'];
	$lapsihenkilotunnus = $_POST['lapsihenkilotunnus'];
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
	$puolisosukunimi = $_POST['puolisosukunimi'];
	$puolisohenkilotunnus = $_POST['puolisohenkilotunnus'];
	$puolisoammatti = $_POST['puolisoammatti'];
	$puolisotyo = $_POST['puolisotyo'];
	$puolisotyoaika = $_POST['puolisotyoaika'];
	$puolisotyoosoite = $_POST['puolisotyoosoite'];
	$puolisosähköposti = $_POST['puolisosähköposti'];
	$perhesuhde = $_POST['perhesuhde'];
	$paivahoitomuoto = $_POST['paivahoitomuoto'];
	$alkamispaiva = $_POST['alkamispaiva'];
	$hoitopvlukum = $_POST['hoitopvlukum'];
	$hoitoaika = $_POST['hoitoaika'];
	$muutlapset = $_POST['muutlapset'];
	$neuvolayhteys = $_POST['neuvolayhteys'];
	$neuvola = $_POST['neuvola'];
	$sairaudet = $_POST['sairaudet'];
	$sairaalahoidot = $_POST['sairaalahoidot'];
	$lisatiedot = $_POST['lisatiedot'];
	$message =

 "Lapsen etunimet: $lapsietunimi "
	.PHP_EOL.	"Lapsen sukunimi:   $lapsisukunimi"
	.PHP_EOL. "Lapsen henkilötunnus:   $lapsihenkilotunnus"
	.PHP_EOL. "Lapsen äidinkieli:   $lapsiaidinkieli"
	.PHP_EOL. "Onko kotona lemmikkieläimiä:   $lemmikkeja"
	.PHP_EOL. PHP_EOL. PHP_EOL.
	PHP_EOL. "Huoltajan etunimi:   $huoltajaetunimi"
	.PHP_EOL. "Huoltajan sukunimi:   $huoltajasukunimi"
	.PHP_EOL. "Huoltajan henkilotunnus:   $huoltajahenkilotunnus"
	.PHP_EOL. "Huoltajan ammatti:   $huoltajaammatti"
	.PHP_EOL. "Huoltajan työ:   $huoltajatyo"
	.PHP_EOL. "Huoltajan työaika:   $huoltajatyoaika"
	.PHP_EOL. "Huoltajan työpaikan osoite ja puhelinnumero:   $huoltajatyoosoite"
	.PHP_EOL. "Huoltajan sähköposti:   $huoltajasahkoposti"
	.PHP_EOL. PHP_EOL. PHP_EOL.
	PHP_EOL. "Puolison etunimi:   $puolisoetunimi"
	.PHP_EOL. "Puolison sukunimi:   $puolisosukunimi"
	.PHP_EOL. "Puolison henkilotunnus:   $puolisohenkilotunnus"
	.PHP_EOL. "Puolison työ:   $puolisotyo"
	.PHP_EOL. "Puolison työaika:   $puolisotyoaika"
	.PHP_EOL. "Puolison työpaikan osoite ja puhelinnumero:   $puolisotyoosoite"
	.PHP_EOL. "Puolison sähköposti:   $puolisosähköposti"
	.PHP_EOL. "Perhesuhde:   $perhesuhde"
	.PHP_EOL. PHP_EOL. PHP_EOL.
	PHP_EOL. "Toivottu päivähoitomuoto:   $paivahoitomuoto"
	.PHP_EOL. PHP_EOL. PHP_EOL.
	PHP_EOL. "Toivottu alkamispäivä:   $alkamispaiva"
	.PHP_EOL. "Hoitopäivien lukumäärä/kk:   $hoitopvlukum"
	.PHP_EOL. "Päivittäinen hoitoaika:   $hoitoaika"
	.PHP_EOL. PHP_EOL. PHP_EOL.
	PHP_EOL. "Kotona asuvien alle 18-vuotiaiden lasten nimet, syntymäajat sekä alle kouluikäisten päivähoitopaikat:   $muutlapset"
	.PHP_EOL. PHP_EOL. PHP_EOL.
	PHP_EOL. "Saako tarvittaessa olla yhteydessä päivähoidon eri yhteistyötahojen (kuten neuvolan) kanssa lapsen kehitystä ja terveyttä koskevissa asioissa::   $neuvolayhteys"
	.PHP_EOL. "Mitä lastenneuvolaa olette viimeksi käyttänyt, osoite:   $neuvola"
	.PHP_EOL. "Sairaudet, allergiat, ruokavalio ym:   $sairaudet"
	.PHP_EOL. "Onko lapsi ollut sairaalahoidossa tai jatkuvassa lääkärinhoidossa, milloin ja miksi?:   $sairaalahoidot"
	.PHP_EOL. "Lisätiedot hakemuksen perusteeksi:   $lisatiedot"
	.PHP_EOL. PHP_EOL. PHP_EOL.
	PHP_EOL. "Älä vastaa tähän viestiin!";

	if($lapsietunimi==''){
	echo "<script>alert('Virhe! Tarkista hakemus!')</script>";
	exit();
	}else{
		$headers = 'From: noreply@pirtti.com' . "\r\n" .
						    'Reply-To: noreply@pirtti.com' . "\r\n" .
						    'X-Mailer: PHP/' . phpversion();
	mail('juho.pirila@outlook.com', 'Paivahoitohakemus - Moision päiväkoti',$message, $headers);



	echo "Päivähoitohakemus Moision päiväkotiin lähetetty!";
	    header( "Refresh:1; url=Paivahoitohakemus.html", true, 1);



}
?>
<html>
<head>
	<meta http-equiv="refresh" content="1;url=paivahoitohakemus.html">
</head>
</html>
