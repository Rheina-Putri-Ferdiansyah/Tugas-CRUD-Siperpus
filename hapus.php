<?php 
include '../koneksi.php';
$id=$_GET["id_pinjam"];
$query=mysqli_query($koneksi,"DELETE FROM detail_pinjam where id_pinjam='$id'");
$query=mysqli_query($koneksi,"DELETE FROM peminjaman where id_pinjam='$id'");
if($query>0){
    echo "
    <script>
    alert('Data berhasil dihapus, Yeay!');
    document.location.href = 'indextransaksi.php';
    </script>
    "
    ;
}


else{
    header("location : indextransaksi.php");
    exit;
}
?>