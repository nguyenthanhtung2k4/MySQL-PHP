<?php
// Kiểm tra xem chuỗi "hello" có chứa ký tự "l" hay không
$pattern = "/l/";
$subject = "hello";

if (preg_match($pattern, $subject)) {
    echo "Chuỗi \"$subject\" có chứa ký tự \"l\"<br>";
} else {
    echo "Chuỗi \"$subject\" không chứa ký tự \"l\"<br>";
}

// Kiểm tra xem chuỗi "123abc" có bắt đầu bằng chữ số hay không
$pattern = "/^\d/";
$subject = "123abc";

if (preg_match($pattern, $subject)) {
    echo "Chuỗi \"$subject\" bắt đầu bằng chữ số<br>";
} else {
    echo "Chuỗi \"$subject\" không bắt đầu bằng chữ số<br>";
}

// Kiểm tra xem chuỗi "email@example.com" có định dạng email hợp lệ hay không
$pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
$subject = "email@example.com";

if (preg_match($pattern, $subject)) {
    echo "Chuỗi \"$subject\" có định dạng email hợp lệ<br>";
} else {
    echo "Chuỗi \"$subject\" không có định dạng email hợp lệ<br>";
}
?>
