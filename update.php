<?php 
	
	include 'koneksi.php';
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	mysqli_query($host, "UPDATE mahasiswa SET nama='$nama', alamat='$alamat' WHERE nim='$nim'");
	header("location:index.php?pesan=update");

?>