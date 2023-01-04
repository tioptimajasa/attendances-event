<?php
session_start();
if ($_SESSION['level'] == "admin") {
	header('location:admin/index-admin.php');
	include "../conn.php";
} else if ($_SESSION['level'] == "superuser") {
	header('location:../index.php');
} else if ($_SESSION['level'] == "user") {
	include "../conn.php";
} else {
    header('location:../index.php');
}
?>
