<?php
include "koneksi.php";

$id = $_GET['id'];

$query = "DELETE FROM produk WHERE id='$id'";

if (mysqli_query($koneksi, $query)) {
    header("Location: index.php");
} else {
    echo "Data gagal dihapus: " . mysqli_error($koneksi);
}
?>