<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="masuk.css" media="all">
</head>

<body>
<?PHP
     if(isset($_GET['pesan'])){
         if($_GET['pesan']=="gagal"){
             echo "login gagal! username dan password salah";
         }else if($_GET['psan']=="logout"){
             echo "anda telah berhasil logout";
         }
     }

     ?>
     <br>
     <br>
     <br>
     <div id="card">
     <div id="card-content">
    <div id="card-title">
    <h2>LOGIN</h2>
    <div class="underline-title"></div>
    </div>
    <div>
    <form action="masuklogin.php" method="POST">
    <div class="hia">
       <img src="ngak.jpg" alt="uu" class="uu">
    </div>
    
    <div class="yee">
    <label for="uname"><b>name</b></label>
    <br>
    <input type="text" placeholder="Enter name" name= "nama" >
    </div>
    <div class="yeee">
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