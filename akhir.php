<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="akhir.css" media="all">
</head>
<body>
    <div id="akhir">
        <h2>PESANAN ANDA</h2>
        <div id="tulis">
          <table>
            <tr>
                <td>Nama</td> <td>: <?php echo $_GET['nama']''?></td>
            </tr>
            <tr>
                <td>Alamat</td> <td>: <?php echo $_GET['alamat']''?></td>

            <tr>
                <td>STARTERS</td><td>: <?php echo $_GET['id_STARTERS']''?></td>
            </tr>
            <tr>
                <td>MAIN COURSES</td> <td>: <?php echo $_GET['id_MAINCOURSES']''?></td>
            </tr>
            <tr>
                <td>DESSERTS</td> <td>: <?php echo $_GET['id_DESSERTS']''?></td>
            </tr>
            <tr>
                <td>DRINKS</td><td>: <?php echo $_GET['id_DRINKS']''?></td>
            </tr>
          </table> 
          </div>
    </div>


    <div id="card">
     <div id="card-content">
    <div id="card-title">
    <h2>REGISTRASI</h2>
    <div class="underline-title"></div>
    </div>
    <table>
            <tr>
                <td>Nama</td> <td>: <?php echo $_GET['nama']''?></td>
            </tr>
            <tr>
                <td>Alamat</td> <td>: <?php echo $_GET['alamat']''?></td>
            </tr>
           <tr><td>
            <form action="" method="POST">
      STARTERS : <input type="text" name="starters">
      <input type="submit" value="detail">
    </form>
    <?php
      if ($_POST)
      {
        $nilai = $_POST['starters'];
        if ($starters == 1)
        {
          $grade = "45000";
          $keterangan = "Tortilla Espanola";
        }
        elseif ($nilai == 2)
        {
          $grade = "60000";
          $keterangan = "Olivas Rellenas";
        }
        elseif ($nilai == 3 )
        {
          $grade = "50000";
          $keterangan = "Gambas Al Ajillo";
        }
        elseif ($nilai == 4 )
        {
          $grade = "65000";
          $keterangan = "Verduras Con Olivada";
        }
        else
        {
          $grade = "0";
          $keterangan = "-";
        }
       
        echo "nama Makanan : " . $keterangan;
        echo "<br>";
        echo "harga        : " . $grade;
      }
    ?>
    </td></tr>




    <tr><td>
            <form action="" method="POST">
      MAIN COURSES : <input type="text" name="main">
      <input type="submit" value="detail">
    </form>
    <?php
      if ($_POST)
      {
        $nilai = $_POST['main'];
        if ($starters == 5)
        {
          $grad = "80000";
          $keteranga = "Pollo Al Horno";
        }
        elseif ($nilai == 6)
        {
          $grad = "30000";
          $keteranga = "LASAGNE";
        }
        elseif ($nilai == 7 )
        {
          $grad = "120000";
          $keteranga = "Lenguado";
        }
        elseif ($nilai == 8 )
        {
          $grad = "70000";
          $keteranga = "Bacalao Frito";
        }
        else
        {
          $grad = "0";
          $keteranga = "-";
        }
       
        echo "nama Makanan : " . $keteranga;
        echo "<br>";
        echo "harga        : " . $grad;
      }
    ?>
    </td></tr>
    

    <form action="" method="POST">
      DESSERTS : <input type="text" name="dess">
      <input type="submit" value="detail">
    </form>
    <?php
      if ($_POST)
      {
        $nilai = $_POST['dess'];
        if ($starters == 5)
        {
          $gra = "90000";
          $keterang = "Banana Split";
        }
        elseif ($nilai == 6)
        {
          $gra = "90000";
          $keterang = "Strawberry Heaven";
        }
        elseif ($nilai == 7 )
        {
          $gra = "90000";
          $keterang = "Cookie Delight";
        }
        elseif ($nilai == 8 )
        {
          $gra = "90000";
          $keterang = "Choco Budoir";
        }
        else
        {
          $gra = "0";
          $keterang = "-";
        }
       
        echo "nama Makanan : " . $keterang;
        echo "<br>";
        echo "harga        : " . $gra;
      }
    ?>
    </td></tr>
    
    <form action="" method="POST">
      DRINKS : <input type="text" name="    drinks">
      <input type="submit" value="detail">
    </form>
    <?php
      if ($_POST)
      {
        $nilai = $_POST['drinks'];
        if ($starters == 5)
        {
          $gr = "30000";
          $keteran = "Choco Avocado";
        }
        elseif ($nilai == 6)
        {
          $gr = "30000";
          $keteran = "Ice Manggo Yakult";
        }
        elseif ($nilai == 7 )
        {
          $gr = "30000";
          $keteran = "Hot Coffee";
        }
        elseif ($nilai == 8 )
        {
          $gra = "30000";
          $keterang = "Taro Cheese";
        }
        else
        {
          $gra = "0";
          $keterang = "-";
        }
       
        echo "nama Makanan : " . $keteran;
        echo "<br>";
        echo "harga        : " . $gr;
      }
    ?>
    </td></tr>
    <tr><td><?php
    Total : 
    var $penjumlahan = $grade + $grad + $gra +$gr ;

    echo "$penjumlahan";
    
    ?></td></tr>
    
     </table>
    </div>
    </div>
    </div>


</body>
</html>