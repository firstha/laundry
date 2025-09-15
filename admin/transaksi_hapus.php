<?php 
//menghubungkan koneksi
include '../koneksi.php';

//menangkap data id yang dikirim melalui url
$id = $_GET['id'];

//menghapus transaksi
mysqli_query($koneksi,"delete from transaksi where transaksi_id='$id'");

//menghapus data pakaian dlm transaksi ini
mysqli_query($koneksi,"delete from pakaian where pakaian_transaksi='$id'");

//mengalihkan halaman ke halaman transaksi
header("location:transaksi.php");
 ?>