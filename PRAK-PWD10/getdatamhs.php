<?php
//digunakan untuk menghubungkan dengan database
require_once "koneksi.php";
//mengambil data dari tabel mahasiswa
$sql   = "select * from mahasiswa";
$query = mysqli_query($koneksi,$sql);
//menampilkan data dalam bentuk array
while ($row = mysqli_fetch_assoc($query)) {
$data[] = $row;
}
header('content-type: application/json'); 
//encode kedalam format json
echo json_encode($data);
mysqli_close($koneksi);
?>
