<?php 
include 'conn.php';
$nama = $_POST['Nama'];
$email =  $_POST['email'];
$NomorHP = $_POST['NomorHP'];
$ticketType = $_POST['ticketType'];
if (isset($_POST['submit'])) {
	$q = mysqli_query($con,"INSERT INTO `belitiket` (`nama`, `email`, `hp`, `tipe_tiket`) VALUES ('$nama', '$email', '$NomorHP', '$ticketType');");
	if ($q) {
		echo "<script>alert('I am an alert box!');</script>";
		echo "<script>callback()</script>";
		header('location:index.php');
		// header('location:https://api.whatsapp.com/send?phone=6285741367550&text=Haloo%20Kak%2c%0aSaya%20'.$nama.'%20sudah%20transfer%20uangnya%0a%0aBerikut%20Detail%20Bukti%20Transfernya%20%3a%0a-%20Jam%20Transfer%20%3a%20%0a-%20Tgl%20Transfer%20%3a%0a-%20Foto%20Struk%20Bukti%20Transfer%20%3a%20%0a%0aTerimakasih&source=&data=');
	}else {
		echo "string";
	}
}
?>