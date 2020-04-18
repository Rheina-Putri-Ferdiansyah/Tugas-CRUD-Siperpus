<?php
include '../koneksi.php';

$sql = "SELECT * FROM anggota ORDER BY nama";

$res = mysqli_query($koneksi, $sql);

$anggota = array();

while ($data = mysqli_fetch_assoc($res)) {
    $anggota[] = $data;
}

include '../aset/header.php';
?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md">
        </div>    
    </div>
</div>

<div class="card">
  <div class="card-header">
    <h2 class="card-title">Data Anggota</h2>
    <a href="tambahanggota.php" class="badge badge-info">Tambah Data</a>
    <div class="card-body">
    <table class="table table-dark">
<thead>
   <tr>
   <th scope="col">no</th>
   <th scope="col">Nama</th>
   <th scope="col">Kelas</th>
   <th scope="col">Aksi</th>
   </tr>
</thead>

  <tbody>
  <?php
    $no = 1;
    foreach ($anggota as $a ) { ?>

    <tr>
        <th scope="row"><?= $no ?></th>
        <td><?= $a['nama'] ?></th>
        <td><?= $a['kelas'] ?></th>
        <td>
        <a href="detailanggota.php?id_anggota=<?= $a['id_anggota']; ?>"class="badge badge-success">Detail</a>
        <a href="editanggota.php?id_anggota=<?= $a['id_anggota']; ?>" class="badge badge-warning">Edit</a>
        <a href="hapusanggota.php?id_anggota=<?= $a['id_anggota']; ?>" class="badge badge-danger">Hapus</a>
                 
        </td>
    </tr>
                                        
<?php 
    $no++;
}
?>

  </tbody>
</table>
  </div>
</div>
<?php
include '../aset/footer.php';
?>
