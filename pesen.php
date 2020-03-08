<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="pesen.css" media="all">
    
</head>
<body>

    <div id="cardd">
     <div id="cardd-content">
    <div id="cardd-title">
    <h2>PESAN</h2>
    <div class="underline-title"></div>
    </div>
    <div>
    <form action="pesenpost.php" method="POST">
    <div class="hiaa">
       <img src="yt.jpeg" alt="uuu" class="uuu">
    </div>
    
    <div class="w">
    <label for="name"><b>nama</b></label>
    <br>
    <input type="text" placeholder="Enter name" name= "nama" required>
    </div>
    <div class="w">
    <label for="alamat"><b>Alamat</b></label>
    <br>
    <input type="text" placeholder="Enter alamat" name= "alamat" required>
    </div>
    <div class="w">
    <label for="starters"><b>STARTERS</b></label>
    <br>
    <input type="text " placeholder="enter id_STARTERS" name="id_STARTERS" required>
    </div>
    <div class="w">
    <label for="main" ><b>MAIN COURSES</b></label>
    <br>
    <input type="text " placeholder="enter id_MAIN COURSES" name="id_MAINCOURSES" required>
    </div>
    <div class="w">
    <label for="desserts"><b>DESSERTS</b></label>
    <br>
    <input type="text " placeholder="enter id_DESSERTS" name="id_DESSERTS" required>
    </div>
    <div class="w">
    <label for="drinks" ><b>DRINKS</b></label>
    <br>
    <input type="text " placeholder="enter id_DRINKS" name="id_DRINKS" required>
    </div>
    <br>
    <div id="oi">
    <button type="submit">submit</button>
    
    
    
    </form>
</body>
</html>