<?php
// Nama host, username, password, dan nama database
$koneksi = mysqli_connect("localhost", "root", "", "laundry_firstha");

// Periksa koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>