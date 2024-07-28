<?php
     // kết nối  database
     include('tk_Contac_DataBase.php');
     // tạo   database  // tên cơ sở  dữ liệu
     $sql ="CREATE TABLE account(
          id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, --  ham cho id tu dong
          tai_khoan VARCHAR(20) NOT NULL,                 -- varchar là: kiểu kí tự 
          mat_khau VARCHAR(20) NOT NULL,                  
          lave INT(29)                                    -- INT kiểu số nguyên
     )";
     //  TRUY  VẤN
     if($contac->query($sql)===TRUE){
          echo("tao databe thanh cong");
     }else{
          echo("tao databe khong thanh cong");
     }
?>
