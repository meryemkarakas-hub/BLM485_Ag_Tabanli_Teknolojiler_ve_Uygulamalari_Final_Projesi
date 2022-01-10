<?php 

$ad = $_GET['username'];
$sifre = $_GET['password'];


require_once('db.php');

if(mysqli_connect_errno()){
	echo"Failed to connect to MySQL:".mysqli_connect_error(); 

} else {
	$sorgu =mysqli_query($con ,"SELECT * FROM admin");
	
	while ($str = mysqli_fetch_assoc($sorgu)){
		$kullaniciAdi= $str['adminEmail']; 
		$kullaniciSifre= $str['adminSifre'] ;
	}
}

if ($ad==$kullaniciAdi && $sifre==$kullaniciSifre) {
	session_start();
	$_SESSION['isim'] = $_GET['username'];
	header("Location:adminProfil.php"); 
} else 
	header("Location:adminLogin.php"); 


?>