<?php  
include '../aset/header.php';
include '../koneksi.php';

$id_anggota = $_GET['id_anggota'];

$sql = "SELECT * FROM anggota a INNER JOIN level l ON a.id_level=l.id_level WHERE id_anggota=$id_anggota";
$res = mysqli_query($koneksi, $sql);
$detailanggota= mysqli_fetch_assoc($res);
// var_dump($detail);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Detail Anggota</title>
</head>
<body>
<div class="container">
	<div class="row mt-4">
		<div class="col-md-7">
			<h2>Detail Anggota</h2>
			<hr class="bg-ligth">
			<table class="table table-bordered">
				<tr>
					<td><strong>Nama</strong></td>
					<td><?=$detailanggota['nama'];?></td>
				</tr>
				<tr>
					<td><strong>Kelas</strong></td>
					<td><?=$detailanggota['kelas']?></td>
				</tr>
				<tr>
					<td><strong>Telepon</strong></td>
					<td><?=$detailanggota['telp']?></td>
				</tr>
				<tr>
					<td><strong>Username</strong></td>
					<td><?=$detailanggota['username']?></td>
				</tr>
				<tr>
					<td><strong>Password</strong></td>
					<td><?=$detailanggota['password']?></td>
				</tr>
				<tr>
					<td><strong>Level</strong></td>
					<td><?=$detailanggota['level']?></td>
				</tr>
				<tr>
					<td class="text-rigth" colspan="2">
						<a href="indexanggota.php" class="btn btn-success"><i class="fas fa-angle-double-left"></i>Kembali</a>

					</td>
				</tr>
			</table>
		</div>
	</div>
</div>
</body>
</html>
<?php  
include '../aset/footer.php';
?>