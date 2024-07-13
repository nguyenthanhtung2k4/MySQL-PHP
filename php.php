<?php 
declare(strict_types=1);
declare(strict_types=1);
     function add($a,$b){
          return $a+$b;
     }

     echo(add('3',4));   

     <?php
     declare(strict_types=1);
     
     function add(int $x, int $y) {
       return $x + $y;
     }
     
     echo add(5, 3); // Hiển thị 8
     echo add("5", 3); // Lỗi: Argument 1 passed to add() must be of the type int, string given
     
?>