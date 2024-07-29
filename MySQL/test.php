<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
</head>
<body>
    <h1>New Account</h1>
    <form action="testNew.php" method="get">
        <label for="">Name</label>
        <input type="text" name="name">
        <label for="">Pass</label>
        <input type="text" name="pass">
        <label for="">Level</label>
        <input type="number" name="lave">
        <input type="submit" name="submit">
    </form>
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
        <?php
            include('tk_Connect_DataBase.php');
            $sql = "SELECT * FROM account";
            $kq = mysqli_query($contac, $sql);
            while ($data = mysqli_fetch_array($kq)) {
                
        ?>
        <tr>
          <td><?php echo $data['id'] ?> </td>
          <td><?php echo $data['tai_khoan'] ?> </td>
          <td><?php echo $data['mat_khau'] ?> </td>
          <td><?php echo $data['lave'] ?> </td>
          <td><a href="testedit.php">sua</a></td>
          <td><a name='xoa' href="testDelete.php?deleteId=<?php echo $data['id']?>">xoa</a></td>
          
        </tr>
        
    </table>
    <?php }?>
</body>
</html>
<!-- https://www.youtube.com/watch?v=SPR2Yxzi8hw&list=PLaevEBkXyvnXEMoe6ZHFJGjPDb_eCCVNc&index=84 -->