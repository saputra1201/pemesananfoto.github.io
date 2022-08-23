<?php
include "koneksi.php";
$user=$_POST["user"];
$pass=$_POST["pass"];

$a=mysql_query("select * from tabel_admin where
				username='$user'
				AND password = '$pass'");
$b=mysql_fetch_array($a);
if($b['username']==$user AND $b['password']==$pass)
{
	session_start();
	$_SESSION['user']=$user;
	header("location:halaman_admin.php");
}
else { echo "username atau password salah!";
header("location:form_login_admin.php");
}
?>