<?php
$namafolder="../admin/gambar_admin/"; //tempat menyimpan file
include "../conn.php";


$jenis_gambar=$_FILES['nama_file']['type'];
$user_id = $_POST['user_id'];
$username= $_POST['username'];
$password1=$_POST['password'];
$password=sha1($password1);
$fullname=$_POST['fullname'];
$level=$_POST['level'];

$gambar = $namafolder . basename($_FILES['nama_file']['name']);
if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar)) {
  $sql="UPDATE admin SET username='$username', password='$password', fullname='$fullname', level='$level', gambar='$gambar' WHERE user_id='$user_id'";
  $res=mysqli_query($koneksi, $sql) or die (mysqli_error($koneksi));
  echo "<script>alert('Data berhasil dimasukan!'); window.location = 'admin.php'</script>";
} else {
	$sql="UPDATE admin SET username='$username', password='$password', fullname='$fullname', level='$level' WHERE user_id='$user_id'";
  $res=mysqli_query($koneksi, $sql) or die (mysqli_error($koneksi));
  echo "<script>alert('Data berhasil dimasukan!'); window.location = 'admin.php'</script>";
}



?>