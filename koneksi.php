<?php

$server = "localhost";
$username = "root";
$password = "";
$nama_db = "db_mhs";

$db = mysqli_connect($server, $username, $password, $nama_db);

if(!$db){
    die("Gagal terhubung dengan database".mysqli_connect_error());
}

?>