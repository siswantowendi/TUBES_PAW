<?php
include('koneksi.php'); // Memasuk-kan skrip Login 
 session_start();
if(isset($_SESSION["nama_admin"])){

?>
 
<!DOCTYPE html>
<html>
  <head>
   	<meta charset="utf-8">
	<meta name= "viewport" content="width=device-width">
	<meta name= "description" content ="Selamat Datang di Web Prodia">
	<meta name= "keywords" content= "pokoknya mah visi misi singkatnya weh">
	<meta name= "author" content="Rizkhita Dong"> 
	<title>Laboratorium Klinik Prodia Banjaran | Cek Hasil Lab Online </title>
	<link rel="stylesheet"type="text/css" href="badanweb.css">

		
  
  </head>	
 <body>
	<header>
		<div class="container">
			<div id="branding">
				<h1><img src="prodia.png"></br>
				<span class="highlight"></h1></span>
	</div>
		<nav>
			<ul>
				<li><a href="index.php">Beranda</a></li>
				<li><a href="tentanglab.php">Tentang Prodia</a></li>
				<li><a href="layanan.php">Layanan & Fasilitas</a></li>
				<li class= "current"><a href="login_pasien.php">Cek Hasil Lab Online</a></li>
			</ul>

		</nav>
	</div>
	</header>

<div class="container">
<section id="main">
<table style="margin-left:70px;">				
<form action="searching.php"  method="post" >
<tr >
<strong><h1> Cari Data Pasien<h1> </strong>
</tr>
<tr>Id Registrasi :<input type="text" name="idreg"></tr>
<tr>&nbsp;&nbsp;<button type="SUBMIT" name="SUBMIT" id="SUBMIT" value="searching" style="text-align: center;background: gray;color: black; border-radius: 15px;margin-right: 30px;" >CARI</button></tr>
</form>

<?php
echo "<center>";

echo "<br></br>";
echo "<table border='1' cellpadding='5' cellspacing='8'>";
echo "
<tr bgcolor='orange'border='orange'>
<td>Id Pasien</td>
<td>Nama</td>
<td>Alamat</td>
<td>Tempat, Tanggal Lahir</td>
<td>Jenis Kelamin</td>
<td>Nomor Telepon</td>
<td>USERNAME</td>
<td>PASSWORD </td>
<td></td>


</tr>";  

   
    $query_mysql = mysql_query("SELECT * FROM pasien")or die(mysql_error());
    while($data = mysql_fetch_array($query_mysql)){

?>

<tr>
<td><?php echo $data['id_pas']?></td>
<td><?php echo$data['nama']?></td>
<td><?php echo$data['alamat']?></td>
<td><?php echo$data['ttl']?></td>
<td><?php echo$data['jk']?></td>
<td><?php echo$data['no_tlp']?></td>
<td><?php echo$data['username']?></td>
<td><?php echo$data['password']?></td>
<td><!--<a href="index.php">ha</a><a href="delete_data_karyawan(admin).php?id=<?php echo $var['id_karyawan']; ?>"?>Ha</a></td>-->
<a href="hapus.php?id_pas=<?php echo $data['id_pas']; ?>"><button>Hapus</button></a>
<a href="edit.php?id_pas=<?php echo $data['id_pas']; ?>"><button>Edit</button></a>
</td>
</tr>

<?php
}
echo "</table>";
?>
    


				<br>
				<li><a href="index.php">Back</a></li>
				<br><br><br><br>
<style type="text/css">
</table>

table tr form button{
	

}

</style>


		</section>
   </div>



   
	<footer>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="foot2.jpg">&nbsp;&nbsp;&nbsp;&nbsp;<img src="prodiaaa.jpg" >&nbsp;&nbsp;&nbsp;&nbsp;<img src="topbrand.png">&nbsp;&nbsp;&nbsp;&nbsp;<img src="proline.jpg">&nbsp;&nbsp;&nbsp;&nbsp;<img src="prodiaa.jpg" >&nbsp;&nbsp;&nbsp;&nbsp;<img src="inodia.png" >&nbsp;&nbsp;&nbsp;&nbsp;<img src="prosistem.jpg" >&nbsp;&nbsp;&nbsp;&nbsp;<img src="RRR.png"> 
		</p>
		
	</footer>
</body>
</html>
<?php } else{
header("location: login_pasien.php");	
}?>