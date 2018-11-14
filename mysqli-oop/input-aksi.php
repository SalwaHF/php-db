<?php 

	include 'koneksi.php';
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];

	$host->query("INSERT INTO mahasiswa(nim,nama,alamat) VALUES('','$nama','$alamat')");

	header("location:index.php?pesan=input");

?>