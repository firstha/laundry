<?php 
include '../koneksi.php';

// menangkap data yang dikirim dari form
$harga = $_POST['harga'];

// update data
mysqli_query($koneksi, "UPDATE harga SET harga_per_kilo='$harga'");

// mengalihkan halaman kembali ke halaman pelanggan
header("location:harga.php")
 ?>