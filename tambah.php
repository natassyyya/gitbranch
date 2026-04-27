<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Tambah Data Produk</h1>

    <form action="proses_tambah.php" method="POST">
        <label>Nama Produk</label>
        <input type="text" name="nama_produk" required>

        <br><br>

        <label>Harga</label>
        <input type="number" name="harga" required>

        <br><br>

        <label>Stok</label>
        <input type="number" name="stok" required>

        <br><br>

        <button type="submit">Simpan</button>
        <a href="index.php" class="btn">Kembali</a>
    </form>
</div>

</body>
</html>