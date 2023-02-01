<?php
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
?>
