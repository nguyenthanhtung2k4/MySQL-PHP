<?php
function add1(int $x, int $y) {
                         return $x + $y;
                    }
                    echo add1(5, 3); // Hiển thị 8
                    echo add1("5", 3); // Lỗi: Argument 1 passed to add() must be of the type int, string given
?>