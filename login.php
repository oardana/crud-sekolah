<?php 
session_start();
$con = mysqli_connect("localhost","root","","apotek");

if(isset($_POST["login"])){
	$username = $_POST["fusername"];
	$password = md5($_POST["fpassword"]);
	$result = mysqli_query($con,"SELECT * FROM user WHERE username='$username' AND password='$password'");
	if(mysqli_num_rows($result) === 1 ){
		$row = mysqli_fetch_assoc($result);
		$_SESSION['tipe'] = $row['tipe'];
		if($_SESSION['tipe']== 1){
			header('location:index.php');
		}else if($_SESSION['tipe']== 2){
			header('location:user.php');
		}else if($_SESSION['tipe']== 3){
			header('location:manager.php');
		}else{
			echo 'Tidak ada type User';
		}
	}else{
		echo'Password atau Username salah ? ';
	}
}

if(isset($_SESSION["login"])){
	header('location:index.php');
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Membuat Form Login</title>
</head>
<body>
	<h1>Form Login</h1>
	<form method="POST" action="">
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="fusername"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="fpassword"></td>
			</tr>
			<tr>
				<td><button type="submit" name="login">login</button></td>
			</tr>
		</table>
	</form>
</body>
</html>