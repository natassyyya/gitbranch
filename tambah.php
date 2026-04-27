<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>➕ Tambah Data Produk</h1>

    <form action="proses_tambah.php" method="POST">
        <label>Nama Produk</label>
        <input type="text" name="nama_produk" placeholder="Masukkan nama produk..." required>

        <label>Harga</label>
        <input type="number" name="harga" placeholder="Masukkan harga produk..." required>

        <label>Stok</label>
        <input type="number" name="stok" placeholder="Masukkan jumlah stok..." required>

        <div class="form-buttons">
            <button type="submit">💾 Simpan</button>
            <a href="index.php" class="btn">🔙 Kembali</a>
        </div>
    </form>
</div>

</body>
</html>