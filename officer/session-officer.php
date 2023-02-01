<?php
session_start();
if ($_SESSION['level'] == "admin") {
	header('location:admin/index-admin.php');
	include "../conn.php";
} else if ($_SESSION['level'] == "officer") {
	// header('location:index-officer.php');
	include "../conn.php";
} else if ($_SESSION['level'] == "user") {
	header('location:user/index-user.php');
	include "../conn.php";
} else {
    header('location:../index.php');
}
?>

<!-- OLD Session -->
<!-- <php
session_start();
if ($_SESSION['level'] == "officer") {
	include "../conn.php";
} else if ($_SESSION['level'] == "superuser") {
	header('location:../index.php');
} else if ($_SESSION['level'] == "user") {
	include "../conn.php";
	header('location:user/index-user.php');
} else {
    header('location:../index.php');
}
?> -->
