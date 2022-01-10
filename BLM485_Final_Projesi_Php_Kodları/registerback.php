<?php 


require_once('db.php');

if(mysqli_connect_errno()){
	echo"Failed to connect to MySQL:".mysqli_connect_error(); 

} else {
	$ad = $_GET['ad'];
	$email = $_GET['email'];
	$okul = $_GET['okul'];
	$sinif = $_GET['sinifi'];
	$dtarihi = $_GET['dtarihi'];
	$cinsiyet = $_GET['cinsiyet'];
	$ort = $_GET['ort'];
	$sifre = $_GET['sifre'];
	$tc = $_GET['tc'];
	$bolum=$_GET['bolum'];

	
	$sql = "INSERT INTO isArayan  (idisArayanTc, isArayanOrt, isArayanAdi, isArayanCinsiyet, isArayanOkul, isArayanEmail, isArayanSifre, isArayanSinif, isArayanDogumTarihi,isArayanBolum)
	VALUES ('$tc', '$ort', '$ad', '$cinsiyet', '$okul', '$email' , '$sifre' , '$sinif' , '$dtarihi','$bolum' )";

if (mysqli_query($con, $sql)) {
   header("Location:login.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

	
}



?>