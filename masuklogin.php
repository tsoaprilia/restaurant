<?php
include './masukkoneksi.php';

$name = $_POST['nama'];
$kunci = $_POST['kunci'];

$data= mysqli_query($connect, "SELECT * FROM pengunjung WHERE nama='$name' and kunci='$kunci'");
$cek = mysqli_num_rows($data);
if($cek>0){
    $_SESSION['name'] = $name;
    $_SESSION['status']="login";
    header("location:menu.php");

}else{
    header("<location:masuk.php></location:masuk>?pesan=gagal");
}
?>