<HTML>
<head>
		<title>Tambah Anggota</title>
		<link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="tambah_anggota">

<?php
$id = $_GET['id_anggota'];

include "koneksi.php";
$sql = "select * from tabel_anggota_baru where id_anggota=$id";
$hasil = mysql_query($sql);
$record = mysql_fetch_array($hasil);
$id_anggota = $record['id_anggota'];
$nama = $record['nama'];
$nim = $record['nim'];
$jurusan = $record['jurusan'];
$angkatan = $record['angkatan'];
$tanggal_lahir = $record['tanggal_lahir'];
$tempat_lahir = $record['tempat_lahir'];
$alamat = $record['alamat'];
$no_telp = $record['no_telp'];
$jabatan = $record['jabatan'];

$sql = "insert into tabel_anggota values
		('$id_anggota','$nama','$nim','$jurusan','$angkatan','$tanggal_lahir','$tempat_lahir','$alamat','$no_telp',
		'$jabatan')";
$hasil = mysql_query($sql); 
$hapus = "delete from tabel_anggota_baru where id_anggota=$id";
$hapus2 = mysql_query($hapus);

header("location:manajemen_anggota.php");
?>


</div>
	</body>
</HTML>