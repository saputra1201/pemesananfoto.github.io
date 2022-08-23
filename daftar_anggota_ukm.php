<HTML>
  <head>
    <title>Daftar anggota UKM</title>
    <link rel="stylesheet" href="style_dalam.css" />
  </head>
<body>

<div class='daftar-anggota-ukm'>
<h2 align=center>Daftar anggota UKM</h2>

<form action="" method="post">
  <input type="text" name="keyword">
  <input type="submit" name="search">
</form>


<a href="form_daftar_anggota_baru.php">Daftar Sebagai Anggota baru</a></br></br>
<?php
include "koneksi.php";
if(isset($_POST['keyword']))
{
  $keyword = $_POST['keyword'];
  $sql = "select * from tabel_anggota where nama like '%$keyword%'";
}
else{
  $sql = "select * from tabel_anggota order by id_anggota desc";
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
    <td>NO TELP</td>
    <td>JABATAN</td>
    
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
    
    
  </tr>";
  $i++;
}
echo "</table>

</br>
<a href='index.html'>Kembali</a>";
?>
</div>
</body>

  </HTML>

