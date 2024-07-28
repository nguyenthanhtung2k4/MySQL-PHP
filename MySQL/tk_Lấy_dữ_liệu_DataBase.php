<?php
     include('tk_Connect_DataBase.php');
     $sql="SELECT * FROM account";
     $ketqua=mysqli_query($contac,$sql);
     $so=mysqli_num_rows($ketqua);
     echo('<br>so la'.$so.'<br>');
    
     while($so=mysqli_fetch_array($ketqua)){
          echo 'ID';
          echo($so['id'].'<br>');
     }
?>