<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     <form action="php.php" method="post">
          <input type="text" name="text" placeholder="name"><br>
          <input type="submit">
          <?php
               if($_SERVER['REQUEST_METHOD']=='POST'){
                    if(empty($_POST['text'])){
                         echo('<br>khong co gia tri truyen vao');
                    }else{
                         echo($_POST['text']);
                    }
               }
          ?>
     </form>
</body>
</html>