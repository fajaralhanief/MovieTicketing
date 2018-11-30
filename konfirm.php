<?php
	include 'fkonek.php';

	$kode = $_GET['kode'];
	$username = $_GET['username'];

	$koneksi = fkonek_db();


	$query = mysqli_query("UPDATE verifikasi_email SET aktif = 'Y' WHERE kode = '".$kode."'") or die (mysqli_error());

	if($query) {
		echo "Member dengan username <strong>".$username."</strong> telah diaktifkan";
	} else {
		echo "Gagal aktif";
	}
?>