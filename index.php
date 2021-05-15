<?php
	session_start();
	include('koneksi.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Login</title>
	<link rel="stylesheet" href="style.css">
</head>
<body align="center">
	<h1>SILAHKAN LOGIN</h1>
	<form method="POST" action="login.php">
		<label>Username</label><br>
		<input type="text" class="form_login" name="username" value="<?php if (isset($_COOKIE["user"])){echo $_COOKIE["user"];}?>" placeholder="Username"><br><br>
		
		<label>Password</label><br>
		<input type="password" class="form_login" name="password" value="<?php if (isset($_COOKIE["pass"])){echo $_COOKIE["pass"];}?>" placeholder="Password"><br><br>
		
		<div>
		<label><input type="checkbox" style="margin-bottom: 20px;" value="remember-me" name="remember" <?php if (isset($_COOKIE["user"]) && isset($_COOKIE["pass"])){ echo "checked";}?>> Remember me</label>
		</div>
		
		<input type="submit" class="tombol" value="LOGIN" name="login">
	</form>
 
	<span>
	<?php
		if (isset($_SESSION['message'])){
			echo $_SESSION['message'];
		}
		unset($_SESSION['message']);
	?>
</span>
</body>
</html>