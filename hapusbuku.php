<?php

include '../koneksi.php';

$id_buku=$_GET['id_buku'];
$query = mysqli_query($koneksi, "DELETE FROM buku WHERE buku.id_buku='$id_buku'");

if($query>0);
{
    echo "
    <script>
    alert('data berhasil dihapus');
    document.location.href = 'indexbuku.php';
    </script>
    ";
}


?>