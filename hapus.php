<?php
require 'fungsi.php';
$no = $_GET["no"];

if( hapus($no)> 0){
    echo "
            <script>
                alert('data berhasil dihapus');
                document.location.href = 'produk.php';
            </script>
        ";
}
else{
    echo "
            <script>
                alert('data gagal dihapus');
                document.location.href = 'produk.php';
            </script>
        ";
}
?>