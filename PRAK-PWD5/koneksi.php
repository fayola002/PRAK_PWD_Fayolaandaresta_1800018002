<?php
//konfigurasi database
$host="localhost";
// merupakan pendeklarasian localhost ke variabel $host
$username="root";
// merupakan pendeklarasian root ke variabel $username dimana $username digunakan untuk (nama username hak akses ke database)
$password="";
// merupakan pendeklarasian password ke variabel $password dimana $password digunakan untuk password hak akses ke database
$databasename="akademik";
//merupakan pendeklarasian nama dari database yang digunakan yaitu akademik ke variabel $databasename
$con=@mysqli_connect($host,$username,$password,$databasename);
////merupakan penghubung antara mysql dan php dengam menggunakan fungsi @mysqli_connect menggunakan parameter host,username,password dan namadatabase
if (!$con) {
echo "Error: " . mysqli_connect_error(); exit();
//merupakan kondisi yang akan menampilkan pesan error apabila kondisi yang dimaksud terpenuhi
}
?>
