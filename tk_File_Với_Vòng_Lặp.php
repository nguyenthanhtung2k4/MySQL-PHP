<?php
     $file=fopen('file.txt','r') or die('erro'); //  open  file
     while(!feof($file)){  // feof() đọc file đến cuối cùng  file
          echo(fgets($file));   //  fgets() đọc file  hết file
     }
     fclose($file); // đóng file
?>