

<?php


include "koneksi.php";
$id = $_GET['id_user'];
$sql = "delete from tabel_admin where id_user=$id";
$hasil = mysql_query($sql);
$message = "data telah di hapus";
echo "<script type='text/javascript'>alert('$message');</script>";


require 'manajement_admin.php';
?>