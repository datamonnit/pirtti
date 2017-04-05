<?php

	$lapsietunimi = $_POST['lapsietunimi'];
	$lapsisukunimi = $_POST['lapsisukunimi'];
	$lapsihenkilotunnus = $_POST['lapsihenkilotunnus'];
	$lapsiaidinkieli = $_POST['lapsiaidinkieli'];
	$lemmikkeja = $_POST['lemmikkeja'];
	$huoltajaetunimi = $_POST['huoltajaetunimi'];
	$huoltajasukunimi = $_POST['huoltajasukunimi'];
	$huoltajahenkilotunnus = $_POST['huoltajahenkilotunnus']
	$message =
 "Lapsen etunimet: $lapsietunimi $sukunimi "
	.PHP_EOL.	"Lapsen sukunimi: $lapsisukunimi"
	.PHP_EOL. "Lapsen henkilötunnus: $lapsihenkilotunnus"
	.PHP_EOL. "Lapsen äidinkieli: $lapsiaidinkieli"
	.PHP_EOL. "Onko kotona lemmikkieläimiä: $lemmikkeja"
	.PHP_EOL. PHP_EOL. PHP_EOL. PHP_EOL. PHP_EOL.
	PHP_EOL. "Huoltajan etunimi: $huoltajaetunimi"
	.PHP_EOL. "Huoltajan sukunimi: $huoltajasukunimi";
	.PHP_EOL. "Huoltajan sukunimi: $huoltajahenkilotunnus";




	if($lapsietunimi==''){
	echo "<script>alert('Some of the fields are empty')</script>";
	exit();
	}else{
		$headers = 'From: noreply@pirtti.com' . "\r\n" .
						    'Reply-To: oreply@pirtti.com' . "\r\n" .
						    'X-Mailer: PHP/' . phpversion();
	mail('juho.pirila@outlook.com', 'Paivahoitohakemus',$message, $headers);


	echo "<center><h1>Päivähoitohakemus lähetetty!</h1></center>";


}
?>
