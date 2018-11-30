<?php
	include ("fkonek.php");
	
	$id_customer=$_POST['id_customer'];
	$nama=$_POST['nama'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	$koneksi = fkonek_db();
	$sql = "select * from customer";
	$aksi = mysqli_query($koneksi,$sql);
	

	$input=mysqli_query($koneksi,"INSERT INTO customer (id_customer, nama, email, password) VALUES ('$id_customer' ,'$nama', '$email', '$password')");
	$login = mysqli_query($koneksi, "select * from customer where nama='$nama'");
	$result   = mysqli_num_rows($login);
	
if($result>-1){
    $user = mysqli_fetch_array($login);
    session_start();
    $_SESSION['id_customer'] = $user['id_customer'];
    $_SESSION['nama'] = $user['nama'];
    $_SESSION['email'] = $user['email'];
    header("location:login.php");
/*
    $length = 10; 
$randomString = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length); 
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
*/
    

}else{
    echo "<script>alert('Gagal Tersimpan');history.go(-1); </script>";
}

?>