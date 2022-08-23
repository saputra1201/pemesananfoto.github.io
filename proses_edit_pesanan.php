<?php
$no_pesanan = $_GET['no_pesanan'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$jurusan = $_POST['jurusan'];
$angkatan = $_POST['angkatan'];

$alamat = $_POST['alamat'];
$email = $_POST['email'];
$no_telp = $_POST['no_telp'];
$pilihan_paket = $_POST['pilihan_paket'];





include "koneksi.php";
$sql = "update tabel_pesanan set
		nama='$nama',
		nim='$nim',
		jurusan='$jurusan',
		angkatan='$angkatan',
		
		alamat='$alamat',
		email='$email',
		no_telp='$no_telp',
		pilihan_paket='$pilihan_paket'
		 where no_pesanan='$no_pesanan'";
$hasil = mysql_query($sql);


header ("location:manajemen_pesanan.php" );
?>