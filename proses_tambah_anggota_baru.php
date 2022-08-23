<?php

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
$sql = "insert into tabel_anggota_baru values
		('','$nama','$nim','$jurusan','$angkatan','$tanggal_lahir','$tempat_lahir','$alamat','$no_telp',
		'$jabatan')";
$hasil = mysql_query($sql);
require 'daftar_anggota_ukm.php';
?>