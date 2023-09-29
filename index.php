<?php 
session_start();
include "koneksi.php";
	if (isset($_SESSION['nama_guru'])==''){
		include "login.php";
	}else{
		include "konten.php";
	}
?>