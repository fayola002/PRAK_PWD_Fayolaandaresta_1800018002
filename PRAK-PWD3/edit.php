<?php
include "koneksi.php";
if(isset($_POST['update']))
{
$Nim = $_POST['Nim'];
$Nama=$_POST['Nama'];
$JK=$_POST['JK'];
$Alamat=$_POST['Alamat'];
$TTL=$_POST['TTL'];
// update user data
$result = mysqli_query($con, "UPDATE mahasiswa SET Nama='$Nama',JK='$JK',Alamat='$Alamat',TTL='$TTL' WHERE Nim='$Nim'");
header("Location: index.php");
}
?>

<?php
$Nim = $_GET['Nim'];
// Fetech user data based on id
$result = mysqli_query($con, "SELECT * FROM mahasiswa WHERE Nim='$Nim' ");

while($user_data = mysqli_fetch_array($result))
{
$Nim = $user_data['Nim'];
$Nama = $user_data['Nama'];
$JK = $user_data['JK'];
$Alamat = $user_data['Alamat'];
$TTL = $user_data['TTL'];
}
?>
<html>
<head>
	<title>Edit Data Mahasiswa</title>
</head>

<body>
<a href="index.php">Home</a>
<br/><br/>

<form name="update_mahasiswa" method="post" action="edit.php">
<table border="0">
<tr>
<td>Nama</td>
<td><input type="text" name="Nama" value=<?php echo $Nama;?>></td>
</tr>
<tr>
<td>Gender</td>
<td><input type="text" name="JK" value=<?php echo $JK;?>></td>
</tr>
<tr>
<td>alamat</td>
<td><input type="text" name="Alamat" value=<?php echo $Alamat;?>></td>
</tr>
<tr>
<td>Tgl Lahir</td>
<td><input type="text" name="TTL" value=<?php echo $TTL;?>></td>
</tr>
<tr>
<td><input type="hidden" name="Nim" value=<?php echo $_GET['Nim'];?>></td>
<td><input type="submit" name="update" value="Update"></td>
</tr>
</table>
</form>
</body>
</html>

