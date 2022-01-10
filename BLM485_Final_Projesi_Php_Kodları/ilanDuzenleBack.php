<?php

$ilanadi = $_GET['ilanadi'];
$aciklama = $_GET['aciklama'];
$bolumu = $_GET['bolumu'];
$direktorlukler = $_GET['direktorlukler'];
$minsinif = $_GET['minsinif'];
$minort = $_GET['minort'];
$son = $_GET['son'];
$did = $_GET['did'];
require_once('db.php');

if(mysqli_connect_errno()){
	echo"Failed to connect to MySQL:".mysqli_connect_error(); 

} else {
	
	$sql = "UPDATE ilanlar SET ilanad='$ilanadi', aciklama='$aciklama', bolum='$bolumu', minSinif='$minsinif',minOrt='$minort',sonBasvuru='$son' WHERE ilanid=$did ";
	
	if (mysqli_query($con, $sql)) {
		header("Location:adminProfil.php");
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}

	
}

?>