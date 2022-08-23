<html>
<head>
    <title>Manajemen Pesanan</title>
    <link rel="stylesheet" href="style_dalam.css" />
   </head>
   <body>
   	
   
<div class="manajemen-pesanan">


<h2 align=center>Manajemen Pesanan</h2>
<form action="" method="post">
	<input type="text" name="keyword">
	<input type="submit" name="search">
</form>

<?php
include "koneksi.php";
if(isset($_POST['keyword']))
{
	$keyword = $_POST['keyword'];
	$sql = "select * from tabel_pesanan where no_pesanan like '%$keyword%'";
}
else{
	$sql = "select * from tabel_pesanan order by no_pesanan desc";
}

$hasil = mysql_query($sql);

echo "<table border=1>
	<tr>
		<td>NO</td>
		<td>NO_PESANAN</td>
		<td>NAMA</td>
		<td>NIM</td>
		<td>JURUSANN</td>
		<td>ANGKATAN</td>
		<td>TANGGAL PESAN</td>
		<td>ALAMAT</td>
		<td>EMAIL</td>
		<td>NO TELPON</td>
		<td>PILIHAN PAKET</td>
		<td>ACTION</td>

	</tr>";
	$i=1;
while($record = mysql_fetch_array($hasil))
{
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

echo "<tr>
		<td>$i</td>
		<td>$no_pesanan</td>
		<td>$nama</td>
		<td>$nim</td>
		<td>$jurusan</td>
		<td>$angkatan</td>
		<td>$tgl_pesan</td>
		<td>$alamat</td>
		<td>$email</td>
		<td>$no_telp</td>
		<td>$pilihan_paket</td>
		
		<td><a href='hapus_pesanan.php?no_pesanan=$no_pesanan'>Hapus</a></br></br>
			<a href='form_edit_pesanan.php?no_pesanan=$no_pesanan'>Edit</a>
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

