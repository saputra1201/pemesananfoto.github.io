<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$comment = $_POST['comment'];



include "koneksi.php";
$sql = "insert into tabel_saran values
		('','$name','$email','$phone','$comment')";
$hasil = mysql_query($sql);
header("location:asasas.php");
?>