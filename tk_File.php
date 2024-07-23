<?php
     $file=fopen('file.txt','r+') or die('erro'); // open file
     $doc=fread($file,filesize('file.txt')); //doc file
     echo ($doc); //  in ra man hinh
     fclose($file); // đóng file
?>