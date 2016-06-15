<?php 

session_start(); // Digunakan untuk memulai session

$host = "mysql.idhostinger.com"; // nama host anda
$user = "u514681292_em"; // username dari host anda
$pass = "medical"; //password dari host anda
$db   = "u514681292_em"; // nama database yang anda miliki

try {
	$connect = new PDO("mysql:host={$host};dbname={$db}", $user, $pass);
	$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo $e->getMessage();
}

?>