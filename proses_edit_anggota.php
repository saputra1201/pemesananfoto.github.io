<?php
$id = $_GET['id_anggota'];

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$jurusan = $_POST['jurusan'];
$angkatan = $_POST['angkatan'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$tempat_lahir = $_POST['tempat_lahir'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$jabatan = $_POST['jabatan'];




include "koneksi.php";
$sql = "update tabel_anggota set
		nama='$nama',
		nim='$nim',
		jurusan='$jurusan',
		angkatan='$angkatan',
		tanggal_lahir='$tanggal_lahir',
		tempat_lahir='$tempat_lahir',
		alamat='$alamat',
		no_telp='$no_telp',
		jabatan='$jabatan'
		 where id_anggota='$id'";
$hasil = mysql_query($sql);


header ("location:manajemen_anggota.php" );
?>