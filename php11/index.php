<?php

session_start();

if ( !isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}



require 'fungsi.php';

$mahasiswa = query("SELECT * FROM mahasiswa");

//tombol cari ditekan
if (isset($_POST["cari"]) ) {
	$mahasiswa = cari($_POST["keyword"]);

}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

<a href="logout.php">Logout</a>

<h1>Halaman Admin Untuk Menampilkan Data</h1>

<a href="tambah.php"> tambah data</a>
<br><br>
<br>
<button><a href="login.php">LOGIN</a></button>

<form action="" method="post">
	

	<input type="test" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian" autocomplete="off" id="keyword">
	<button type="submit" name="cari" id="tombol-cari"id="tombol-cari">Cari</button>



</form>


<br>

<div id="container">
<table border="1" cellpadding="10" cellpadding="0">
	
	<tr>
		<th> No.</th>
		<th>Action</th>
		<th>Gambar</th>
		<th>NRP</th>
		<th>nama</th>
		<th>email</th>
		<th>jurusan</th>

	</tr>

	<?php $i =1; ?>
	<?php foreach($mahasiswa as $row) :?>

	<tr>
		<td><?= $i; ?></td>

		<td>
			<a href="ubah.php?id=<?= $row["id"];?>" >ubah</a>




			<a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm ('yakin');">hapus</a>
		</td>

		<td><img src="bahan/<?= $row["gambar"]; ?>" width="50px" height="75px"></td>

		<td><?= $row ["nrp"]; ?></td>

		<td><?= $row ["nama"]; ?></td>

		<td><?= $row ["email"]; ?></td>

		<td><?= $row ["jurusan"]; ?></td>

	</tr>
	<?php $i++; ?>
	<?php endforeach;?>

</table>
</div>



<script src="js/script.js"></script>

</body>
</html>