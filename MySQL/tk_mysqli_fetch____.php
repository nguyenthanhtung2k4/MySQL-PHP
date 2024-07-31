<?php 
// lấy dữ liệu bằng array: 
     while ($row = mysqli_fetch_array($result)) {
          echo "ID: " . $row["id"] . ", Name: " . $row[1];
          // ==> Lấy được bằng cả tên và chỉ số.
     }

// lấy dữ liệu bằng assoc:
     while ($row = mysqli_fetch_assoc($result)) {
          echo "ID: " . $row["id"] . ", Name: " . $row["name"];
          // ==> Lấy được bằng tên
     }
     
// lấy dữ liệu bằng row:
while ($row = mysqli_fetch_row($result)) {
     echo "ID: " . $row[0] . ", Name: " . $row[1];
     // ==> Lấy được bằng chỉ số
}

// lấy dữ liệu bằng object:
     class User {
          public $id;
          public $username;
          public $email;
     }
     while ($row = mysqli_fetch_object($result, 'User')) {
          echo "ID: " . $row->id . ", Name: " . $row->username;
     }
     // ==> Thường ít sử dụng
?>