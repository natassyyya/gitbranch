<?php
include "koneksi.php";
$data = mysqli_query($koneksi, "SELECT * FROM produk");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Website Data Produk</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Data Produk</h1>

    <a href="tambah.php" class="btn">Tambah Produk</a>

    <table>
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>

        <?php
        $no = 1;
        while ($produk = mysqli_fetch_assoc($data)) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $produk['nama_produk']; ?></td>
            <td>Rp <?php echo number_format($produk['harga'], 0, ',', '.'); ?></td>
            <td><?php echo $produk['stok']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $produk['id']; ?>" class="btn-edit">Edit</a>
                <a href="hapus.php?id=<?php echo $produk['id']; ?>" class="btn-hapus" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>

</body>
</html>