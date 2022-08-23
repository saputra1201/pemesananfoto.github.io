<?php
$username = $_POST['username'];
$password = $_POST['password'];
$nim = $_POST['nim'];
$nama_lengkap = $_POST['nama_lengkap'];



include "koneksi.php";
$sql = "insert into tabel_admin values
		('','$username','$password','$nim','$nama_lengkap')";
$hasil = mysql_query($sql);
header("location:manajement_admin.php");
?>