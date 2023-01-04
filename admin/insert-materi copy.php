<?php
$namafolder="../admin/materi_event/"; //tempat menyimpan file
/*
$con=mysql_connect("localhost","root","") or die("Gagal");
mysql_select_db("ecommerce")  or die("Gagal");*/
include "../conn.php";

if (!empty($_FILES["nama_file"]["tmp_name"]))
{
	$jenis_file=$_FILES['nama_file']['type'];
        $materi_id = $_POST['materi_id'];
		$judul_materi= $_POST['judul_materi'];
		$nama_event= $_POST['nama_event'];
		
		
	if($jenis_file=="application/pdf" || $jenis_file=="application/ppt" || $jenis_file=="application/pptx"
	|| $jenis_file=="application/pot" || $jenis_file=="application/pps" || $jenis_file=="application/ppa"
	|| $jenis_file=="application/potx" || $jenis_file=="application/ppsx" )
	{			
		$materi_file = $namafolder . basename($_FILES['nama_file']['name']);		
		if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $materi_file)) {
			$sql="INSERT INTO materi_event (materi_id,nama_event,judul_materi,materi_file) VALUES
            ('$materi_id','$nama_event','$judul_materi','$materi_file')";
			$res=mysqli_query($koneksi, $sql) or die (mysqli_error());
			//echo "File berhasil dikirim ke direktori".$materi_file;
            echo "<script>alert('Data berhasil dimasukan!'); window.location = 'materi-event.php'</script>";	   
		} else {
		   echo "<p>File gagal dikirim</p>";
		}
   } else {
		echo "Jenis file yang anda kirim salah. Harus .pdf .ppt .pptx ";
   }
} else {
	echo "Anda belum memilih file";
}

/*include "../conn.php";
$user_id  = $_POST['user_id'];
$username = $_POST['username'];
$password = $_POST['password'];
$fullname = $_POST['fullname'];

$query = mysql_query("INSERT INTO admin (user_id, username, password, fullname) VALUES ('$user_id', '$username', '$password', '$fullname')");
if ($query){
	echo "<script>alert('Data Admin Berhasil dimasukan!'); window.location = 'admin.php'</script>";	
} else {
	echo "<script>alert('Data Admin Gagal dimasukan!'); window.location = 'admin.php'</script>";	
}*/


?>