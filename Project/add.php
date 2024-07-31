<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Add Account</title>
</head>
<body>
     
     <h1 style="cursor: pointer;">Add San pham</h1>
     <form action="add.php" method="post" enctype="multipart/form-data">
          <br>
          <label for="">Tensanpham</label>
          <input type="text" name="name">
          <br>
          <label for="">anh</label>
          <input type="file" name="file">
          <br>
          <label for="">Gia</label>
          <input type="number" name="number">
          <br>
          <label for="">time</label>
          <input type="date" name="time">
          <br><br><br>
          <input type="submit" name="submit">
     </form>
     <script>
          var home=document.querySelector('h1');
          home.addEventListener('click',function(){
               location.href='index.php';

          })
     </script>
     <?php
          include('connect.php');
               if(isset($_POST['submit'])){
                    $name=$_POST['name'];
                    $file=$_FILES['file']['name'];
                    $number=$_POST['number'];
                    $time=$_POST['time'];
                    $sql="INSERT INTO products(id,sanpham,anh,gia,time)
                    VALUE('','$name','$file','$number','$time')
                    ";
                    mysqli_query($connect,$sql);
                    echo'da them data';
                    move_uploaded_file($_FILES['file']['tmp_name'],'img/'.$_FILES['file']['name']);
               }
          
     ?>
</body>
</html>