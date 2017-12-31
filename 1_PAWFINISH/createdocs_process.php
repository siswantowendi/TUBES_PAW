
<?php
	
	include "koneksi.php";
	if(isset($_POST["submitee"])){

		$x=$_POST['no'];		
		$a=$_POST['id_pas'];
		$b=$_POST['kode_periksa'];

		if($_POST['kat']=='en'){
		
			$c=$_POST['T4'];
			$d=$_POST['T3'];
			
			$QUERY="INSERT INTO endokrin SET no='$x',id_pas='$a', kode_periksa='$b',T4='$c',T3='$d'";

		}else if($_POST['kat']=='gol'){
			$c = $_POST['golongan'];
			$d = $_POST['rhesus'];

			$QUERY = "INSERT into goldar set no='$x',id_pas='$a', kode_periksa='$b', golongan='$c', rhesus='$d' ";
		}

		mysql_query($QUERY) or die (error_reporting());
		header("location: index.php");
	}else{
		die('gagal');
	}

?>