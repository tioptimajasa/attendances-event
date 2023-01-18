<?php
$namafolder="../peserta/foto_peserta/"; //tempat menyimpan file
include "../conn.php";
if (!empty($_FILES["nama_file"]["tmp_name"]))
{
	$jenis_foto=$_FILES['nama_file']['type'];
        $id = $_POST['id'];
		$nama = $_POST['nama'];
        $nip = $_POST['nip'];
		$jabatan = $_POST['jabatan'];
		$unit_kerja = $_POST['unit_kerja'];
		// $departemen = $_POST['departemen'];
        $type_peserta=$_POST['type_peserta'];
		
	if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/png")
	{			
		$foto = $namafolder . basename($_FILES['nama_file']['name']);		
		if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $foto)) {
			$sql="UPDATE peserta SET id='$id', nama='$nama', nip='$nip',  jabatan='$jabatan', unit_kerja='$unit_kerja', foto='$foto' WHERE id='$id'";
			$res=mysqli_query($koneksi, $sql) or die (mysqli_error($koneksi));
			//echo "Gambar berhasil dikirim ke direktori".$gambar;
            echo "<script>alert('Data berhasil dimasukan!'); window.location = 'peserta-officer.php'</script>";	   
		} else {
		   echo "<p>Foto gagal di upload</p>";
		}
   } else {
		echo "Jenis foto yang anda kirim salah. Harus .jpg .png";
   }
} else {
	echo "Anda belum memilih foto";
}

?>