<?php
     include('tk_Connect_DataBase.php');
     $sql = "SELECT * FROM account";
     $kq = mysqli_query($contac, $sql);
     while ($data = mysqli_fetch_array($kq)) {
            echo "<tr>";
            echo "<td>" . $data['id'] . "</td>";
            echo "<td>" . $data['tai_khoan'] . "</td>";
            echo "<td>" . $data['mat_khau'] . "</td>";
            echo "<td>" . $data['lave'] . "</td>"; 
            echo "</tr>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
</head>
<body>
    <h1>Account</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Pass</th>
            <th>Level</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <tr>
          <td><?php echo $data['id'] ?> </td>
        </tr>
        
    </table>
    <?php }?>
</body>
</html>
https://www.youtube.com/watch?v=SPR2Yxzi8hw&list=PLaevEBkXyvnXEMoe6ZHFJGjPDb_eCCVNc&index=84