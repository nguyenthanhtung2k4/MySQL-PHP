<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login</title>
</head>
<body>
     <form action="login.php" method="post">
          <label for="Email"></label>
          <input type="email" name="email">
          <label for="Password"></label>
          <input type="pass" name="pass">
          <input type="submit" name="submit">
     </form>
</body>   
</html>
<?php
     if(isset($_POST['submit'])){
          
          if(!filter_var($email,FILTER_VALIDATE_EMAIL)==false){
               echo('email hop  le');
          }
     }
?>