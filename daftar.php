<?php 
session_start(); 
include"fkonek.php"; 
$nama=$_POST['nama']; 
$email=$_POST['email']; 
$password=$_POST['password']; 
$passwordbaru=md5('$password'); 
$length = 10; 
$randomString = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length); 

$sql=mysqli_query("INSERT INTO pengguna(nama,email,password,kode) values('$nama','$email','$passwordbaru','$randomString')"); 
if($sql){ 
$to = "$email"; 
$subject = "Verifikasi Akun"; 
$message = " 
<html>  
<head> 
<title>Verification Account</title> 
</head> 
<body> 
<p>Terimakasih Telah Bergabung, aktivasi <a href='aktiv.php?ref=$randomString'>Aktiv<a></p> 
</body> 
</html> 
"; 
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
$headers .= 'From: <fajaralhanief@gmail.com>' . "\r\n"; 
mail($to,$subject,$message,$headers); 
}else{ 
echo"<script>alert('Gagal Daftar')</script>"; 
} 
?> 