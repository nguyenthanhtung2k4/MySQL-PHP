<?php
     
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>UploadFile</title>
</head>
<body>
     <form action="index.php" method="post" enctype="multipart/form-data">
          <input type="file" name="UploadFile">
          <input type="submit" name="gui">
     </form>
     <?php
          $kiemtra=''.basename($_FILES['UploadFile']['name']);
          if(isset($_POST['gui'])){
               if($_FILES['UploadFile']['size']== 0){
                    echo "<script> alert('ban chua chon file')</script>";
               // kiem tra kich thuoc file co lon hon  2mb khong 
                    // 1mb ~ 1.000.000 bytes
               }elseif($_FILES['UploadFile']['size']>2000000){ 
                    echo('kich thuoc qua lon');
               // kiem tra file ton tai chx
               }elseif(file_exists($kiemtra)){
                    echo('File da ton tai');
               }
               else{
                    // ten file
                    echo($_FILES['UploadFile']['name']);
                    // dia chi  chay file trong pc
                    echo '<br>';
                    echo($_FILES['UploadFile']['tmp_name']);
                    // type kieu file
                    echo '<br>';
                    echo($_FILES['UploadFile']['type']);
                    // size kich thuoc file
                    echo '<br>';
                    echo($_FILES['UploadFile']['size']);
                    //  bao  loi  error
                    echo '<br>';
                    echo($_FILES['UploadFile']['error']);
                    // di chuyen duong dan sang duong dan moi
                    echo '<br>';
                    echo move_uploaded_file($_FILES['UploadFile']['tmp_name'], $_FILES['UploadFile']['name']);

               }
          } 
     ?>
</body>
</html>
