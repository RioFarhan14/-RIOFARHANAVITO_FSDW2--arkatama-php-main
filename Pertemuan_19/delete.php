<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Memeriksa koneksi
    if ($koneksi->connect_error) {
        die("Koneksi ke database gagal: " . $koneksi->connect_error);
    }

    // Menghapus data dari tabel users berdasarkan ID
    $sql = "DELETE FROM users WHERE id = '$id'";
    if ($koneksi->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
    $koneksi->close();
}
