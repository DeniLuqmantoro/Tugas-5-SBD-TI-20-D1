<?php
$host = "localhost";
$user = "adminklinik";
$pass = "312010071";
$db = "klinik_312010071";
$conn = mysqli_connect('localhost','adminklinik','312010071','klinik_312010071');

if ($conn == false)
{

	echo "Koneksi ke server gagal.";
	die();
}
?>