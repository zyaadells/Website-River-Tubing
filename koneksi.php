<?php

$server = "localhost:3307";
$username = "root";
$password = "";
$database_name = "register";

$koneksi = mysqli_connect($server,$username,$password,$database_name);

if ($koneksi) {
    echo "Berhasil Connect Database";
} else {
    echo "Gagal Connect";
}
