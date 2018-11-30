<?php
session_start();
$varPHP = $_POST['media'];
$varPHP1 = $_POST['media1'];
$_SESSION['jam'] = $varPHP;
$_SESSION['bioskop'] = $varPHP1;
if(!$_SESSION['jam'] == ""){
	echo "variabel javascript yang telah diisikan ke variabel php : $varPHP";
	echo "variabel javascript yang telah diisikan ke variabel php 2 : $varPHP1";
	
	echo  $_SESSION['jam'];
	echo  $_SESSION['bioskop'];
	echo  $_SESSION['hari'];
	echo  $_SESSION['tanggal'];
	echo  $_SESSION['film'];
	header("location:kursi.php");
}else{
	echo "<script>alert('Anda belum pilih jadwal');history.go(-1);</script>";
}
?>
