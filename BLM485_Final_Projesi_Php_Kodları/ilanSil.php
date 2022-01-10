<?php

$id = $_GET['id'];
require_once('db.php');

if(mysqli_connect_errno()){
	echo"Failed to connect to MySQL:".mysqli_connect_error(); 

} else {
	
	$sql = "DELETE FROM ilanlar WHERE ilanid=$id" ;
	
	if (mysqli_query($con, $sql)) {
		header("Location:adminProfil.php");
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}

	
}

?>