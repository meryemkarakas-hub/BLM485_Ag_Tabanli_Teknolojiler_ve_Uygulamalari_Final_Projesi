<?php

$ad = $_GET['ad'];
$email = $_GET['email'];
$sifre = $_GET['sifre'];
$okul = $_GET['okul'];
$bolumu = $_GET['bolumu'];
$sinifi = $_GET['sinifi'];
$dtarihi = $_GET['dtarihi'];
$cinsiyet = $_GET['cinsiyet'];
$ort = $_GET['ort'];

session_start();
$mail = $_SESSION['isim'];

require_once('db.php');

if(mysqli_connect_errno()){
	echo"Failed to connect to MySQL:".mysqli_connect_error(); 

} else {
	
	$sql1 = "SELECT * FROM isarayan WHERE isArayanEmail = '$mail' ";
	$result = mysqli_query($con, $sql1);
	if (mysqli_num_rows($result) > 0) {
									
		while($row = mysqli_fetch_assoc($result)) {
			$tc = $row["idisArayanTc"];
		}
	}
	
	$sql = "UPDATE isarayan SET isArayanAdi='$ad', isArayanCinsiyet='$cinsiyet', isArayanOrt='$ort', isArayanOkul='$okul',isArayanEmail='$email',isArayanSifre='$sifre', isArayanSinif='$sinifi',isArayanDogumTarihi='$dtarihi',isArayanBolum='$bolumu' WHERE idisArayanTc=$tc ";
	
	if (mysqli_query($con, $sql)) {
		header("Location:profil.php");
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}

	
}

?>