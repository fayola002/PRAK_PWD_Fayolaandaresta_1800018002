<?php
// menampung url dalam variabel baru yaitu $url
$url = "http://localhost/PRAK-PWD10/getdatamhs.php";
//merupakan variabel yang menampung curl_init yang berguna untuk inisialisasi init library
$client = curl_init($url);
// digunakan untuk mengatur opsi opsi pada url
curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
//digunakan untuk menampung fungsi curl_exec terhadap variabel $client
//curl_exec digunakan untuk mengeksekusi query urlnya
$response = curl_exec($client);
//encode kedalam format json
$result = json_decode($response); 
foreach ($result as $r) {
 echo "<p>";
 //menampilkan data nim
 echo "NIM : " . $r->Nim . "<br />";
 //menampilkan data nama
 echo "Nama : " . $r->Nama . "<br />"; 
 //menampilkan data jk
 echo "jenis kel : " . $r->JK . "<br />"; 
 //menampilkan data alamat
 echo "Alamat : " . $r->Alamat . "<br />"; 
 //menampilkan data ttl
 echo "Tgl Lahir : " . $r->TTL . "<br />"; 
 echo "</p>";
}
