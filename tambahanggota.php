<?php  
include '../koneksi.php';
include '../aset/header.php';

$query = mysqli_query($koneksi, "SELECT * FROM kategori");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Anggota</title>
</head>
<body>
	<div class="container">
		<div class="row mt-4">
			<div class="col-md-9">
				<div class="card">
					<div class="card-header">
						<h2><i class="fas fa-user-plus"></i> Tambah Data Anggota</h2>
					</div>
					<div class="card-body">
						<form method="post" action="proses-tambahanggota.php">
							<table class="table">
							<tr>
								<td>Nama</td>
								<td><input type="text" name="nama"></td>
							</tr>
							<tr>
								<td>Kelas</td>
								<td><input type="text" name="kelas"></td>
							</tr>
							<tr>
								<td>Telp</td>
								<td><input type="int" name="telp"></td>
							</tr>
							<tr>
								<td>Username</td>
								<td><input type="text" name="username"></td>
							</tr>
								<th><input type="submit"class="btn btn-primary" name="simpan" value="simpan"></th>
							</tr>
							</table>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<?php  
include '../aset/footer.php';
?>