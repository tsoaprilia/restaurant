<?php
$host ="localhost";
$username ="root";
$password ="";
$database = "starters";

$connect = mysqli_connect($host, $username, $password, $database);
if(!$connect){
    echo "koneksi ke database gagal : ". mysqli_connect_error();
}
 
?>