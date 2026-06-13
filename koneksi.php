<?php
$server   = "localhost";
$username = "root";
$password = "";
$database = "db_tugas";

// Membuat koneksi
$con = mysqli_connect($server, $username, $password, $database);

// Mengecek koneksi
if (!$con) {
    die("Koneksi database gagal : " . mysqli_connect_error());
}

// Function menutup koneksi
function db_disconnect($con) {
    mysqli_close($con);
}
?>