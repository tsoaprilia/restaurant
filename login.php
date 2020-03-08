<?php
include 'koneksii.php';

$username= $_POST['username'];
$password= $_POST['password'];

$data= mysqli_query($connect, "SELECT * FROM adminn WHERE username='$username' and password='$password'");
$cek = mysqli_num_rows($data);
if($cek>0){
    $_SESSION['username'] = $username;
    $_SESSION['status']="login";
    header("location:menuu.php");

}else{
    header("location:index.php?pesan=gagal");
}
?>