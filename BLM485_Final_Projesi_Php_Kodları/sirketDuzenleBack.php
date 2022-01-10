<?php

$ad = $_GET['ad'];
$adres = $_GET['adres'];
$did = $_GET['did'];

require_once('db.php');

if(mysqli_connect_errno()){
	echo"Failed to connect to MySQL:".mysqli_connect_error(); 

} else {
	
	$sql = "UPDATE sirketler SET SirketlerAd='$ad', SirketlerAdres='$adres' WHERE idSirketler=$did ";
	
	if (mysqli_query($con, $sql)) {
		header("Location:adminProfil.php");
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}

	
}

?>