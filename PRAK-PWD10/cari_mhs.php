<form action="cari_mhs.php" method="get">
	<label>Cari :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form>
<?php
error_reporting(0);
$cari = $_GET['cari'];
$url = "http://localhost/PRAK-PWD10/getcarimhs.php?cari=".$cari;
$client = curl_init($url);
curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($client);
$result = json_decode($response); 
	foreach ($result as $r) {
	echo "<p>";
	echo "NIM : " . $r->Nim . "<br />";	
	echo "Nama : " . $r->Nama . "<br />";  
	echo "Jenis Kelelamin : " . $r->JK . "<br />"; 
	echo "Alamat : " . $r->Alamat . "<br />"; 
	echo "Tgl Lahir : " . $r->TTL . "<br />"; 
	echo "</p>";
}
