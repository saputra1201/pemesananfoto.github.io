<?php
$id = $_GET['id_user'];

$username = $_POST['username'];
$password = $_POST['password'];
$nim = $_POST['nim'];
$nama_lengkap = $_POST['nama_lengkap'];




include "koneksi.php";
$sql = "update tabel_admin set
		username='$username',
		password='$password',
		nim='$nim',
		nama_lengkap='$nama_lengkap'
		 where id_user='$id'";
$hasil = mysql_query($sql);



require 'manajement_admin.php';
?>