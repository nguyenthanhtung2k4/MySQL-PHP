<?php
     include('tk_Connect_DataBase.php');
        $id=$_GET['deleteId'];
        $sql="DELETE FROM account WHERE id=$id";
        if(mysqli_query($contac,$sql)){
             echo('Da xoa  thanh cong!');
        }else{
          echo('xoa khong thanh cong');
        }

    ?>
    <h1>Account</h1>
    <script>
     var h1=document.querySelector('h1');
     h1.addEventListener('click',function(){
          location.href='test.php';
          h1.style.color='red';
     })
    </script>