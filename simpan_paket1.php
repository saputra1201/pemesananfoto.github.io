<?php



include "koneksi.php";

$nama=$_POST['nama'];
$nim=$_POST['nim'];
$jurusan=$_POST['jurusan'];
$angkatan=$_POST['angkatan'];
$tanggal_pesan=$_POST['tanggal_pesan'];
$alamat=$_POST['alamat'];
$email=$_POST['email'];
$no_telp=$_POST['no_telp']; 
$paket=$_GET['paket']; 

 $n=mysql_query("insert into tabel_pesanan values('','$nama','$nim',
 	'$jurusan','$angkatan','$tanggal_pesan','$alamat','$email','$no_telp','$paket')");
 
if($n){
	echo "sukses";
	header("location:cetak.php?id=$nama");
}
else{echo "gagal!!! (data tidak lengkap / data sudah ada)";}
?>