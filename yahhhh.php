<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="www">
    
    <form action="" method="GET">
    <label for="uname"><b>username</b></label>
    <br>
    <input type="text" placeholder="Enter Usernamee" name= "unamee" required>
    </div>
    <div class="ww">
    <l<label for="makan" ><b>makanan</b></label>
    <input type="text" placeholder="enter makan" name= "menu" >
    <input type="submit"  name="simpan" value="save">
</form>
</body>
</html>

    <?php
    do{
      <input type="text">
    }
    if(isset($_GET ['simpan'])){
        $unamee = $_GET['unamee'];
        $menu = $_GET['menu'];
   
   $p=true;
   $s =false;
   $pil;
    do{

   
      switch ($menu){
          case 1:
            echo "Tortilla Espenola";
          break;
          case 2:
            echo "olivas Reflens";
          break;
          case 3:
            echo "Gambas Al Ajillo";
          break;
          case 4:
            echo "verduras Con Olivada";
          break;
          case 5:
            echo "Pollo Al Horno";
          break;
          case 6:
            echo "Lasagne";
          break;
          case 7:
            echo "Lenguado";
          break;
          case 8:
            echo "Bacalao Frito";
          break;
          case 9:
            echo "Banana Split";
          break;
          case 10:
            echo "Strawberry Heaven";
          break;
          case 11:
            echo "Cookie Delight";
          break;
          case 12:
            echo " Choco Budoir";
          break;
          
          default:
          echo "maaf menu tidak ada :(";
           
      }

     
    }
    
   
   

}
?>

  
   


   
    
    
   
