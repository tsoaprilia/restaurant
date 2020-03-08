<?php
include './innconeksi.php';

$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
$tlp = $_POST["tlp"];
$kunci = $_POST["kunci"];

$query = "INSERT INTO pengunjung (nama, alamat, tlp, kunci)
          VALUES ('$nama', '$alamat', '$tlp', '$kunci')";
$result = mysqli_query($connect, $query);
$num  =mysqli_affected_rows($connect);
if($num>0){
    header("location:masuk.php");
}else{
    echo "gagal tambah data  : ".mysqli_error($connect);
}          
?>