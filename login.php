<?php
	if(isset($_POST['login'])){
 
		session_start();
		include('koneksi.php');
 
		$username=$_POST['username'];
		$password=$_POST['password'];
 
		$query=mysqli_query($conn,"select * from `tb_user` where username='$username' && password='$password'");
 
		if (mysqli_num_rows($query) == 0){
			$_SESSION['message']="Login gagal! Pengguna tidak ditemukan. Silahkan coba lagi";
			header('location:index.php');
		}
		else{
			$row=mysqli_fetch_array($query);
 
			if (isset($_POST['remember'])){
				//set up cookie
				setcookie("user", $row['username'], time() + (86400 * 30)); 
				setcookie("pass", $row['password'], time() + (86400 * 30)); 
			}
 
			$_SESSION['id']=$row['id'];
			header('location:home.php');
		}
	}
	else{
		header('location:index.php');
		$_SESSION['message']="Silahkan login!";
	}
?>