<?php  
include '../koneksi.php';
if(isset($_POST['simpan'])){
	$nama	 = $_POST['nama'];
	$kelas 	 = $_POST['kelas'];
	$telp 	 = $_POST['telp'];
	$username 	 = $_POST['username'];

	$sql = "INSERT INTO anggota(nama,kelas,telp,username) VALUES ('$nama', '$kelas', '$telp', '$username')";

	$res = mysqli_query($koneksi, $sql);
	$count = mysqli_affected_rows($koneksi);

	if($count>0){
		echo "
			<script>
			alert('Data Berhasil Di tambah !!!');
			document.location.href='indexanggota.php';
			</script>
		";
	}
}
?>