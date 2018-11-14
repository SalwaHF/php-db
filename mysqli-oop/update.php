<?php 

	include 'koneksi.php';
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];

	$host->query("UPDATE mahasiswa SET nama='$nama', alamat='$alamat' WHERE nim='$nim'");

	header("location:index.php?pesan=update");

?>