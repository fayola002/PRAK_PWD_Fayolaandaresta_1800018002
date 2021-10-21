<?php
include_once("koneksi.php");

// Get id from URL to delete that user
$Nim = $_GET['Nim'];

// Delete user row from table based on given id
$result = mysqli_query($con, "DELETE FROM mahasiswa WHERE Nim='$Nim'");


header('location:index.php');

?>
