<?php
session_start();
include 'koneksi.php';
$username= $_POST['username'];
$password = md5($_POST['password']);
	$sql = mysqli_query($conn,"SELECT * FROM tb_user where username='$username' and password='$password' and level='admin'");
	header('location:home.php');
	if($sql){
		
		echo ('berhasil');
		
	}
	
	?>