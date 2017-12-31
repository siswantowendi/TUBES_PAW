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

	<table>
				

	<div class="container">
		<section id="main">
			<form  method="post">
				<table>
					<tr>
					<td><h1>Kode Pemeriksaan </h1></td>
					<td>:</td>
					<td><h1><input type="text" name="kjp"></td>
					<td><h1>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

					</h1></td>
					<td><button name="submit" type="submit" value="simpan" >SIMPAN</button></td>
					</tr>	
				</table>
			</form><br>
		<div style="border-bottom :3px solid orange;"></div>
		
		<?php
		

		if(isset($_REQUEST["submit"])){

			if(($_POST['kjp']=='en')){ ?>
			<table>
				<form method="post" action="createdocs_process.php">
					<tr>
					<br>
					<input type="hidden" name="no">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					Silahkan isi form sesuai dengan pemeriksaan laboratorium.
					<td><h1>ID Registrasi </h1></td>
					<td>:</td>
					<td><h1><input type="text" name="id_pas"></td>
					<td><h1>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						Jenis Pemeriksaan 
					</h1></td>
					<td>:&nbsp;&nbsp;</td>
					<td><input type="text" name="kode_periksa" value="Hormon dan Endokrin"></td>
				</tr>				
				<tr></tr>
				<tr>
					<br><td><h1>T3 </h1></td>
					<td>:</td>
					<td><input type="text" name="T3"/></td>
					<!--<td><h1>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						Tanggal Pemeriksaan 
					</h1></td>
					<td>:&nbsp;&nbsp;</td>
					<td><input type="text" name="user" value="Tangal pemeriksaan"></td>-->
				</tr>
				<tr></tr>
					<br><td><h1>T4 </h1></td>
					<td>:</td>
					<td><input type="text" name="T4"/></td>
					<td>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="hidden" name="kat" value="<?= $_POST['kjp']; ?>">
						<button type="SUBMIT" name="submitee" style="text-align: center;background: gray;color: black; border-radius: 15px;margin-right: 30px;" >oke</button>
					</td>
				</tr>
				</form>
			</table>
		<?php 
			}else if($_POST['kjp']=='gol'){ ?>
				<form method="post" action="createdocs_process.php">

					<strong><h1> Endokrinologi<h1> </strong>	
					<input type="hidden" name="no">
					<br>Id Registrasi :<input type="text" name="id_pas">
					<br>Kode Periksa :<input type="text" name="kode_periksa">
					<br>Golongan :<input type="text" name="golongan">
					<br>Rhesus :<input type="text" name="rhesus">
					<input type="hidden" name="kat" value="<?= $_POST['kjp']; ?>">
					<br>&nbsp;&nbsp;<button type="SUBMIT" name="submitee" style="text-align: center;background: gray;color: black; border-radius: 15px;margin-right: 30px;" >oke</button>
				</form>
		<?php }else{
				echo "inputan salah";
			}
		} ?>

<style type="text/css">
table{
	margin-left: 50px;
}
</style>

		</section>
	</div>
<?php } ?>
</body>
</html>

