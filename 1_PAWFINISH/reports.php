<?php
include('koneksi.php'); // Memasuk-kan skrip Login 
 session_start();
if(isset($_SESSION["nama_admin"])){

?>
 
<!DOCTYPE html>
<!--Bagian Tetap--> 
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

	<!--Bagian Tetap-->


<div class="container">
<section id="main">
<table style="margin-left:70px;">				
<form action="searching_print.php"  method="post" >
<tr >
<strong><h1> Cari Data Pasien<h1> </strong>
</tr>
<tr>Id Registrasi :<input type="text" name="id_pas"></tr>
<tr>&nbsp;&nbsp;<button type="SUBMIT" name="SUBMIT" id="SUBMIT" value="searching_print" style="text-align: center;background: gray;color: black; border-radius: 15px;margin-right: 30px;" >CARI</button></tr>
</form>
<!-- Endokrinologi-->
<h1>Endokrinologi</h1>

<?php
echo "<center>";

echo "<table border='1' cellpadding='5' cellspacing='8'>";
echo "
<tr bgcolor='orange'border='orange'>
<td>Nomor</td>
<td>Id Regitrasi</td>
<td>Jenis Pemeriksaan</td>
<td>T4</td>
<td>T3</td>
<td>Hasil Pemeriksaan</td>
</tr>";  

   	$nomor=0;
    $query_mysql = mysql_query("SELECT * FROM endokrin ORDER BY no ASC")or die(mysql_error());
    while($data = mysql_fetch_array($query_mysql)){
    $nomor++;	
 
 $no= $data['no'];

?>

<tr>
<td><?php echo $nomor?></td>
<td><?php echo $data['id_pas']?></td>
<td><?php echo$data['kode_periksa']?></td>
<td><?php echo$data['T4']?></td>
<td><?php echo$data['T3']?></td>
<td><a href="view2.php?no=<?php echo $no?>"><button>Cetak</button></a>&nbsp;<button>Edit</button>

</td>
</tr>
<?php
}
echo "</table>";
?>


<!--End of It-->
    


				<br>
				<li><a href="index.php">Back</a></li>
				<br><br><br><br>


		</section>
   </div>



<?php
	if(isset($_GET["page"])){
		$page = $_GET["page"];
		if(	$page=="logout"){
			session_destroy();
			header("location: login_pasien.php");
		}
	}
?>

   
   <footer>
		<p>Web by Rizkhita, Copyright &copy;2017</p>
	</footer>
 
  </body>
</html>
<?php } else{
header("location: login_pasien.php");	
}?>