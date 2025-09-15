<?php
session_start();

// Menghapus semua session yang ada
session_destroy();

// Mengalihkan halaman kembali ke halaman login sambil mengirimkan pesan logout melalui URL
header("location:../index.php?pesan=logout");
?>
