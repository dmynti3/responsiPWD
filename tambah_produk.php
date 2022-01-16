<?php
require 'fungsi.php';
if(isset($_POST["submit"])){
    if(tambah($_POST)> 0){
        echo "
            <script>
                alert('data berhasil ditambahkan');
                document.location.href = 'produk.php';
            </script>
        ";
    }
    else{
        echo "
            <script>
                alert('data gagal ditambahkan');
                document.location.href = 'produk.php';
            </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah</title>
</head>
<style>
    body{
        background: -webkit-linear-gradient(bottom,#800080,#DDA0DD);
        background-repeat: no-repeat;
    }
    #card{
        background: oldlace;
        border-radius: 8px;
        box-shadow: 1px 2px 8px rgba(0,0,0,0.65);
        height: 410px;
        margin: 6rem auto 8.1rem auto;
        width: 329px;
    }
</style>
<body>
<div id="card">
    <h1>Tambah Data Produk</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="id_produk">ID Produk</label><br>
                <input type="text" name="id_produk" id="id_produk">
            </li>
            <li>
                <label for="nama_produk">Nama Produk</label><br>
                <input type="text" name="nama_produk" id="nama_produk">
            </li>
            <li>
                <label for="harga_produk">Harga Produk</label><br>
                <input type="text" name="harga_produk" id="harga_produk">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>
</div>
</body>
</html>