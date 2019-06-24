<?php 

require '../fungsi.php';

$keyword = $_GET["keyword"];


$query = "SELECT * FROM mahasiswa
		 	WHERE
		 	nama LIKE '%$keyword%' OR 
		 	nrp LIKE '%$keyword%' OR 
		 	email LIKE '%$keyword%' OR
		 	jurusan LIKE '%$keyword%'
		 	";
$mahasiswa = query($query);


 ?>

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