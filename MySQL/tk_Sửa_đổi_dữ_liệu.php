<?php
     include('tk_Connect_DataBase.php');
     $id=2004;
     $tk ='admin' ;
     $mk ='admin' ;
     $vl=2;
     $sql=" UPDATE account SET 
          id='$id',
          tai_khoan='$tk',
          mat_khau='$mk',
          lave='$vl'
     WHERE id=2
     ";
     // truy van
     mysqli_query($contac,$sql);
?>