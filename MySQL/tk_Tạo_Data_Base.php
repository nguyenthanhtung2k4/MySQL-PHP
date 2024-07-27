<?php
     // kết nối  database
     include('tk_Connect_DataBase.php');
     // tạo   database  // tên cơ sở  dữ liệu
     $db ="CREATE DATABASE coso_du_lieu";
     //  kiem tra 
     if(mysqli_query($contac,$db)){
          echo("tao databe thanh cong");
     }else{
          echo("tao databe khong thanh cong");
     }
?>