<?php
include './tunjuk.php';

$nama = $_GET['nama'];

$query = "SELECT * FROM pesan WHERE nama = '$nama'";
$result = mysqli_query($connect, $query);
$row = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
#ya{
    width: 100%;
    height: 450px;
    margin: 0px 0px;
    background: rgb(92, 77, 72);
    

}
#dal{
    background-color: rgb(160, 120, 105);
    border-radius: 6px;
    box-shadow: 50px 50px 70px rgba(0, 0, 0, 0.65);
    height: 300px;
    margin : 1px 10px;
    width: 900px;
}
</style>
<body>
    <center>
    <div id=ya>
    <form action="update.php" method="POST">
    <br>
    <br>
    <br>
     <div id=dal>
         <br>
         <br>
         <br>
         <br>
    <table>
    <tr>
   <td><label for="nama">Nama</label></td>
   <td>:</td>
   <td><input type="text" name="nama" value="<?php echo $row['nama'];?>"></td>
   </tr>
   <tr>
   <td><label for="alamat">Alamat</label></td>
   <td>:</td>
   <td><input type="text" name="alamat" value="<?php echo $row['alamat'];?>" ></td>
   </tr>
   <tr>
   <td><label for="starters">id_STARTERS</label></td>
   <td>:</td>
   <td><input type="text" name="id_STARTERS" value="<?php echo $row['id_STARTERS'];?>"></td>
   </tr>
   <tr>
   <td><label for="main">id_MAINCOURSE</label></td>
   <td>:</td>
   <td><input type="text" name="id_MAINCOURSES" value="<?php echo $row['id_MAINCOURSES'];?>"></td>
   </tr>
   <tr>
   <td><label for="a">id_desserts</label></td>
   <td>:</td>
   <td><input type="text" name="id_DESSERTS" value="<?php echo $row['id_DESSERTS'];?>" ></td>
   </tr>
   <tr>
   <td><label for="a">id_drink</label></td>
   <td>:</td>
   <td><input type="text" name="id_DRINKS" value="<?php echo $row['id_DRINKS'];?>" ></td>
   </tr>
    <tr>
    <td></td>
    <td><input type="hidden" name="nama" value="<?php echo $row['nama'];?>"></td>
    <td><input type="submit" value="simpan" name="btnsimpan"></td>
    </tr>
    
    </table>
    </div>
    </form>
    </div>

    </center>
    
</body>
</html>