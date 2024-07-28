<?php
     include('tk_Connect_DataBase.php');
     $id='';
     $taikhoan= 'thanhtung';
     $mk= 'taotungday';
     $lave=2 ;
     $sql="INSERT INTO account(id, tai_khoan,mat_khau,lave)
     VALUE('$id','$taikhoan','$mk','$lave')";
     //VALUE($id,$taikhoan,$mk,$lave)";
     mysqli_query($contac,$sql);
?>