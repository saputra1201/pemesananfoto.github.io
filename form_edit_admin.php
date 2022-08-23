<HTML>
<head>
		<title>HOOH</title>
		<link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="tambah-user">
<center>Edit User</center></br>
<?php
$id = $_GET['id_user'];

include "koneksi.php";
$sql = "select * from tabel_admin where id_user=$id";
$hasil = mysql_query($sql);
$record = mysql_fetch_array($hasil);
$id_user = $record['id_user'];
$username = $record['username'];
$password = $record['password'];
$nim = $record['nim'];
$nama_lengkap = $record['nama_lengkap'];

?>

<form action="proses_edit_admin.php?id_user=<?php echo $id; ?>" method='post'>
<table>
	<tr>
		<td>Username </td>
		<td><input type="text" name="username" value = "<?php echo $username?>" size="53"></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="text" name="password" value = "<?php echo $password?>" size="53"></td>
	</tr>
	<tr>
		<td>NIM </td>
		<td><input type="text" name="nim" value = "<?php echo $nim?>" size="53"></td>
	</tr>
	<tr>
		<td>Nama Lengkap</td>
		<td><input type="text" name="nama_lengkap" value = "<?php echo $nama_lengkap?>" size="53"></td>
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