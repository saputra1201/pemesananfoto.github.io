<html>
<head>
    <title>Manajemen Saran</title>
    <link rel="stylesheet" href="style_dalam.css" />
   </head>
   <body>
   	
   
<div class="manajemen-saran">



<h2 align=center>Manajemen Kritik dan Saran</h2>
<form action="" method="post">
	<input type="text" name="keyword">
	<input type="submit" name="search">
</form>

<?php
include "koneksi.php";
if(isset($_POST['keyword']))
{
	$keyword = $_POST['keyword'];
	$sql = "select * from tabel_saran where nama like '%$keyword%'";
}
else{
	$sql = "select * from tabel_saran order by no_saran";
}

$hasil = mysql_query($sql);

echo "<table border=1>
	<tr>
		
		<td>No</td>
		<td>NAMA</td>
		<td>EMAIL</td>
		<td>NO TELPON</td>
		<td>SARAN</td>
		<td>Ket</td>
		
	</tr>";
	$i=1;
while($record = mysql_fetch_array($hasil))
{
$no_saran = $record['no_saran'];
$nama = $record['nama'];
$email = $record['email'];
$no_telp = $record['no_telp'];
$saran = $record['saran'];



echo "<tr>
	
		<td>$no_saran</td>
		<td>$nama</td>
		<td>$email</td>
		<td>$no_telp</td>
		<td>$saran</td>
		
		
		<td><a href='hapus_saran.php?no_saran=$no_saran'>Hapus</a></br></br>
			
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
