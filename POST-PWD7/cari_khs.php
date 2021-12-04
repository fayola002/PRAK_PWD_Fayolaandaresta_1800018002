<?php
include 'koneksi.php';
?>
<!-- Fungsi tag ini digunakan pada sub-judul atau penjelasan dari judul posting, bisa juga digunakan pada judul widget. -->
<h3>Form Pencarian DATA KHS Dengan PHP </h3>

<!-- Fungsi ini digunakan untuk membuat button cari dan form inputan data yang akan dicari dengan menggunakan metode get -->
<form action="" method="get">
<label>Cari :</label>
<input type="text" name="cari">
<input type="submit" value="Cari">
</form>

<?php
if(isset($_GET['cari'])){
$cari = $_GET['cari'];
// $cari merupakan variabel yang digunakan untuk menampung nilai inputan
echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>

<table border="1">
<tr>
<th>No</th>
<th>NIM</th>
<th>Kode MK</th>
<th>Nilai</th>

</tr>
<?php if(isset($_GET['cari'])){
$cari = $_GET['cari'];
//sintaks yang digunakan untuk menampilkan datapada tabel khs yang sesuai dengan inputan yaitu nim
$sql="select * from khs where NIM like'%".$cari."%'";

//query yang digunakan untuk menghubungkan dan menampilkan data
$tampil = mysqli_query($koneksi,$sql);
}else{

// sintaks untuk menampilkan semua data dalam tabel khs
$sql="select * from KHS";
$tampil = mysqli_query($koneksi,$sql);
}
$no = 1;
while($r = mysqli_fetch_array($tampil)){
?>
<tr>
<td><?php echo $no++; ?></td>
<!-- sintaks yang digunakan untuk menampilkan nim pada tabel -->
<td><?php echo $r['NIM']; ?></td>
<!-- sintaks yang digunakan untuk menampilkan kode mata kuliah pada tabel -->
<td><?php echo $r['kodeMK']; ?></td>
<!-- sintaks yang digunakan untuk menampilkan nilai pada tabel -->
<td><?php echo $r['nilai']; ?></td>
</tr>
<?php } ?>
</table>
