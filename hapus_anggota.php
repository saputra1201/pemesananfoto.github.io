<?php
include "koneksi.php";
$id = $_GET['id_anggota'];
$sql = "delete from tabel_anggota where id_anggota=$id";
$hasil = mysql_query($sql);

require 'manajemen_anggota.php';
?>