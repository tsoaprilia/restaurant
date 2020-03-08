<?php
include './tunjukkonek.php';
$nama = $_GET['nama'];
$query = "DELETE FROM pesan WHERE nama ='$nama'";
$result =  mysqli_query($connect, $query);
$num = mysqli_affected_rows($connect);
 if($num>0){
     echo " BERHASIL hapus DATA <br>";
 }else{
     echo "gagal hapus <br>";
 }
 echo "<a href='tunjuk.php'>lihat data</a>";
?>