<?php 
session_start();
$conn = mysqli_connect("localhost","root","","apotek");

if($_SESSION['tipe']!=1){
	header('location:login.php');
}

if (isset($_POST["Tambah"])){
	$kode = $_POST["kode_obat"];
	$nama = $_POST["nama_obat"];
	$harga = $_POST["harga"];
	$query = mysqli_query($conn,"INSERT INTO obat VALUES('$kode','$nama','$harga')");
	if($query)header("location:index.php");
}?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah</title>
</head>
<body>
	<h1>Silahkan Masukan Data Obat</h1>
	<form method="POST" action="">
		<table cellpadding="5" cellspacing="0">
			<tr>
				<td>Kode Obat </td>
				<td><input type="text" name="kode_obat" autocomplete="off"></td>
			</tr>
			<tr>
				<td>Nama Obat  </td>
				<td><input type="text" name="nama_obat" autocomplete="off"></td>
			</tr>
			<tr>
				<td>Harga  </td>
				<td><input type="number" name="harga" autocomplete="off"></td>
			</tr>
			<tr>
				<td><button type="submit" name="Tambah">Tambah</button></td>
			</tr>
		</table>
	</form>
</body>
</html>