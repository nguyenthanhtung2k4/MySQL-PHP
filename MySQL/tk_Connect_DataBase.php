<?php
         $locahost='localhost'; //Mặc định trong MySQL
         $user='root';         //Useer mặc định trong MySQL
         $pass='';             //pass mặc định trong MySQL 
         $dataBase='coso_du_lieu';         //data  tên mà bạn  đặt trong MYSQL
         $contac= new mysqli($locahost,$user,$pass,$dataBase);
         if($contac){
              mysqli_query($contac,"SET NAMES 'utf8' "); // truy vấn đến mySQL kiểm tra đã kết nối DataBase  chưa
              echo('Ket noi thanh cong');
              
         }else{
              echo('Ket noi that bai!');
    
         }
?>