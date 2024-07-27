<?php declare(strict_types=1);
//  Sử dụng global có thể sử dụng gọi hàm trong global để lấy giá trị của nó
     $tung=10;$bi=30;
 function add(){
     global $tung,$bi ;
     $tung=$tung+$bi;
 }
 //  sử dụng $GLOBALS[]  có thể try cập được vào bất kì biến nào
$a=10;
$b=30;
function tung(){
     $c=$GLOBALS['a']+ $GLOBALS['b'];
     echo($c);
}
tung();
echo("\n");
echo($a);
echo("\n");
echo($b);
// * LƯU Ý: Khác nhau giữa golal và GLOBAS[] là 
/////////////////////////// global thì cho phép bạn  truy cập được vào  1 BIẾN TOÀN CẦU khi khai báo
/////////////////////////// GOBALS[] thì cho phép bạn TẤT CẢ CÁC BIẾN ĐƯỢC truyền vào

/// Không sử dụng biến global sẽ không thể gọi ra ngoài bạn  cần phải return kết quả ra và không dùng được biến đó bên ngoài.
 function add1(){
     $tung1=50;$bi1=50;
     return $tung1+$bi1;
 }
 add();
 echo($tung);
 echo("\n".add1());