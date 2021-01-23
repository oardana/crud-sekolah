
<!DOCTYPE html>
<html>
<head>
	<title>Formulir</title>
</head>
	<body>
		<h1>Formulir  Pendaftaran Ekstrakurikuler Komputer</h1>
		<form action="" method="post">
			<table>
				<tr>
					<td>NIS</td>
					<td>:</td>
					<td><input type="text" name="nis" autocomplete="off" maxlength="4"></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama" autocomplete="off" ></td>
				<tr>
					<td>Alamat</td>
					<td>:</td>
					<td><textarea name="text" name="text"></textarea></td>
				</tr>
				<tr>
					<td>No HP</td>
					<td>:</td>
					<td><input type="text" name="no" autocomplete="off" maxlength="11"></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td>:</td>
					<td>
						<input type="radio" name="jeniskelamin" value="laki-laki" >Laki - Laki
						<input type="radio" name="jeniskelamin" value="Perempuan" >Perempuan
					</td>
				</tr>
				<tr>
					<td>Hobi</td>
					<td>:</td>
					<td>
						<input type="checkbox" name="membaca" value="X">Membaca
						<input type="checkbox" name="Olahraga" value="XI">Olahraga
						<input type="checkbox" name="Musik" value="XII">Musik
					</td>
				</tr>
				<tr>
					<td>Jurusan</td>
					<td>:</td>
					<td>
						<select name="pilihan">
							<option value="">RPL</option>
							<option value="">BISMEN</option>
							<option value="">TBSM</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><button type="submit" name="kirim">Daftar</button></td>
				</tr>
			</table>
		</form>
		<script type="text/javascript" src="./package/dist/sweetalert2.all.min.js"></script>

		<?php if(isset($_POST['kirim'])) {?>
			<script type="text/javascript">
				const Toast = Swal.mixin({
  				toast: true,
  				position: 'center center',
  				showConfirmButton: false,
  				timer: 3000,
  				timerProgressBar: true,
  				onOpen: (toast) => {
				toast.addEventListener('mouseenter', Swal.stopTimer)
				toast.addEventListener('mouseleave', Swal.resumeTimer)
				}
				})
				Toast.fire({
				icon: 'success',
				title: 'Signed in successfully'
				})
			</script>
		<?php } ?>
	</body>
</html>

















