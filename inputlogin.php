<?php
  include 'fkonek.php';


  $email = $_POST['email'];
  $password = $_POST['password'];

  $koneksi = fkonek_db();
  $sql = "select * from customer";
  $aksi = mysqli_query($koneksi,$sql);

  $login    = mysqli_query($koneksi, "select * from customer where email='$email' and password='$password'");
  $result   = mysqli_num_rows($login);


  if($result>0){
      $user = mysqli_fetch_array($login);
      session_start();
      $_SESSION['id_customer'] = $user['id_customer'];
      if(!isset($_SESSION['nomorkursi'])){
        
        $_SESSION['id_customer'] = $user['id_customer'];
        $_SESSION['nama'] = $user['nama'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['password'] = $user['password'];
      	echo ("<script LANGUAGE='JavaScript'> window.alert('Login Berhasil');window.location.href='index.php';</script>");
    	}else if(isset($_SESSION['nomorkursi'])){
        
        $_SESSION['id_customer'] = $user['id_customer'];
        $_SESSION['nama'] = $user['nama'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['password'] = $user['password'];

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

        $input ="INSERT INTO pesanan (id_pesanan, id_customer,film, bioskop, jadwal, totalkursi, nomorkursi, harga) VALUES ('$id_pesanan', '$id_customer', '$film', '$bioskop',  '$hari, $tanggal Mei 2018', '$totalkursi','$nomorkursi', '$harga')";
        $result = mysqli_query($koneksi,$input);

        if($result){
          echo ("<script>alert('Data Berhasil Tersimpan');window.location.href='pesanan.php';</script>");
        }else{
          echo ("<script>alert('Data Gagal Tersimpan');history.back(-1);</script>");
        }
      }
  }else{
      echo ("<script>alert('Email atau Password yang anda masukkan salah');history.go(-1);</script>");
  }
?>