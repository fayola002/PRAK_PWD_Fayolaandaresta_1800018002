<html>
<head>
<title>Tambah data mahasiswa</title>
</head>

<body>
<a href="index.php">Go to Home</a>
<br/><br/>
<form action="tambah.php" method="post" name="form1">
<table width="25%" border="0">
<tr>
<td>Nim</td>
<td><input type="text" name="Nim"></td>
</tr>
<tr>
<td>Nama</td>
<td><input type="text" name="Nama"></td>
</tr>
<tr>
<td>Gender (L/P)</td>
<td><input type="text" name="JK"></td>
</tr>
<tr>
<td>Alamat</td>
<td><input type="text" name="Alamat"></td>
</tr>
<tr>
<td>Tgl Lahir</td>
<td><input type="text" name="TTL"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="Submit" value="Tambah"></td>
</tr>
</table>
</form>

<?php

if(isset($_POST['Submit'])) {
$Nim = $_POST['Nim'];
$Nama = $_POST['Nama'];
$JK = $_POST['JK'];
$Alamat = $_POST['Alamat'];
$TTL = $_POST['TTL'];

include "koneksi.php";
// Insert user data into table
$result = mysqli_query($con, "INSERT INTO mahasiswa(Nim,Nama,JK,Alamat,TTL) VALUES('$Nim','$Nama', '$JK','$Alamat','$TTL')");
// Show message when user added
echo "Data berhasil disimpan. <a href='index.php'>View Users</a>";
}
?>
</body>
</html>