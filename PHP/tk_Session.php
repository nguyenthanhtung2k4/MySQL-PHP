<?php
session_start();
$_SESSION['username'] = 'John Doe';
echo "Tên người dùng: " . $_SESSION['username'];
session_destroy();
if (isset($_SESSION['username'])) {
    echo "Biến session vẫn tồn tại";
} else {
    echo "Biến session đã bị xóa";
}
?>
