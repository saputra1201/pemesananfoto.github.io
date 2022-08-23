<HTML>
  <head>
    <title>UKM</title>
    <link rel="stylesheet" href="style_dalam.css" />
  </head>

<body>

<div id="wrapper">
<div class="menu-admin-login">

<?php
session_start();
include "koneksi.php";
if (isset($_SESSION['user']))
{
  $user=$_SESSION['user'];
  $a=mysql_query("select * from tabel_admin where username='$user'");
  if (mysql_num_rows($a) < 1)
  {
    
    include "form_admin.php";
  }
else{
  $b=mysql_fetch_array($a);
  echo "Hello, $b[username]";
  echo "<br><a href='logout.php'>logout</a>";
  echo "<br><a href='manajement_admin.php'>Manajemen Admin</a>
        <br><a href='manajemen_anggota.php'>Manajemen anggota</a>
        <br><a href='manajemen_pesanan.php'>Manajemen pesanan</a>
        <br><a href='manajemen_saran.php'>Manajemen Saran</a>";
}
}
else{
  echo "Login Admin!";
  include "form_admin.php";
}
?>

</div>
</div>

</body>
</HTML>