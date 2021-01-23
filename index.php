<?php 
session_start();
if($_SESSION['tipe']!=1){
	header('location:login.php');
}?>
<!DOCTYPE html>
<html>
<head>
	<title>Obat</title>
</head>
<body>
	<a href="logout.php">Logout</a>
	<a href="tambah.php">Tambah Data</a>
	<h2>Halaman Admin</h2>
	<h1>Daftar Data Obat</h1>
	<table border="1" cellspacing="0" cellpadding="4">
		<tr>
			<th>Kode Obat</th>
			<th>Nama Obat</th>
			<th>Harga</th>
			<th>Aksi</th>
		</tr>
		<?php 
		$conn = mysqli_connect("localhost","root","","apotek");

		if (isset($_GET["hapus"])) {
			$kode = $_GET["hapus"];
			$query = mysqli_query($conn,"DELETE FROM obat WHERE kode_obat='$kode'");
			if($query)header("location:index.php");
		}
		$data = mysqli_query($conn, "SELECT * FROM obat");

		while($isi = mysqli_fetch_assoc($data)){?>
		<tr>
			<td><?= $isi["kode_obat"]; ?></td>
			<td><?= $isi["nama_obat"]; ?></td>
			<td><?= $isi["harga"]; ?></td>
			<td><a href="edit.php?kode=<?= $isi["kode_obat"]; ?>">Edit</a>|<a href="index.php?hapus=<?= $isi["kode_obat"];?>">Hapus</a></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>