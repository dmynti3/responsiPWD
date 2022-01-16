<?php
$connect = mysqli_connect("localhost","root","","pwdklinik");

function query($query){
    global $connect;
    $result = mysqli_query($connect, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows;
}
function cari($keyword){
    $query = "SELECT * FROM produk WHERE 
                nama_produk LIKE '%$keyword%' OR
                id_produk LIKE '%$keyword%'
            ";
    return query($query);
}
function tambah($data){
    global $connect;
    $id_produk = $data["id_produk"];
    $nama_produk = $data["nama_produk"];
    $harga_produk = $data["harga_produk"];

    $query = "INSERT INTO produk VALUE ('','$id_produk','$nama_produk','$harga_produk')";
    mysqli_query($connect,$query);
    return mysqli_affected_rows($connect);
}
function hapus($no){
    global $connect;
    mysqli_query($connect,"DELETE FROM produk WHERE no = $no");
    return mysqli_affected_rows($connect);
}
function ubah($data){
    global $connect;
    $no = $data["no"];
    $id_produk = $data["id_produk"];
    $nama_produk = $data["nama_produk"];
    $harga_produk = $data["harga_produk"];
    $query = "UPDATE produk SET 
                id_produk = '$id_produk',
                nama_produk = '$nama_produk',
                harga_produk = '$harga_produk'
                WHERE no = $no;
                ";
    mysqli_query($connect,$query);
    return mysqli_affected_rows($connect);
}

?>