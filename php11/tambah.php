<?php 
session_start();

if ( !isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}
require 'fungsi.php';
//cek apakah tombol pernak ditekan
if( isset($_POST["submit"]) ) {
 	
 	//cek apakah data berhasil ditambahkan
 	if(tambah($_POST) > 0 ){
 		echo "
 			<script>
 				alert('data berhasil ditambahkan');
 				document.location.href = 'index.php';
 			</script>

 		";
 	}else {
 		echo "
 			<script>
 				alert('data gagal ditambahkan');
 				document.location.href = 'index.php';
 			</script>
 		";
 	}

}
 ?>

<!DOCTYPE html>
<html>
<head>
		<title>taambah data mahasiswa</title>
</head>
<body>
	<h2>tambah data mahasiswa</h2>

<form action="" method="post" enctype="multipart/form-data">
	<ul>
		<li>
			<label for="nrp">NRP :</label>
			<input type="text" name="nrp" id="nrp" required>
		</li>

		<li>
			<label for="nama">Nama:</label>
			<input type="text" name="nama" id="nama" required>
		</li>

		<li>
			<label for="email">Email:</label>
			<input type="text" name="email" id="email">
		</li>
		
		<li>
			<label for="jurusan">Jurusan:</label>
			<input type="text" name="jurusan" id="jurusan">
		</li>

		<li>
			<label for="gambar">Gambar:</label>
			<input type="file" name="gambar" id="nrp">
		</li>

		<li>
			<button type="submit" name="submit">Tambahkan Data
			</button>	
		</li>
		<li>
			<button><a href="index.php">Kembali ke index</a></button>
		</li>

	</ul>
</form>
</body>
</html>