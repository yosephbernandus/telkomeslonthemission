<?php

/* 
    KONEKSI KE DATABASE
 */

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'telkomsel_final';

$koneksi = mysqli_connect($host, $username, $password, $dbname);

if (!$koneksi) {
    echo 'Koneksi gagal!';
} 