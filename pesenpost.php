<?php
include './pesenconection.php';
$nama =$_POST["nama"];
$alamat = $_POST['alamat'];
$id_STARTERS=$_POST['id_STARTERS'];
$id_MAINCOURSES= $_POST['id_MAINCOURSES'];
$id_DESSERTS= $_POST['id_DESSERTS'];
$id_DRINKS= $_POST['id_DRINKS'];


$query = "INSERT INTO pesan (nama,alamat,id_STARTERS, id_MAINCOURSES, id_DESSERTS, id_DRINKS)
          VALUES ('$nama','$alamat','$id_STARTERS','$id_MAINCOURSES','$id_DESSERTS','$id_DRINKS')";

          $result = mysqli_query($connect, $query);
          $num = mysqli_affected_rows($connect);
          if($num>0){
              echo "ANDA BERHASIL MEMESAN MAKANAN                        Mohon Maaf untuk Bill nya masih error   ";
             
              
          }else{
              echo "gagal tambah data : ".mysqli_error($connect);
          }





?>