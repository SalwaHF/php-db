<?php 
	
	include 'koneksi.php';
	$nim = $_GET['nim'];
	mysqli_query($host,"DELETE FROM mahasiswa WHERE nim='$nim'");

	header("location:index.php?pesan=hapus");

?>