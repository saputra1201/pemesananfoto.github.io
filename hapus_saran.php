<?php
include "koneksi.php";
$id = $_GET['no_saran'];
$sql = "delete from tabel_saran where no_saran=$id";
$hasil = mysql_query($sql);

require 'manajemen_saran.php';
?>