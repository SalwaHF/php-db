<?php 
	
	session_start();

	if (!isset ($_SESSION['basic_is_logged_in']) || $_SESSION['basic_is_logged_in'] !== true){
		header('Location: login.php');
		exit;
	}

?>

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
	<a class="tombol" href="input.php">+ Tambah Data Baru</a>

	<p>Masukkan data Mahasiswa yang ingin anda cari</p>
	<form action="hasilcari.php" method="post">
		<select name="kolom">
			<option value="nim">NIM</option>
			<option value="Nama">Nama</option>
		</select>
		<input type="text" name="cari">
		<input type="submit" value="cari">
	</form>

	<h3>Data user</h3>
	<table border="1" class="table">
		<tr>
			<th>NIM</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Opsi</th>		
		</tr>
		<?php 
		include "koneksi.php";
		$query_mysql = mysqli_query($host, "SELECT * FROM mahasiswa")or die(mysql_error());
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $data['nim']; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['alamat']; ?></td>
			<td>
				<a href="edit.php?nim=<?php echo $data['nim']; ?>">Edit</a> |
				<a href="hapus.php?nim=<?php echo $data['nim']; ?>">Hapus</a>
			</td>
		</tr>
		<?php } ?>
	</table>

	<br/>
	<a href="logout.php">Logout</a>
</body>
</html>