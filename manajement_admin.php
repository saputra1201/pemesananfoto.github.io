
<html>
<head>
    <title>Manajemen Admin</title>
    <link rel="stylesheet" href="style_dalam.css" />
   </head>
<body>

<div class="manajement-admin">


<h2 align=center>Manajemen Admin</h2>
<form action="" method="post">
	<input type="text" name="keyword">
	<input type="submit" name="search">
</form>
<a href="form_tambah_admin.php">Tambah Admin</a></br></br>


<?php
include "koneksi.php";
if(isset($_POST['keyword']))
{
	$keyword = $_POST['keyword'];
	$sql = "select * from tabel_admin where username like '%$keyword%'";
}
else{
	$sql = "select * from tabel_admin order by id_user";
}

$hasil = mysql_query($sql);

echo "<table border=1>
	<tr>
		<td>No</td>
		<td>Id Admin</td>
		<td>username</td>
		<td>Password</td>
		<td>Nim</td>
		<td>Nama Lengkap</td>
		<td>Ket</td>
		
	</tr>";
	$i=1;
while($record = mysql_fetch_array($hasil))
{
$id = $record['id_user'];
$username = $record['username'];
$password = $record['password'];
$nim = $record['nim'];
$nama_lengkap = $record['nama_lengkap'];


echo "<tr>
		<td>$i</td>
		<td>$id</td>
		<td>$username</td>
		<td>$password</td>
		<td>$nim</td>
		<td>$nama_lengkap</td>
		
		<td><a href='hapus_admin.php?id_user=$id'>Hapus</a></br></br>
			<a href='form_edit_admin.php?id_user=$id'>Edit</a>
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