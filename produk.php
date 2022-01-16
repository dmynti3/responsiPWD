<?php
    require 'fungsi.php';
    $produk = query("SELECT * FROM produk");

    if(isset($_POST["cari"])){
        $produk = cari($_POST["keyword"]);
    }
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body bgcolor="#BA55D3">
    <h1>Daftar Treatment D'Rejuva</h1>
    <form action="" method="post">
        <input type="text" name="keyword" size="50px" autofocus placeholder="masukkan keyword pencarian..." autocomplete="off">
        <button type="submit" name="cari">Cari!</button>
    </form>
    <br>
    <form action="tambah_produk.php">
      <button type="submit">Tambah Data Produk</button>
    </form>
    <form action="cetak_produk.php">
      <button type="submit" class="btn mr-2">Cetak Produk</button>
    </form>
    <form action="daftarproduk_json.php">
      <button type="submit" class="btn mr-2">JSON</button>
    </form>
    <form action="daftarproduk_xml.php">
      <button type="submit" class="btn mr-2">XML</button>
    </form>
    <br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>ID</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($produk as $row): ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $row["id_produk"];?></td>
            <td><?= $row["nama_produk"];?></td>
            <td><?= $row["harga_produk"];?></td>
            <td>
                <a href="ubah.php?no=<?= $row["no"];?>">Edit</a> |
                <a href="hapus.php?no=<?= $row["no"];?>">Hapus</a>
            </td>
        </tr>
        <?php $i++;?>
        <?php endforeach; ?>
    </table>
</body>
</html>
