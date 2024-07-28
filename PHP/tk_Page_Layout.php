<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Home</title>
</head>
<body>
     <li><a href="index.php?page_layout=home">Home</a></li>
     <li><a href="index.php?page_layout=sanpham">SanPham</a></li>
     <li><a href="index.php?page_layout=lienhe">LienHe</a></li>
</body>
</html>
<?php
     if(isset($_GET['page_layout'])) // kiem tra co tin tai hay  khong
     {
          switch($_GET['page_layout']){
               case 'home';{
                    echo('home  la  tao');
                    //   Có thể thêm  include .... để thực hiện từng page  riêng một
                    break;
               };
               case 'sanpham';{
                    echo('sanPham  la  tao');
                    //   Có thể thêm  include .... để thực hiện từng page  riêng một
                    break;
               };
               case 'lienhe';{
                    echo('lienHe  la  tao');
                    //   Có thể thêm  include .... để thực hiện từng page  riêng một
                    break;
               };
          }
     }
?>