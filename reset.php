<?php
	include ("fkonek.php");
	session_start();

	$passlama=$_POST['passwordlama'];
	$passbaru=$_POST['passwordbaru'];
	$passbaru1=$_POST['passwordbaru1'];
	$nama = $_SESSION['nama'] ;
	$koneksi = fkonek_db();
	$sql = "select * from customer";
	$aksi = mysqli_query($koneksi,$sql);
	$login = mysqli_query($koneksi, "select * from customer where nama='$nama'");
	$user = mysqli_fetch_array($login);
  
	echo  $_SESSION['id_customer'] ; ?><br><?php
	echo  	$nama = $_SESSION['nama'] ; ?><br><?php
	echo  $_SESSION['password'] ; ?><br><?php
	echo  $passlama ; ?><br><?php
	echo $passbaru; ?><br><?php
	
	if($passlama ==  $_SESSION['password'] ){
		if($passbaru == $passbaru1){
			$input=mysqli_query($koneksi,"UPDATE `customer` SET `password` = '$passbaru' WHERE `customer`.`id_customer` = 'elhaneef123';");
			 $_SESSION['password'] = $passbaru;
			 echo "<script>alert('Password Berhasil Diubah');history.go(-3); </script>";
		}else{
			echo "<script>alert('Password Baru tidak cocok');history.go(-1); </script>";
		}		
	}else{
			echo "<script>alert('Password Lama tidak cocok');history.go(-1); </script>";
	}

/*
	
	$login = mysqli_query($koneksi, "select * from customer where nama='$nama'");
	$result   = mysqli_num_rows($login);
	


   
*/
    
?>