<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Dash</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<style>
     *{
          box-sizing: border-box;
          padding: 0;
          margin: 0;
     }
     .name_account{
          font-size: 15px;
          font-weight: bold;
     }
     
</style>
<body class="container-fluid">
     <div class="titile">
          <h1>All Products</h1>
          <div class="add_acc">
               <a href="add.php">Add + Product</a>
          </div>
     </div>
     <hr>
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
          <div class="col name_account">
               <p>Edit</p>
          </div>
          <div class="col name_account">
               <p>Delete</p>
          </div>
     </div>
     <?php
          include('connect.php');
          $add="SELECT * FROM products";
          $sql=mysqli_query($connect,$add);
          while($row=mysqli_fetch_array($sql))
     {
          ?>
          <div class="row mt-30 value_account">
               <div class="col value_account">
                    <p><?php echo $row['id']?></p>
               </div>
               <div class="col value_account">
                    <p><?php echo $row['sanpham']?></p>
               </div>
               <div class="col value_account">
                    <img width="50px" height="50px" src="./img/<?php echo $row['anh']?>" alt="img">
               </div>
               <div class="col value_account">
                    <p><?php echo $row['gia']?></p>
               </div>
               <div class="col value_account">
                    <a href="edit.php?editID=<?php echo $row['id'] ?>">Edit</a>
                    <p></p>
               </div>
               <div class="col value_account">
                    <a href="delete.php?deleteID=<?php echo $row['id'] ?>">Delete</a>
                    <p></p>
               </div>
     </div>
     <?php } ?>
</body>
</html>