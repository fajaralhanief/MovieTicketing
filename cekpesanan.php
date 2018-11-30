<?php
session_start();

$jml = $_POST['media'];
$no = $_POST['media1'];
$harga = $_POST['media2'];
$_SESSION['totalkursi']= $jml;
$_SESSION['nomorkursi']= $no;
$_SESSION['hargakursi']= $harga;

if($_SESSION['nomorkursi'] != ""){
	if(isset($_SESSION['nama'])){

		include 'fkonek.php';

		$koneksi = fkonek_db();
		$login    = mysqli_query($koneksi, "select * from pesanan");
		$hitung   = mysqli_num_rows($login);

		if($hitung<10){
			$id_pesanan = "P000".$hitung;
		}else{
			$id_pesanan = "P00".$hitung;
		}
		

		$_SESSION['id_pesanan']=$id_pesanan;
		$jam = $_SESSION['jam'];
		$bioskop=  $_SESSION['bioskop'];
		$hari = $_SESSION['hari'];
		$tanggal = $_SESSION['tanggal'];
		$film =  $_SESSION['film'];
		$totalkursi =  $_SESSION['totalkursi'];
		$nomorkursi=  $_SESSION['nomorkursi'];
		$harga =  $_SESSION['hargakursi'];
		$nama = $_SESSION['nama'];
		$id_customer = $_SESSION['id_customer'];


		$koneksi = fkonek_db();
		$sql = "select * from pesanan";
		$aksi = mysqli_query($koneksi,$sql);
		
		echo $id_pesanan;
		echo $jam ;
		echo $bioskop;
		echo $hari;
		echo $tanggal ;
		echo $film ;
		echo $totalkursi;
		echo $nomorkursi;
		echo $harga ;
		echo $nama;
		echo $id_customer ;
		$input ="INSERT INTO pesanan (id_pesanan, id_customer,film, bioskop, jadwal, totalkursi, nomorkursi, harga) VALUES ('$id_pesanan', '$id_customer', '$film', '$bioskop',  '$hari, $tanggal Mei 2018', '$totalkursi','$nomorkursi', '$harga')";
		$result = mysqli_query($koneksi,$input);

		if($result) 
		{
		echo "<script>alert('Data Berhasil Tersimpan'); </script>";
		header("location:pesanan.php");
		}
		else 
		{
		echo "<script>alert('Data Gagal Tersimpan');history.back(-1);</script>";

		}
	}else{		

		$_SESSION['id_pesanan']=$id_pesanan;
		header("location:login.php");
	}
}else if($_SESSION['nomorkursi'] == ""){
	echo "<script>alert('Anda Belum Memilih Kursi');history.back(-1)</script>";
}


?>