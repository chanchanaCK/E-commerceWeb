<?php
$dbcon = mysqli_connect('localhost','root','','p_db');
if(mysqli_connect_errno()){
  echo "ไม่สารมารถติดต่อกับ MySQL ได้". mysqli_connect_errno();

}
mysqli_set_charset($dbcon,'utf8');

 ?>
