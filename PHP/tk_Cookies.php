<?php
// Thiết lập cookie
               setcookie('username', 'JohnDoe', time() + 3600); // Cookie tồn tại trong 36000 giây= 1giờ

               // Truy cập cookie
               if(isset($_COOKIE['username'])) {
               echo "Username: " . $_COOKIE['username'];
               }

?>