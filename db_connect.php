<?php
  $connection = mysqli_connect('192.168.0.31', 'atten', '');
  if (!$connection)
  {
      die("Database Connection Failed" . mysqli_error($connection));
  }
  $select_db = mysqli_select_db($connection, 'attendance');
  if (!$select_db)
  {
      die("Database Selection Failed" . mysqli_error($connection));
  }
?>
