<?php
include ("conn.php");
date_default_timezone_set('Asia/Jakarta');

session_start();

$username = $_POST['username'];
$password1 = $_POST['password'];
$password = sha1($password1);

//$username = mysqli_real_escape_string($username);
//$password = mysqli_real_escape_string($password);

if (empty($username) && empty($password)) {
	header('location:index.php?error=Username dan Password Kosong!');
} else if (empty($username)) {
	header('location:index.php?error=Username Kosong!');
} else if (empty($password)) {
	header('location:index.php?error=Password Kosong!');
}

$q = mysqli_query($koneksi, "select * from admin where username='$username' and password='$password'");
$row = mysqli_fetch_array ($q);

if (mysqli_num_rows($q) == 1) {
    $_SESSION['user_id']    = $row['user_id'];
    $_SESSION['username']   = $username;
    $_SESSION['fullname']   = $row['fullname'];
    $_SESSION['level']      =  $row['level'];
    $_SESSION['gambar']     = $row['gambar'];
    
    if ($_SESSION['level'] == 'admin'){
        header('location:admin/index-admin.php');
    } else if ($_SESSION['level'] == 'user'){
        header('location:user/index-user.php');
    } else if ($_SESSION['level'] == 'officer'){
        header('location:officer/index-officer.php');
    }
	
} 

// else if ($_SESSION['username'] == $_SESSION['']) {
// 	header('location:index.php?error=Anda Belum Terdaftar!');
// }

else {
	header('location:index.php?error=Anda Belum Terdaftar!');
}
?>