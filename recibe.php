<?php

$user = "root";
$pass = "";
$host = "localhost";
$db   = "form";
$mysqli = mysqli_connect($host,$user,$pass,$db);
$email=$_POST['E-mail'];
$contraseña=$_POST['Contraseña'];
if($mysqli){
	echo "si";
}else{
	echo "no";
}



if(mysqli_query($mysqli,"INSERT INTO cliente (email,contraseña) VALUES ('$email','$contraseña')") == TRUE){
	echo "Logrado";
}else{
	echo "
	 error";
}   
?>