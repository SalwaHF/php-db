<?php 
	
	include 'koneksi.php';
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];

	mysqli_query($host, "INSERT INTO mahasiswa(nim,nama,alamat)VALUES('','$nama','$alamat')");

	header("location:index.php?pesan=input");

?>