<?php
include "koneksi.php"; 
header('Content-Type: text/xml');
$query = "SELECT * FROM mahasiswa";
$hasil = mysqli_query($koneksi,$query);
$jumField = mysqli_num_fields($hasil);
echo "<?xml version='1.0'?>"; 
echo "<data>";
while ($data = mysqli_fetch_array($hasil))
{
 echo"<mahasiswa>"; 
 echo"<Nim>",$data['Nim'],"</Nim>"; 
 echo"<Nama>",$data['Nama'],"</Nama>"; 
 echo"<JK>",$data['JK'],"</JK>"; 
 echo"<Alamat>",$data['Alamat'],"</Alamat>"; 
 echo"<TTL>",$data['TTL'],"</TTL>"; 
 echo "</mahasiswa>";
}
echo "</data>";
?>
