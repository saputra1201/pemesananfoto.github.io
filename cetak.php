   <HTML>
   <head>
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
   </head>
   <?php
                    include "koneksi.php";
                    $nm = $_GET['id'];
                    $a=mysql_query("select * from tabel_pesanan where nama='$nm'");
                    $b=mysql_fetch_array($a);
                   
                    if (!empty($b)){
                    echo"
                    <table border = 3 width = 350px align=center >
                    <h4 align=center>no pesanan $b[no_pesanan]</h4>
                    <tr>
                         <td>nama</td>
                         <td>$b[nama]</td>
                    </tr>
                    <tr>
                         <td>nim</td>
                         <td>$b[nim]</td>
                    </tr>
                    <tr>
                         <td>jurusan</td>
                         <td>$b[jurusan]</td>
                    </tr>
                    <tr>
                         <td>angkatan</td>
                         <td>$b[angkatan]</td>
                    </tr>
                     <tr>
                         <td>tanggal pesan</td>
                         <td>$b[tgl_pesan]</td>
                    </tr>
                    <tr>
                         <td>alamat</td>
                         <td>$b[alamat]</td>
                    </tr>
                    <tr>
                         <td>email</td>
                         <td>$b[email]</td>
                    </tr>
                    <tr>
                         <td>no telpon</td>
                         <td>$b[no_telp]</td>
                    </tr>
                    <tr>
                         <td>pilihan paket</td>
                         <td>$b[pilihan_paket]</td>
                    </tr>

                    </table>
                    ";
                    

echo "<div class='hidden-print'>

                    <center><a href='index.html'>
                    <button onClick='window.print();''>print</button>
                    </a><center>";
}
                    else {
                    echo"nbjb";
                   
                    }
                       echo"</div>";      
                    ?>
                    </HTML>