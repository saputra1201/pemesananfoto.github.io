<?php
include "koneksi.php";
$id = $_GET['no_pesanan'];
$sql = "delete from tabel_pesanan where no_pesanan=$id";
$hasil = mysql_query($sql);

require 'manajemen_pesanan.php';
?>