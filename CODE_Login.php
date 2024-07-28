<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login</title>
</head>
<body>
     <form action="index.php" method="post">
          <label for="Email">Email</label>
          <input type="text" name="email">
          <label for="Password">Password</label>
          <input type="pass" name="pass">
          <input type="submit" name="submit">
     </form>
</body>   
</html>
<?php
     if(isset($_POST['submit'])){
          $email=$_POST['email'];
          $pass=$_POST['pass'];
          if(!filter_var($email,FILTER_VALIDATE_EMAIL)==false){
               echo('<br>email hop  le');
          }else{
               echo('<br>email khong hop  le');
          }
          if(strlen(($_POST['pass']))>=8){
               echo('<br>Pass hop  le');
          }else{
               echo('<br>pass khong hop le');
          }
          // admin login
          if($email=='tung@gmail.com' && $pass=='12345678'){
               header('location: admin.php');
          }else{
               header('location: php.php');
          }
     }
?>