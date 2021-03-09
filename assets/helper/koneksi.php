<?php
$koneksi = new mysqli('localhost', 'root', '','dbmulti_user');
if ($koneksi->connect_error) {
    die("Koneksi Gagal: " . $koneksi->connect_error);
} 
?>