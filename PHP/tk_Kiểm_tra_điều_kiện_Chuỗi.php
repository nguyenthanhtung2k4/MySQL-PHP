<?php
// Kiểm tra xem email có hợp lệ không
$email = "example@example.com";
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Địa chỉ email hợp lệ.";
} else {
    echo "Địa chỉ email không hợp lệ.";
}

// Lọc một chuỗi để chỉ còn các chữ số
$string = "Hello123World456";
$filtered_string = filter_var($string, FILTER_SANITIZE_NUMBER_INT);
echo $filtered_string; // Kết quả: 123456
