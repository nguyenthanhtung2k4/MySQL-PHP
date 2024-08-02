<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>PHP</title>
</head>
<body>
     <?php
     if($_SERVER['REQUEST_METHOD']=="POST"){

     $name=$_POST['text'];
          if(strlen($name)==0){
               echo("<script>alert('tung');</script>");
          }
     }
     ?>
     <form action="test.php" method="post">
          <input type="text" name="text">
          <input type="submit" name="submit">
          
     </form>
</body>
</html>