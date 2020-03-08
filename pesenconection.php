<?php
$host="localhost";
$user="root";
$password="";
$database="starters";

$connect= mysqli_connect($host,$user,$password,$database);
if(!$connect){
    echo "koneksi gagal : ".mysqli_connect_error();
}
?>