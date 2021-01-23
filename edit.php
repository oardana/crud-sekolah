<?php 
session_start();
if($_SESSION['tipe']!=1){
	header('location:login.php');
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
	<body>
		<h1>Silahkan Ubah Data Obat</h1>
		<?php 
		$conn = mysqli_connect("localhost","root","","apotek");

		$kode = $_GET["kode"];

		$query = mysqli_query($conn,"SELECT * FROM obat WHERE kode_obat='$kode'");
		$data = mysqli_fetch_assoc($query);
		if (isset($_POST["ubah"])){
			$kode = $_POST["kode_obat"];
			$nama = $_POST["nama_obat"];
			$harga = $_POST["harga"];
			$query = mysqli_query($conn,"UPDATE obat SET nama_obat='$nama',harga='$harga' WHERE kode_obat='$kode'");
			if($query)header("location:index.php");
		}
 		?>
		<form method="POST" action="">
			<table cellpadding="5" cellspacing="0">
				<tr>
					<td>Kode Obat </td>
					<td><input type="text" name="kode_obat" value="<?= $data["kode_obat"]; ?>" readonly></td>
				</tr>
				<tr>
					<td>Nama Obat  </td>
					<td><input type="text" name="nama_obat" value="<?=  $data["nama_obat"];?>"></td>
				</tr>
				<tr>
					<td>Harga  </td>
					<td><input type="number" name="harga" value="<?= $data["harga"]; ?>"></td>
				</tr>
				<tr>
					<td><button type="submit" name="ubah" >Ubah</button></td>
				</tr>
			</table>
		</form>
	</body>
</html>