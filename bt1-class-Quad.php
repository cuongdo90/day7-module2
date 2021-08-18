<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
    <h2>Giải phương trình bậc 2</h2>
    <form method="POST" >
        
        <input type="text" style="width:20px" name="a" value="" />x <sup>2</sup>
        +
        <input type="text" style="width:20px" name="b" value="" />x
        +
        <input type="text" style="width:20px" name="c" value="" />
        = 0
        <br><br>
        <input type="submit" name="calculate" value="Kết quả" />
    </form>
     <?php 
     include "Quad.php";
      ?>
</body>

</html>