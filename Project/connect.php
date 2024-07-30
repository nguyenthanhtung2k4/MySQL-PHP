<?php
     $connect=new mysqli('localhost','root','','project');
     if($connect){
          mysqli_query($connect,"SET NAMES 'utf8' ");
     }else{
          echo'ERROR';
     }
?>