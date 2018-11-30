<?php
	include ("fkonek.php");
	
	$nama=$_POST['id'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	$koneksi = fkonek_db();
	$sql = "select * from login";
	$aksi = mysqli_query($koneksi,$sql);
	

	$input="INSERT INTO login (email, nama, password) VALUES ('$email', '$nama', '$password')";
	$result = mysqli_query($koneksi,$input);

if($result) 
{
echo "<script>alert('Data Berhasil Tersimpan');history.go(-2); </script>";
}
else 
{
echo "<script>alert('Gagal Tersimpan');history.go(-1);</script>";
}


?>