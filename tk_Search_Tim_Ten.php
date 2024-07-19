<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     <form action="php.php" method="post">
          <input type="search" name="text" placeholder="search"><br>
          <input type="submit">
          <?php
               if($_SERVER['REQUEST_METHOD']=='POST'){
                    if(empty($_POST['text'])){
                         echo('<br>khong co gia tri truyen vao');
                    }else{
                         if($_POST['text']=='TUNG'){
                              echo('<br> Tim thay ');
                              echo($_POST['text']);
                         }else{
                              echo('<br>Khong Tim thay ');
                              echo($_POST['text']);
                         }
                    }
               }
          ?>
     </form>
</body>
</html>