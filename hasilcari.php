<!DOCTYPE html>
<html>
<head>
	<title>CRUD Mahasiswa Dengan PHP Dan MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1>Membuat CRUD Dengan PHP Dan MySQL</h1>
		<h2>Menampilkan data dari database</h2>
	</div>
	<br/>

	<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
	<br/>
	<a href="index.php">Lihat Semua Data</a>

	<h3>Data user yang dicari :</h3>
	<table border="1" class="table">
		<tr>
			<th>NIM</th>
			<th>Nama</th>
			<th>Alamat</th>
		</tr>
		<?php 
			$kolom=$_POST['kolom'];
			$cari=$_POST['cari'];
			$conn= new mysqli("localhost", "root", "", "php_db");
			$query = "select * from mahasiswa where $kolom like '%$cari%'";
			$hasil = $conn->query($query);
			$jumlah = $hasil->num_rows;
			echo "<br>";
			echo "Ditemukan : $jumlah";
			echo "<br>";
			include "koneksi.php";
			while ($baris = $hasil->fetch_array()) { 
		?>
		<tr>
			
					<td><?php echo $baris[0]; ?></td>
					<td><?php echo $baris[1]; ?></td>
					<td><?php echo $baris[2]; ?></td>
					
				<?php }
			?>
			
		</tr>
	</table>
</body>
</html>