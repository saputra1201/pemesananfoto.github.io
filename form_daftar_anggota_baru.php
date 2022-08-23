<HTML>
<head>
		<title>HOOH</title>
		<link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="tambah_anggota_baru">
<center>Selamat Datang Anggota Baru</center></br>
<form action="proses_tambah_anggota_baru.php" method='post' enctype="multipart/form-data">
<table>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="nama" size="53"></td>
	</tr>
	<tr>
		<td>NIM</td>
		<td>:</td>
		<td><input type="text" name="nim" size="53"></td>
	</tr>
	<tr>
		<td>Jurusan</td>
		<td>:</td>
		<td><input type="text" name="jurusan" size="53"></td>
	</tr>
	<tr>
		<td>Angkatan</td>
		<td>:</td>
		<td><input type="text" name="angkatan" size="53"></td>
	</tr>
	<tr>
		<td>Tanggal Lahir</td>
		<td>:</td>
		<td><input type="date" name="tanggal_lahir" size="53"></td>
	</tr>
	<tr>
		<td>Tempat Lahir</td>
		<td>:</td>
		<td><input type="text" name="tempat_lahir" size="53"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td><input type="text" name="alamat" size="53"></td>
	</tr>
	<tr>
		<td>No Telp</td>
		<td>:</td>
		<td><input type="text" name="no_telp" size="53"></td>
	</tr>
	<tr>
		<td>Jabatan</td>
		<td>:</td>
		<td>
		<select name="jabatan">
		<option value="Ketua UKM">Ketua UKM</option>
		<option value="Wakil Ketua">Wakil Ketua</option>
		<option value="Sekretaris">Sekretaris</option>
		<option value="Bendahara">Bendahara</option>
		<option value="Anggota Lama">Anggota Lama</option>
		<option value="Anggota Baru">Anggota Baru</option>
		</select></td>
	</tr>
	
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" value="simpan"></td>
	</tr>
</table>
</form>
</div>
	</body>
</HTML>