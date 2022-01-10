<?php 
session_start();
$ad = $_SESSION['isim'];
$id = $_GET['id'];
$date = date('d-m-Y');
require_once('db.php');

if(mysqli_connect_errno()){
	echo"Failed to connect to MySQL:".mysqli_connect_error(); 

} else {
	$sorgu =mysqli_query($con ,"SELECT * FROM isarayan WHERE isArayanEmail = '$ad' ");
	
	while ($str = mysqli_fetch_assoc($sorgu)){
		 $tc= $str['idisArayanTc']; 
		
		}
		
	$sorgu=mysqli_query($con, "INSERT INTO basvuranlar (basvuranTc, basvuruTarihi, ilanID) VALUES ('$tc', '$date', '$id')");	
	header("Location:profil.php");
}



?>