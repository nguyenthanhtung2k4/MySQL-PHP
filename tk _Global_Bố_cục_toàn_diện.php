<?php declare(strict_types=1);
//  Sử dụng global
     $tung=10;$bi=30;
 function add(){
     global $tung,$bi ;
     $tung=$tung+$bi;
 }
/// Không sử dụng biến global sẽ không thể gọi ra ngoài bạn  cần phải return kết quả ra và không dùng được biến đó bên ngoài.
 function add1(){
     $tung1=50;$bi1=50;
     return $tung1+$bi1;
 }
 add();
 echo($tung);
 echo("\n".add1());