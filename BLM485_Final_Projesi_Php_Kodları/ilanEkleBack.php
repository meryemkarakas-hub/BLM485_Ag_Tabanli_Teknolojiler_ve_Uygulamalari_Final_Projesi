<?php

$ilanadi = $_GET['ilanadi'];
$aciklama = $_GET['aciklama'];
$bolumu = $_GET['bolumu'];
$direktorlukler = $_GET['direktorlukler'];
$minsinif = $_GET['minsinif'];
$minort = $_GET['minort'];
$son = $_GET['son'];
$date = date('d-m-Y');
require_once('db.php');

if(mysqli_connect_errno()){
	echo"Failed to connect to MySQL:".mysqli_connect_error(); 

} else {
	
	$sql = "INSERT INTO ilanlar  (sirketid, ilanad, aciklama,bolum,minSinif,minOrt,yayinTarihi,sonBasvuru) VALUES ('$direktorlukler','$ilanadi','$aciklama','$bolumu','$minsinif','$minort','$date','$son')";
	
	if (mysqli_query($con, $sql)) {
		header("Location:adminProfil.php");
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}

	
}

?>