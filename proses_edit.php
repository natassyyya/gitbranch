<?php
include "koneksi.php";

$id = $_POST['id'];
$nama_produk = $_POST['nama_produk'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

$query = "UPDATE produk SET 
          nama_produk='$nama_produk',
          harga='$harga',
          stok='$stok'
          WHERE id='$id'";

if (mysqli_query($koneksi, $query)) {
    header("Location: index.php");
} else {
    echo "Data gagal diupdate: " . mysqli_error($koneksi);
}
?>