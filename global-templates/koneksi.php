<?php

 //==== DB Local ====
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "attendances_event";

//  //==== DB to Cpanel POJ ====
// $servername = "122.248.43.203";
// $username = "pess7362_root";
// $password = "optimajasa2023!!!";
// $dbname = "pess7362_rakernas";

    // $db_host = "122.248.43.203";
    // $db_user = "pess7362_root";
    // $db_pass = "optimajasa2023!!!";
    // $db_name = "pess7362_rakernas";

// $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die("Connection failed: " . mysqli_connect_error());


$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());


?>