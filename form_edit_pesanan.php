<HTML>
<head>
		<title>Edit Pesanan</title>
		<link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="tambah_anggota">
<center>Edit Pesanan</center></br>
<?php
$id = $_GET['no_pesanan'];

include "koneksi.php";
$sql = "select * from tabel_pesanan where no_pesanan=$id";
$hasil = mysql_query($sql);
$record = mysql_fetch_array($hasil);
$no_pesanan = $record['no_pesanan'];
$nama = $record['nama'];
$nim = $record['nim'];
$jurusan = $record['jurusan'];
$angkatan = $record['angkatan'];
$tgl_pesan = $record['tgl_pesan'];
$alamat = $record['alamat'];
$email = $record['email'];
$no_telp = $record['no_telp'];
$pilihan_paket = $record['pilihan_paket'];
?>

<form action="proses_edit_pesanan.php?no_pesanan=<?php echo $id; ?>" method='post'>
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
		<td>Alamat</td>
		<td><input type="text" name="alamat" value = "<?php echo $alamat?>" size="53"></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="text" name="email" value = "<?php echo $email?>" size="53"></td>
	</tr>
	<tr>
		<td>No Telp</td>
		<td><input type="text" name="no_telp" value = "<?php echo $no_telp?>" size="53"></td>
	</tr>
	<tr>
		<td>Pilihan Paket</td>
		<td><input type="text" name="pilihan_paket" value = "<?php echo $pilihan_paket?>" size="53"></td>
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