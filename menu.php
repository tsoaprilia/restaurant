<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <link rel="stylesheet" href="style.css" media="all" type="text/css">
</head>
<style>
    body{
   background-image: url(6t.jpg);
  
}
#satuuu{
    width: 25%;
    height: 60px;
    margin: 0px 700px;
    background:rgb(166, 164, 168);


}

#mohon{
  width: 50%;
    height: 50px;
    margin: 0px 470px;
    background:rgb(103, 116, 122);
}
#ma{
  width: 100%;
    height: 100px;
    margin: 0px 0px;
    background:rgb(61, 73, 78);
}
</style>
<body>
    <div id="layout">
    <div id="header">
    </div>
    </div>
    <h1 >RESTAURANT TSO</h1>

<div id="yeeu">
<div id= "yeuy">
<table width="100%">
<tr>
<td>
<center><h2> STARTERS</h2>
<table border="1" width="70%" ></center>
<tr>
<th bgcolor="aqua">ID</th>
<th bgcolor="aqua">Makanan</th>
<th bgcolor="aqua">Harga</th>
</tr>
<?php
include "konesi.php";
$query ="SELECT * FROM star";
$sql = mysqli_query($connect,$query);
while($data = mysqli_fetch_array ($sql)){
  echo "<tr>";
  echo "<td>",$data ['id_STARTERS']."</td>";
  echo "<td>",$data ['Makanan']."</td>";
  echo "<td>",$data ['Harga']."</td>";
  echo "</tr>";
}
?>
</table>
</td>
<td>
<center><h2> MAIN COURSES</h2>
<table border="1" width="70%"></center>
<tr>
<th bgcolor="aqua">ID</th>
<th bgcolor="aqua">Makanan</th>
<th bgcolor="aqua">Harga</th>
</tr>
<?php
include "konesi.php";
$query ="SELECT * FROM mainn";
$sql = mysqli_query($connect,$query);
while($data = mysqli_fetch_array($sql)){
  echo "<tr>";
  echo "<td>",$data ['id_MAINCOURSES']."</td>";
  echo "<td>",$data ['Makanan']."</td>";
  echo "<td>",$data ['Harga']."</td>";
  echo "</tr>";
}
?>
</table>
</td>

</tr>
<tr>
<td>
<center><h2> DESSERTS</h2>
<table border="1" width=" 70%"></center>
<tr>
<th bgcolor="aqua">ID</th>
<th bgcolor="aqua">Makanan</th>
<th bgcolor="aqua">Harga</th>
</tr>
<?php
include "konesi.php";
$query ="SELECT * FROM dess";
$sql = mysqli_query($connect,$query);
while($data = mysqli_fetch_array($sql)){
  echo "<tr>";
  echo "<td>",$data ['id_DESSERTS']."</td>";
  echo "<td>",$data ['makanan']."</td>";
  echo "<td>",$data ['harga']."</td>";
  echo "</tr>";
}
?>
</table>
</td>
<td>
<center><h2> DRINKS</h2>
<table border="1" width="70%" ></center>
<tr>
<th bgcolor="aqua">ID</th>
<th bgcolor="aqua">Makanan</th>
<th bgcolor="aqua">Harga</th>
</tr>
<?php
include "konesi.php";
$query ="SELECT * FROM haus";
$sql = mysqli_query($connect,$query);
while($data = mysqli_fetch_array($sql)){
  echo "<tr>";
  echo "<td>",$data ['id_DRINKS']."</td>";
  echo "<td>",$data ['Minuman']."</td>";
  echo "<td>",$data ['Harga']."</td>";
  echo "</tr>";
}
?>
</table>
</td>

</tr>
</table>
</div>
</div>


<div id="mohon">
<h3>Untuk Memesan Anda Harus Menghafalkan " ID " makanan beserta minumannya yang ingin anda pesan</h2>
</div>

<div id="ma">
<nav>
<div id="satuuu">
<h3 align="center" style="color:silver">
<u style="font-family: sans-serif;">
<li><a href="alhamdulillah.php" > LANJUT </a></li>
</u>
</h3>
</div>
</nav>
</div>
</body>
</html>