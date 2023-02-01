<?php
$namafolder="../peserta/foto_peserta/"; //tempat menyimpan file
/*
$con=mysql_connect("localhost","root","") or die("Gagal");
mysql_select_db("ecommerce")  or die("Gagal");*/
include "../conn.php";

if (!empty($_FILES["nama_file"]["tmp_name"]))
{
	$jenis_foto=$_FILES['nama_file']['type'];
        
        $nip = $_POST['nip'];
		$nama = $_POST['nama'];
		$jabatan = $_POST['jabatan'];
		$unit_kerja = $_POST['unit_kerja'];
        $type_peserta=$_POST['type_peserta'];
        $jenis_kelamin=$_POST['jenis_kelamin'];
		
	if($jenis_foto=="image/jpeg" || $jenis_foto=="image/png")
	{			
		$foto = $namafolder . basename($_FILES['nama_file']['name']);		
		if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $foto)) {

					$sql = mysqli_query($koneksi, "SELECT * FROM peserta WHERE nip='$nip'");
			            if(mysqli_num_rows($sql) == 1){
							echo "<script>alert('NIP sudah ada!'); window.location = 'input-peserta-officer.php'</script>";
						}
						
							$query="INSERT INTO peserta (nip,nama,jabatan,unit_kerja,type_peserta,foto, jenis_kelamin) VALUES
							('$nip', '$nama', '$jabatan', '$unit_kerja', '$type_peserta', '$foto', '$jenis_kelamin')";
							// echo "$query";
							$res=mysqli_query($koneksi, $query) or die (mysqli_error());
							//echo "Foto berhasil dikirim ke direktori".$foto;
							echo "<script>alert('Data berhasil dimasukan!'); window.location = 'peserta-officer.php'</script>";	   
						} 
						else {
						echo "<p>Foto gagal dikirim</p>";
						}
				
	
   } 
   else {
		echo "Jenis foto yang anda kirim salah. Harus .jpg .png";
   }
} 


// else {
// 	echo "Anda belum memilih foto";
// }

/*include "../conn.php";
$id  = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$fullname = $_POST['fullname'];

$query = mysql_query("INSERT INTO admin (id, username, password, fullname) VALUES ('$id', '$username', '$password', '$fullname')");
if ($query){
	echo "<script>alert('Data Admin Berhasil dimasukan!'); window.location = 'admin.php'</script>";	
} else {
	echo "<script>alert('Data Admin Gagal dimasukan!'); window.location = 'admin.php'</script>";	
}*/


?>