<?php
$namafolder="../peserta/gambar_peserta/"; //tempat menyimpan file
/*
$con=mysql_connect("localhost","root","") or die("Gagal");
mysql_select_db("ecommerce")  or die("Gagal");*/
include "../conn.php";

if (!empty($_FILES["nama_file"]["tmp_name"]))
{
	$nik        = $_POST['nik'];
	$nama       = $_POST['nama'];
	$departemen = $_POST['departemen'];
	$sql = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE nik='$nik'");
	// $sql2 = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username'");
			            if(mysqli_num_rows($sql) == 1){
                    echo '<script>sweetAlert({
                      title: "Error!", 
                         text: "NIK sudah ada!", 
                         type: "error",
                         timer : 2000
                         });</script>';
                  
			          
			           }else{
                  
                  $query = mysqli_query($koneksi, "INSERT INTO karyawan (nik, nama, departemen) VALUES ('$nik', '$nama', '$departemen')");
                  if ($query){
                    echo '<script>sweetAlert({
                      title: "Berhasil!", 
                         text: "Data berhasil di input!", 
                         type: "success",
                         timer : 2000
                         });</script>';	
                  } else {
                    //echo "<script>alert('Data Gagal dimasukan!'); window.location = 'departemen.php'</script>";	
                    echo '<script>sweetAlert({
                      title: "Error!", 
                         text: "Data gagal di input!", 
                         type: "error",
                         timer : 2000
                         });</script>';
                  } 
               
              }
            
			
	$jenis_gambar=$_FILES['nama_file']['type'];
        $user_id = $_POST['user_id'];
		$username= $_POST['username'];
		$password1=$_POST['password'];
        $password=sha1($password1);
        $fullname=$_POST['fullname'];
        $level=$_POST['level'];

		$sql2 = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username'");
			            if(mysqli_num_rows($sql2) == 1){
                    echo '<script>sweetAlert({
                      title: "Error!", 
                         text: "Username sudah ada!", 
                         type: "error",
                         timer : 2000
                         });</script>';
		
	if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
	{			
		$gambar = $namafolder . basename($_FILES['nama_file']['name']);		
		if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar)) {
			$sql="INSERT INTO admin (user_id,username,password,fullname,level,gambar) VALUES
            ('$user_id','$username','$password','$fullname','$level','$gambar')";
			$res=mysqli_query($koneksi, $sql) or die (mysqli_error());
			//echo "Gambar berhasil dikirim ke direktori".$gambar;
            echo "<script>alert('Data berhasil dimasukan!'); window.location = 'input-peserta-akun.php'</script>";
				   
		} else {
		   echo "<p>Gambar gagal dikirim</p>";
		}
    }else {
		echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
   }
} else {
	echo "Anda belum memilih gambar";
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