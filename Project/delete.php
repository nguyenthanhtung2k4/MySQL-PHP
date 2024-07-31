<!DOCTYPE html>
<html lang="en">
<head> 
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Delete</title>
</head>
<body class="container-fluid">
     <h1>Delete Products</h1>
     <hr>
     <?php
          include('connect.php');
          $id=$_GET['deleteID'];
          $sp="SELECT *FROM products WHERE id=$id";
          $sql=mysqli_query($connect,$sp);
          $data=mysqli_fetch_array($sql);
     ?>
     <div class="delete">
          <span>Ban co muon chac chan xoa</span><br><br><br>
          <div class="row mt-30 name_account">
               <div class="col name_account">
                    <p>ID</p>
               </div>
               <div class="col name_account">
                    <p>Name</p>
               </div>
               <div class="col name_account">
                    <p>Img</p>
               </div>
               <div class="col name_account">
                    <p>Gia</p>
               </div>
          </div>
     </div>
          <div class="row mt-30 value_account">
               <div class="col value_account">
                    <p><?php echo $data['id']?></p>
               </div>
               <div class="col value_account">
                    <p><?php echo $data['sanpham']?></p>
               </div>
               <div class="col value_account">
                    <img width="150px" height="150px" src="./img/<?php echo $data['anh']?>" alt="img">
               </div>
               <div class="col value_account">
                    <p><?php echo $data['gia']?></p>
               </div>
             
          </div>
     </div>
     <form action="delete.php?deleteID=<?php echo $id?>" method="post">
          <input type="submit" name="submit" value="Xac nhan">
     </form>
     <?php
     
          if(isset($_POST['submit'])){
               $delete="DELETE FROM products WHERE id=$id";
               if(mysqli_query($connect,$delete)) {
                    echo "alert('xoa thanh cong')";
                    header('location:index.php');
               }

          }
     ?>
</body>
</html>