<?php
include "koneksi.php";

$nama_produk = $_POST['nama_produk'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

$query = "INSERT INTO produk (nama_produk, harga, stok)
          VALUES ('$nama_produk', '$harga', '$stok')";

if (mysqli_query($koneksi, $query)) {
    header("Location: index.php");
} else {
    echo "Data gagal ditambahkan: " . mysqli_error($koneksi);
}
?>