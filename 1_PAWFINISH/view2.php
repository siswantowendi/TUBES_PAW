<?php ob_start(); ?>
<html>
<head>
  <title>Cetak PDF</title>
    
   <style>
   table {border-collapse:collapse; table-layout:fixed;width: 630px;}
   table td {word-wrap:break-word;width: 20%;}
   </style>
</head>
<body>
  
<h1 style="text-align: center;">Data Pemeriksaan</h1>
<table border="1" width="100%">
<tr>
  <th>NIS</th>
  <th>Nama</th>
  <th>Jenis Kelamin</th>
  <th>Telepon</th>
  <th>Alamat</th>
</tr>
<?php
// Load file koneksi.php
include_once ('koneksi.php');
 

$no = $_GET['no'];

$query =mysql_query( "SELECT * FROM endokrin  WHERE  no='$no'  ");
$query2=mysql_query( "SELECT pasien.nama FROM pasien inner join endokrin on endokrin.id_pas=pasien.id_pas WHERE  no='$no'  ");
$data= mysql_fetch_array($query);
$d= mysql_fetch_array($query2);
// Ambil jumlah data dari hasil eksekusi $sql
 // Ambil semua data dari hasil eksekusi $sql
        echo "<tr>";
        echo "<td>".$data['id_pas']."</td>";
        echo "<td>".$data['kode_periksa']."</td>";
        echo "<td>".$data['T3']."</td>";
        echo "<td>".$data['T4']."</td>"; 
        echo "<td>".$d['nama']."</td>";    
        echo "</tr>";

    

/*$query2=mysql_query( "SELECT pasien.nama FROM pasien inner join endokrin on endokrin.id_pas=pasien.id_pas WHERE  no='$no'  ");
$data= mysql_fetch_array($query2);
// Ambil jumlah data dari hasil eksekusi $sql
 // Ambil semua data dari hasil eksekusi $sql

        echo " nama :".$data['nama']."";*/

    


   
?>
</table>
</body>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();
        
require_once('html2pdf/html2pdf.class.php');
$pdf = new HTML2PDF('P','A4','en');
$pdf->WriteHTML($html);
$pdf->Output('Data Siswa.pdf', 'D');
?>