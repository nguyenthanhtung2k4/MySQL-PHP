<?php
     include('tk_Connect_DataBase.php');
     $sql="DELETE FROM account WHERE id=1";
     if(mysqli_query($contac,$sql)){
          echo'Da xoa thanh cong';
     }else{
          echo'xoa that bai ';
     }
?>