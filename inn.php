<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="inn.css" media="all">
</head>
<body>
<div id="card">
     <div id="card-content">
    <div id="card-title">
    <h2>REGISTRASI</h2>
    <div class="underline-title"></div>
    </div>
    <div>
    <form action="innpost.php" method="POST">
    <div class="hia">
       <img src="eat.jpg" alt="uu" class="uu">
    </div>
    
    <div class="yee">
    <label for="uname"><b>Name</b></label>
    <br>
    <input type="text" placeholder="Enter Username" name= "nama" >
    </div>
    <div class="yeee">
    <label for="alamat" ><b>Alamat</b></label>
    <br>
    <input type="text " placeholder="Enter alamat" name="alamat" >
    </div>
    <div class="ya">
    <label for="tlp"><b>Telepon</b></label>
    <br>
    <input type="text" placeholder="Enter telepon" name= "tlp" >
    </div>
    <div class="yaa">
    <label for="kunci" ><b>password</b></label>
    <br>
    <input type="password " placeholder="Enter password" name="kunci" >
    </div>
    <button type="submit">submit</button>
    
    
    
    </form>
    </div>


     </div>
     </div>
</body>
</html>