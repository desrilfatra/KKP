<?php
	@session_start();
	$_SESSION['judul'] = 'SPK Rumah Tinggal';
	$_SESSION['welcome'] = 'SISTEM PENDUKUNG KEPUTUSAN LOKASI PENDIRIAN RUMAH TINGGAL BERBASIS WEB DENGAN METODE NAIVE BAYES CLASSIFIER PADA PT. BETAWI JAYA MANDIRI';
	$_SESSION['by'] = 'KKP 2020';
	$mysqli = new mysqli('localhost','root','','bayes');
	if($mysqli->connect_errno){
		echo $mysqli->connect_errno." - ".$mysqli->connect_error;
		exit();
	}
?>
