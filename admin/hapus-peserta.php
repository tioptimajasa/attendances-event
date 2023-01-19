<?php
include "../conn.php";
$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM peserta WHERE nip='$id'") or die (mysqli_error($koneksi));
if ($query){
	echo "<script>alert('Data Berhasil dihapus!'); window.location = 'peserta.php'</script>";	
} else {
	echo "<script>alert('Data Gagal dihapus!'); window.location = 'peserta.php'</script>";	
}
?>