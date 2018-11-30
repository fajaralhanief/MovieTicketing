<?php
include 'fkonek.php';
$koneksi = fkonek_db();

$email = $_POST['email'];
$password = $_POST['password'];
$login    = mysqli_query($koneksi, "select * from login where email='$email' and password='$password'");
$result   = mysqli_num_rows($login);
if($result>0){
    $user = mysqli_fetch_array($login);
    session_start();
    $_SESSION['nama'] = $user['nama'];

    header("location:index.php");
}else{
    echo "<script>alert('Email atau Password yang anda masukkan salah');history.go(-1);</script>";
}