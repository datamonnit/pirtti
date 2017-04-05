<?php

	$lapsietunimi = $_POST['lapsietunimi'];
	$lapsisukunimi = $_POST['lapsisukunimi'];
	$lapsihenkilotunnus = $_POST['lapsihenkilotunnus'];
	$message =
 "Lapsen etunimet: $lapsietunimi $sukunimi "
	.PHP_EOL.	"Lapsen sukunimi $lapsisukunimi"
	.PHP_EOL. "Lapsen henkilötunnus $lapsihenkilotunnus";

	if($lapsietunimi==''){
	echo "<script>alert('Some of the fields are empty')</script>";
	exit();
	}else{
		$headers = 'From: paivahoitohakemus@pirtti.com' . "\r\n" .
						    'Reply-To: webmaster@example.com' . "\r\n" .
						    'X-Mailer: PHP/' . phpversion();
	mail('juho.pirila@outlook.com', $lapsietunimi,$message, $headers);
	echo "<center><h1>Feedback sent successfully!</h1></center>";


}
?>
