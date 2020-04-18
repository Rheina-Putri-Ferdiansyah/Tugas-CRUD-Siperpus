<?php

include '../koneksi.php';

$nama=$_GET['nama'];
$query = mysqli_query($koneksi, "DELETE FROM anggota WHERE anggota.nama='$nama'");

if($query>0);
{
    echo "
    <script>
    alert('data berhasil dihapus');
    document.location.href = 'indexanggota.php';
    </script>
    ";
}

?>