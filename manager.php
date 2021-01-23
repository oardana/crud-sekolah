<?php 
session_start();
if($_SESSION['tipe']!=3) {
	header('location:login.php');
}?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Manager</title>
</head>
<body>
	<a href="logout.php">Logout</a>
	<h1>Halaman Manager</h1>
</body>
</html>