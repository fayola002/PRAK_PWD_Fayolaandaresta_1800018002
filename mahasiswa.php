<html>
<head>
<style>
	.error {color: #FF0000;}
</style>
</head>
<body>
	
<?php
// define variables and set to empty values
$nimErr = $namaErr = $prodiErr = $angkatanErr = $genderErr = "";
	$nim = $nama = $prodi = $angkatan = $gender = "";
//merupakan kondisi yang mana jika request dari inputan form menggunakan metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["nim"])) {
$nimErr = "Nim harus diisi";
}else {
$nim = test_input($_POST["nim"]);
}

if (empty($_POST["nama"])) {
$namaErr = "Nama harus diisi";
}else {
$nama = test_input($_POST["nama"]);
}

if (empty($_POST["prodi"])) {
$prodiErr = "";
}else {
$prodi = test_input($_POST["prodi"]);
}

if (empty($_POST["angkatan"])) {
$angkatanErr = "";
}else {
$angkatan = test_input($_POST["angkatan"]);
}

if (empty($_POST["gender"])) {
$genderErr = "Gender harus dipilih";
}else {
$gender = test_input($_POST["gender"]);
}
}

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data); return $data;
}
?>
 
<h2>Posting Komentar </h2>

<p><span class = "error">* Harus Diisi.</span></p>

<form method = "post" action = "<?php
echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<table>
<tr>
<td>Nim:</td>
<td><input type = "text" name = "nim">
<span class = "error">* <?php echo $nimErr;?></span>
</td>
</tr>

<tr>
<td>Nama: </td>
<td><input type = "text" name = "nama">
<span class = "error">* <?php echo $namaErr;?></span>
</td>
</tr>

<tr>
<td>Prodi:</td>
<td> <input type = "text" name = "prodi">
<span class = "error"><?php echo $prodiErr;?></span>
</td>
</tr>

<tr>
<td>Angkatan:</td>
<td> <input type = "text" name = "angkatan">
<span class = "error"><?php echo $angkatanErr;?></span>
</td>
</tr>

<tr>
<td>Jenis kelamin:</td>
<td>
<input type = "radio" name = "gender" value = "L">Laki-Laki
<input type = "radio" name = "gender" value = "P">Perempuan
<span class = "error">* <?php echo $genderErr;?></span>
</td>
</tr>

<td>
<input type = "submit" name = "submit" value = "Submit">
</td>
</table>
</form>

<?php
echo "<h2>Data yang anda isi:</h2>";
 
echo $nim; echo "<br>";

echo $nama; echo "<br>";

echo $prodi; echo "<br>";

echo $angkatan; echo "<br>";

echo $gender;
?>

</body>
</html>
