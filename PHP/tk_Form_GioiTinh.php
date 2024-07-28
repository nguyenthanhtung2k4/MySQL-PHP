<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Form</title>
</head>
<body>
<?php 
     echo("Ket qua in ra la: \n\n\n");
     $name=$_REQUEST['name'];
     $gioitinh=$_REQUEST['gioitinh'];

     echo("<br>".$name."<br>".$gioitinh);

?>
     <form action="index.php" method="post">
          <label>Name</label>
          <input type="text" placeholder="Name Your" name="name"><br>
          <label>Gioi tinh : </label><br>
          <label>Boy</label>
          <input type="radio" name="gioitinh" value="Boy">
          <label>Girl</label>
          <input type="radio" name="gioitinh" value="Girl">
          <input type="submit">
     </form>
</body>
</html>
<!-- php -->