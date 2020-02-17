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
   background-image: url(op.jpg);
   background-size: cover;
   background-position: 0%;
   background-clip: border-box;
   background-position-x: 0%;
   background-attachment: scroll;
    background-repeat: no-repeat;
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
<th bgcolor="aqua">NO</th>
<th bgcolor="aqua">Makanan</th>
<th bgcolor="aqua">Harga</th>
</tr>
<?php
include "konesi.php";
$query ="SELECT * FROM star";
$sql = mysqli_query($connect,$query);
while($data = mysqli_fetch_array ($sql)){
  echo "<tr>";
  echo "<td>",$data ['No']."</td>";
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
<th bgcolor="aqua">NO</th>
<th bgcolor="aqua">Makanan</th>
<th bgcolor="aqua">Harga</th>
</tr>
<?php
include "konesi.php";
$query ="SELECT * FROM mainn";
$sql = mysqli_query($connect,$query);
while($data = mysqli_fetch_array($sql)){
  echo "<tr>";
  echo "<td>",$data ['No']."</td>";
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
<th bgcolor="aqua">NO</th>
<th bgcolor="aqua">Makanan</th>
<th bgcolor="aqua">Harga</th>
</tr>
<?php
include "konesi.php";
$query ="SELECT * FROM dess";
$sql = mysqli_query($connect,$query);
while($data = mysqli_fetch_array($sql)){
  echo "<tr>";
  echo "<td>",$data ['no']."</td>";
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
<th bgcolor="aqua">NO</th>
<th bgcolor="aqua">Makanan</th>
<th bgcolor="aqua">Harga</th>
</tr>
<?php
include "konesi.php";
$query ="SELECT * FROM haus";
$sql = mysqli_query($connect,$query);
while($data = mysqli_fetch_array($sql)){
  echo "<tr>";
  echo "<td>",$data ['No']."</td>";
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
</body>
</html>