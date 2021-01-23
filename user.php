<?php 
session_start();
if($_SESSION['tipe']!=2) {
	header('location:login.php');
}?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman User</title>
</head>
<body>
	<a href="logout.php">Logout</a>
	<h1>Ini Adalah Halaman User</h1>
</body>
</html>