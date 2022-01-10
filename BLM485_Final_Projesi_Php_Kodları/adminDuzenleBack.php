<?php

$ad = $_GET['ad'];
$email = $_GET['email'];
$sifre = $_GET['sifre'];
$adminid = $_GET['adminid'];
$direktorlukler = $_GET['direktorlukler'];
require_once('db.php');

if(mysqli_connect_errno()){
	echo"Failed to connect to MySQL:".mysqli_connect_error(); 

} else {
	
	$sql = "UPDATE admin SET adminAd='$ad', adminSifre='$sifre', adminEmail='$email', adminSirket='$direktorlukler' WHERE idadmin=$adminid ";
	
	if (mysqli_query($con, $sql)) {
		header("Location:adminProfil.php");
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}

	
}

?>