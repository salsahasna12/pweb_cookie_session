<?php
	session_start();
 
	if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
		header('index.php');
		exit();
	}
	include('koneksi.php');
	$query=mysqli_query($conn,"select * from tb_user where id='".$_SESSION['id']."'");
	$row=mysqli_fetch_assoc($query);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="style.css">
</head>
<body align="center">
	<h1 align="center">SELAMAT DATANG <?php echo $row['nama']; ?></h1>
	
	<br>
	<a align="center" class="tombol" href="logout.php">LOGOUT</a>
</body>
</html>