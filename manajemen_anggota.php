<html>
<head>
    <title>Manajemen Anggota</title>
    <link rel="stylesheet" href="style_dalam.css" />
   </head>
   <body>
   	
   
<div class="manajemen-anggota">

<h2 align=center>Manajemen Anggota</h2>
<form action="" method="post">
	<input type="text" name="keyword">
	<input type="submit" name="search">
</form>
<a href="form_tambah_anggota.php">Tambah anggota</a></br></br>
<a href="manajemen_anggota_baru.php">Manajemen Anggota Baru</a></br></br>
<?php
include "koneksi.php";
if(isset($_POST['keyword']))
{
	$keyword = $_POST['keyword'];
	$sql = "select * from tabel_anggota where nama like '%$keyword%'";
}
else{
	$sql = "select * from tabel_anggota order by id_anggota";
}

$hasil = mysql_query($sql);

echo "<table border=1>
	<tr>
		<td>NO</td>
		<td>ID ANGGOTA</td>
		<td>NAMA</td>
		<td>NIM</td>
		<td>JURUSAN</td>
		<td>ANGKATAN</td>
		<td>TANGGAL LAHIR</td>
		<td>TEMPAT LAHIR</td>
		<td>ALAMAT</td>
		<td>NO TELPON</td>
		<td>JABATAN</td>
		<td>ACTION</td>
	</tr>";
	$i=1;
while($record = mysql_fetch_array($hasil))
{
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


echo "<tr>
		<td>$i</td>
		<td>$id_anggota</td>
		<td>$nama</td>
		<td>$nim</td>
		<td>$jurusan</td>
		<td>$angkatan</td>
		<td>$tanggal_lahir</td>
		<td>$tempat_lahir</td>
		<td>$alamat</td>
		<td>$no_telp</td>
		<td>$jabatan</td>
		
		<td><a href='hapus_anggota.php?id_anggota=$id_anggota'>Hapus</a></br></br>
			<a href='form_edit_anggota.php?id_anggota=$id_anggota'>Edit</a>
		</td>
	</tr>";
	$i++;
}
echo "</table>
</br>
<a href='halaman_admin.php'>Kembali</a>";
?>

</div>
	</body>
</html>
