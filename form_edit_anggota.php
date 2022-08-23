<HTML>
<head>
		<title>Tambah Anggota</title>
		<link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="tambah_anggota">
<center>Edit Anggota</center></br>
<?php
$id = $_GET['id_anggota'];

include "koneksi.php";
$sql = "select * from tabel_anggota where id_anggota=$id";
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
?>

<form action="proses_edit_anggota.php?id_anggota=<?php echo $id; ?>" method='post'>
<table>
	<tr>
		<td>Nama </td>
		<td><input type="text" name="nama" value = "<?php echo $nama?>" size="53"></td>
	</tr>
	<tr>
		<td>Nim</td>
		<td><input type="text" name="nim" value = "<?php echo $nim?>" size="53"></td>
	</tr>
	<tr>
		<td>Jurusan </td>
		<td><input type="text" name="jurusan" value = "<?php echo $jurusan?>" size="53"></td>
	</tr>
	<tr>
		<td>Angkatan</td>
		<td><input type="text" name="angkatan" value = "<?php echo $angkatan?>" size="53"></td>
	</tr>
	<tr>
		<td>Tanggal Lahir</td>
		<td><input type="text" name="tanggal_lahir" value = "<?php echo $tanggal_lahir?>" size="53"></td>
	</tr>
	<tr>
		<td>Tempat Lahir</td>
		<td><input type="text" name="tempat_lahir" value = "<?php echo $tempat_lahir?>" size="53"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat" value = "<?php echo $alamat?>" size="53"></td>
	</tr>
	<tr>
		<td>No Telp</td>
		<td><input type="text" name="no_telp" value = "<?php echo $no_telp?>" size="53"></td>
	</tr>
	<tr>
		<td>Jabatan</td>
		<td><input type="text" name="jabatan" value = "<?php echo $jabatan?>" size="53"></td>
	</tr>
	
	<tr>
		<td></td>
		<td><input type="submit"></td>
	</tr>
</table>
</form>
</div>
	</body>
</HTML>