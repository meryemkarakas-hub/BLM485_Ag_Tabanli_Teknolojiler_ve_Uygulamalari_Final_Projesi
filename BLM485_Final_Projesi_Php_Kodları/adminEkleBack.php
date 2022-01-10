<?php

$ad = $_GET['ad'];
$email = $_GET['email'];
$sifre = $_GET['sifre'];
$direktorlukler = $_GET['direktorlukler'];
require_once('db.php');

if(mysqli_connect_errno()){
	echo"Failed to connect to MySQL:".mysqli_connect_error(); 

} else {
	
	$sql = "INSERT INTO admin  (adminAd, adminSifre, adminEmail,adminSirket) VALUES ('$ad','$sifre','$email','$direktorlukler')";
	
	if (mysqli_query($con, $sql)) {
		header("Location:adminProfil.php");
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}

	
}

?>