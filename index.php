<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>restaurant</title>
    <link rel="stylesheet" href="style.css" media="all" type="text/css">
</head>
<style>
    body{
   background-image: url(b.jpg);
   background-size: cover;
   background-position: 0%;
   background-clip: border-box;
   background-position-x: 0%;
   background-attachment: scroll;
    background-repeat: no-repeat;
}
</style>
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
    <form action="login.php" method="POST">
    <div class="hia">
       <img src="p.jpg" alt="uu" class="uu">
    </div>
    
    <div class="yee">
    <label for="uname"><b>username</b></label>
    <br>
    <input type="text" placeholder="Enter Username" name= "username" >
    </div>
    <div class="yeee">
    <label for="password" ><b>password</b></label>
    <br>
    <input type="password" placeholder="Enter password" name="password" >
    </div>
    <button type="submit">submit</button>
    
    
    
    </form>
    </div>


     </div>
     </div>
    
</body>
</html>