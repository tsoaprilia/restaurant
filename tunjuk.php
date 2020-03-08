<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="tunjuk.css" media="all">
</head>
<style>
#satu{
    width: 100%;
    height: 200px;
    margin: 0px 0px;
    background: rgb(70, 89, 107);

}

</style>
<body>
    <div id="ba">
        
<div id="moh">
    <br>
    <br>
<center><h2 style="color:white"> PESANAN </h2>
<table border="1" width="70%" ></center>
<tr>
<th bgcolor="aqua">Nama</th>
<th bgcolor="aqua">Alamat</th>
<th bgcolor="aqua">ID_STARTERS</th>
<th bgcolor="aqua">ID-MAIN COURSES</th>
<th bgcolor="aqua">ID_DESSERTS</th>
<th bgcolor="aqua">ID_DRINKS</th>
<th colspan="2" bgcolor="aqua">AKSI</th>
</tr>
<?php
include "tunjukkonek.php";
$query ="SELECT * FROM pesan";
$sql = mysqli_query($connect,$query);
while($data = mysqli_fetch_array($sql)){
  echo "<tr>";
  echo "<td>",$data ['nama']."</td>";
  echo "<td>",$data ['alamat']."</td>";
  echo "<td>",$data ['id_STARTERS']."</td>";
  echo "<td>",$data ['id_MAINCOURSES']."</td>";
  echo "<td>",$data ['id_DESSERTS']."</td>";
  echo "<td>",$data ['id_DRINKS']."</td>";
  echo "<td> <a href='from_update.php?nama=".$data['nama']."'>EDIT</a></td>";
  echo "<td><a href='hapuss.php?nama=".$data['nama']."'onclick='return confirm(\"apakah anda yakin ingin menghapus data?\")'>delete</a></td>";
  echo "</tr>";
}
?>
</table>
</td>
</div>
</div>

<div id="satuu">
<nav>
<div id="satu">
<h3 align="center" style="color:white">
<u style="font-family: sans-serif;">
<br>jika ingin memgedit,  tekan "EDIT" lalu isi form pengeditan(nama tidak boleh diganti) dibawah ini !!
<br>
<br>Jika ingin menghapus data, tekan "DELETE"
<br>
<br> jika ingin keluar,  tekan "SUDAH AKHIRI"
<br>
<br>
<li><a href="buka.php">SUDAH AKHIRI</a></li>

</u>
</h3>
</div>
</nav>
</div>
</body>
</html>