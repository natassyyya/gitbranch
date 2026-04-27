<?php
include "koneksi.php";

$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM produk WHERE id='$id'");
$produk = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Edit Data Produk</h1>

    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $produk['id']; ?>">

        <label>Nama Produk</label>
        <input type="text" name="nama_produk" value="<?php echo $produk['nama_produk']; ?>" required>

        <br><br>

        <label>Harga</label>
        <input type="number" name="harga" value="<?php echo $produk['harga']; ?>" required>

        <br><br>

        <label>Stok</label>
        <input type="number" name="stok" value="<?php echo $produk['stok']; ?>" required>

        <br><br>

        <button type="submit">Simpan</button>
        <a href="index.php" class="btn">Kembali</a>
    </form>
</div>

</body>
</html>