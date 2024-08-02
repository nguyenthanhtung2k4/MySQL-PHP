<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Edit</title>
</head>
<body>
     <?php
          include('connect.php');
          $result='Chinh sua khong thanh cong!';
          $ID=$_GET['editID'];
          $sql="SELECT * FROM products WHERE id=$ID";
          $ketqua=mysqli_query($connect,$sql);
          $row=mysqli_fetch_assoc($ketqua);
          $name=$_POST['name'];
          if($_SERVER['REQUEST_METHOD'=='POST']){
               $name=$_POST['name'];
               $anh=$_FILES['img']['name'];
               $gia=$_POST['gia'];
               $time=$_POST['time'];
               $checkFile=''.basename($_POST['img']['name']);
               if(strlen($name)<=0){
                    echo("<script>alert('tung');</script>");
               }elseif (file_exists($checkFile)) {
                    echo("<script>alert('tung');</script>");
               }
               if(isset($_POST['submit'])){
                         $sever="UPDATE products SET
                         id='$ID',
                         sanpham='$name',
                         anh='$anh',
                         gia='$gia',
                         time='$time'
                         WHERE  id=$ID";
                         mysqli_query($connect,$sever);
                         header("location:edit.php?editID=$ID");
               }
     }
     ?>
     <h1><a href="index.php">Edit Products</a></h1>
     <form action="edit.php?editID=<?php echo($ID) ?>" method="post" enctype="multipart/form-data">
          <label for="">Name</label>
          <input type="text" name="name" value=<?php echo($row['sanpham']) ?>><br><br>
          <label for="">Img</label>
          <img width="150px" height="150px" src="./img/<?php echo($row['anh'])?>" alt="img">
          <input type="file" name="img"><br><br>
          <label for="">Gia</label>
          <input type="number" name="gia" value=<?php echo ($row['gia'])?>><br><br>
          <label for="">Time</label>
          <?php echo($row['time'])?>
          <label for="">Chon ngay moi: </label>
          <input type="date" name="time"><br><br>
          <input type="submit" value="Edit" name="submit">
     </form>
     
</body>
</html>