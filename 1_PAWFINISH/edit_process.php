<?php
include ("koneksi.php");
$aw=$_POST['id_pas'];
$a=$_POST['nama'];
$b=$_POST['alamat'];
$c=$_POST['ttl'];
$d=$_POST['jk'];
$g=$_POST['tlp'];
$e=$_POST['user'];
$f=$_POST['pass'];
$QUERY="UPDATE pasien SET id_pas='$aw',nama='$a',alamat='$b',ttl='$c',jk='$d',no_tlp='$g',username='$e',password='$f' where id_pas='$aw'";
      mysql_query($QUERY) or die (error_reporting());
      header("location: index.php");
    
?>