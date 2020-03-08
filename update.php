<?php
include './pesenconection.php';
$nama =$_POST["nama"];
$alamat = $_POST['alamat'];
$id_STARTERS=$_POST['id_STARTERS'];
$id_MAINCOURSES= $_POST['id_MAINCOURSES'];
$id_DESSERTS= $_POST['id_DESSERTS'];
$id_DRINKS= $_POST['id_DRINKS'];

$query = "UPDATE pesan SET nama='$nama', alamat='$alamat',id_STARTERS= '$id_STARTERS',id_MAINCOURSES='$id_MAINCOURSES',id_DESSERTS='$id_DESSERTS', id_DRINKS='$id_DRINKS' WHERE nama='$nama'";
$result =  $connect ->query($query);
$num = mysqli_affected_rows($connect);

 if($num > 0){ 
     echo " BERHASIL UPDATE DATA <br>";
    
 }else{
     echo "gagal update <br>";
 }
 echo "<a href='tunjuk.php'>lihat data</a>";
?>