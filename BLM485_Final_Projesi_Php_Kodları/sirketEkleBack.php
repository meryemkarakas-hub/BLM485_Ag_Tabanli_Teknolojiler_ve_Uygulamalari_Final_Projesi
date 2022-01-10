<?php

$ad = $_GET['ad'];
$adres = $_GET['adres'];

require_once('db.php');

if(mysqli_connect_errno()){
	echo"Failed to connect to MySQL:".mysqli_connect_error(); 

} else {
	
	$sql = "INSERT INTO sirketler  (SirketlerAd, SirketlerAdres) VALUES ('$ad','$adres')";
	
	if (mysqli_query($con, $sql)) {
		header("Location:adminProfil.php");
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}

	
}

?>