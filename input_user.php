<?php
    include "koneksi.php";
    $id_user = $_POST['id_user'];
    $nama = $_POST['nama'];
    $sandi = $_POST['sandi'];
$sql = "INSERT INTO user(nama,sandi)VALUES('$nama','$sandi')";
$query=mysqli_query($con,$sql);

mysqli_close($con);

header('location:tampil_user.php');
?>