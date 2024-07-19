<!-- Request -->
<h3>Request</h3>
<form action="index.php",  method="post"> <!-- tham so  chuyen vao  post hay  get-->
     <input type="text" name='request'>
     <input type="submit" value='Request'>
</form>
<!-- Post -->
 <h3>Post</h3>
 <form action="index.php",  method="post">
      <input type="text" name='post'>
      <input type="submit" value='Post'>
</form>
<!--  Get -->
<h3>Get</h3>
<form action="index.php",  method="get">
     <input type="text" name='get'>
     <input type="submit" value='Get'>
</form>
<!-- php -->
<?php
     echo($_REQUEST['request']);
     echo($_POST['post']);
     echo($_GET['get']);
?>