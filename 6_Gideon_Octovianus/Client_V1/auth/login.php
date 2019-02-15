<!DOCTYPE HTML>
<html>
<?php
include 'koneksi.php'
?>
<head>
<link rel="stylesheet" href="css/login.css">
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>Bani Yas | LOGIN</title>
</head>
<body>
<form action="proseslogin.php" method="post">
<div class="outter"></div>
<div class="logo">
<h3 class="text">Login</h3>
<input type="text" name="username" class="box" required placeholder="Username"/>
<input type="password" name="password" class="box" required placeholder="Password"/>
<button type="submit" class="btn" name="daftar" placeholder="Login">LOGIN</button>
</form>
</body>
</html>