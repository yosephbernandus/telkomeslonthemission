<?php
include 'header.php';

$id = $_GET['id']; // mengambil id dari url

$kueri = "DELETE FROM events WHERE id=$id"; // sesuaikan kueri dengan kebutuhan Anda
$hasil = mysqli_query($koneksi, $kueri);

if ($hasil) {
    header('Location: event.php'); // kembali ke index.php bila berhasil. Ubah index.php sesuai kebutuhan Anda
}
?>