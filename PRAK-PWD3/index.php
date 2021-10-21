<?php
include "koneksi.php";
// Fetch all users data from database
$result = mysqli_query($con, "SELECT * FROM mahasiswa ");
?>
<html>
<head>
<title>Halaman Utama</title>
</head>
<body>
<a href="tambah.php">Tambah Data Baru</a><br/><br/>
<table width='80%' border=1>
<tr>
<th>Nim</th> 
<th>Nama</th> 
<th>Gender</th> 
<th>Alamat</th>
<th>tgl lahir</th> 
<th>Update</th>
</tr>
<?php
while($user_data = mysqli_fetch_array($result)) { echo "<tr>";
echo "<td>".$user_data['Nim']."</td>"; 
echo "<td>".$user_data['Nama']."</td>"; 
echo "<td>".$user_data['JK']."</td>"; 
echo "<td>".$user_data['Alamat']."</td>"; 
echo "<td>".$user_data['TTL']."</td>";

echo "<td><a href='edit.php?Nim=$user_data[Nim]'>Edit</a> | <a href='delete.php?Nim=$user_data[Nim]'>Delete</a></td></tr>";
}
?>
</table>
</body>
</html>
