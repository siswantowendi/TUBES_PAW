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
	<link rel="stylesheet"type="text/css" href="admin.css">

		
  
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
				<form action="register_process.php" method="post">
			
				<table>
				<tr>
				<h1>Registry a New Account</h1>
					<td><h1>Nama</h1></td>
					<td>:</td>
					<td><h1><input type="text" name="nama"/></td>
					<td><h1>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						Username
					</h1></td>
					<td>:&nbsp;&nbsp;</td>
					<td><input type="text" name="user"/></td>
				</tr>
				<tr>
					<br><td><h1>Alamat</h1></td>
					<td>:</td>
					<td><input type="text" name="alamat"/></td>
					<td><h1>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						Password
					</h1></td>
					<td>:&nbsp;&nbsp;</td>
					<td><input type="text" name="pass"/></td>
				</tr>
				
				<tr>
					<br><td><h1>Tempat, tanggal lahir</h1></td>
					<td>:</td>
					<td><input type="text" name="ttl"/></td>
					<td>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<button type="submit" value="simpan" >SIMPAN</button>
					</td>
				</tr>
				<tr></tr>
				<tr>
					<br><td><h1>Jenis kelamin</h1></td>
					<td>:</td>
					<td><select name="jk" style="width=100px;">
						<option value="perempuan"><h1>perempuan</h1></option>
						<option value="laki-laki"><h1>laki-laki</h1></option>
					</select>
					</td>
				</tr>
				<tr></tr>
				<tr>
					<br><td><h1>Nomer Telepon</h1></td>
					<td>:</td>
					<td><input type="text" name="tlp"/></td>
				</tr>
				<tr></tr>
			   </table>			
		</form>

				<br></br>
				<br></br>
				<li><a href="as_admin.php" bgcolor="orange">Back</a></li>

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