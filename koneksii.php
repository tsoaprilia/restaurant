<?php
$host = "localhost";
$user ="root";
$password = "";
$database = "admino";

$connect = mysqli_connect($host, $user, $password, $database);
if(mysqli_connect_error()){
    echo "koneksi database gagal : ". mysqli_connect_error();
}
?>