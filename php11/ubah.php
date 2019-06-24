<?php 
session_start();

if ( !isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}
require 'fungsi.php';

//ambil data url
$id = $_GET["id"];
//query data mahasiswa berdasarkan ID
$mhs = query ("SELECT * FROM mahasiswa WHERE id= $id")[0];



//cek apakah tombol pernak ditekan
if( isset($_POST["submit"]) ) {
 	
 	//cek apakah data berhasil diubah
 	if(ubah($_POST) > 0 ){
 		echo "
 			<script>
 				alert('data berhasil diubah');
 				document.location.href = 'index.php';
 			</script>

 		";
 	}else {
 		echo "
 			<script>
 				alert('data gagal diubah');
 				document.location.href = 'index.php';
 			</script>
 		";
 	}

}
 ?>

<!DOCTYPE html>
<html>
<head>
		<title>Ubah Data mahasiswa</title>
</head>
<body>
	<h2>Ubah data mahasiswa</h2>

<form action="" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?= $mhs ["id"]; ?>" >
	<input type="hidden" name="gambarLama" value="<?= $mhs ["gambar"]; ?>" >
	<ul>
		<li>
			<label for="nrp">NRP :</label>
			<input type="text" name="nrp" id="nrp" required value="<?= $mhs["nrp"]; ?> ">
		</li>

		<li>
			<label for="nama">Nama:</label>
			<input type="text" name="nama" id="nama" value="<?= $mhs["nama"]; ?>" >
		</li>

		<li>
			<label for="email">Email:</label>
			<input type="text" name="email" id="email" value="<?= $mhs["email"]; ?>" >
		</li>
		
		<li>
			<label for="jurusan">Jurusan:</label>
			<input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"]; ?>" >
		</li>

		<li>
			<label for="gambar">Gambar:</label><br>
			<img width="50" src="bahan/<?= $mhs['gambar']; ?>"> <br>
			<input type="file" name="gambar" id="gambar"  >
		</li>

		<li>
			<button type="submit" name="submit">Ubah Data
			</button>	
		</li>

		<li>
			<button><a href="index.php">kembali</a></button>
		</li>
	</ul>


</form>
</body>
</html>