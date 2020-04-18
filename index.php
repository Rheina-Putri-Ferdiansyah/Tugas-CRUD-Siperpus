<?php
include 'aset/header.php';
    $koneksi = mysqli_connect("localhost","root","","db_perpus");
?>
<div class="container">
        <div class="row mt-4">
            <div class="col-md">
                <h2><i class="fas fa-chart-line mr-2"></i>Dashboard</h2>
                <hr class="bg-light">
            </div>
        </div>
</div>
<div class="row">
        <div class="col-md-4">
            <div class="card bg-danger" style="width: 18rem;">
            <div class="card-body text-white">
                <h5 class="card-title">Jumlah Buku</h5>
                <p class="card-text" style="font-size:60px">40</p>
                <a href="http://localhost/siperpus/buku/indexbuku.php" class="text-white">lebih detail  <i class="fas fa-angle-double-right"></i></a>
                </div>
                </div>
                </div>

        <div class="col-md-4">
            <div class="card bg-warning" style="width: 18rem;">
            <div class="card-body text-white">
                <h5 class="card-title">Jumlah Anggota</h5>
                <p class="card-text" style="font-size:60px">5</p>
                <a href="http://localhost/siperpus/anggota/indexanggota.php" class="text-white">lebih detail  <i class="fas fa-angle-double-right"></i></a>
                </div>
                </div>
                </div>

        <div class="col-md-4">
            <div class="card bg-primary" style="width: 18rem;">
            <div class="card-body text-white">
                <h5 class="card-title">Jumlah Transaksi</h5>
                <p class="card-text" style="font-size:60px">3</p>
                <a href="http://localhost/siperpus/transaksi/indextransaksi.php" class="text-white">lebih detail  <i class="fas fa-angle-double-right"></i></a>
            </div>
            </div>
            </div>
    </div>
</div>


<?php
include 'aset/footer.php';
?>
