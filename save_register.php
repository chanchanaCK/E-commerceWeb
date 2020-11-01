<?php
require 'connect.php';

$login_firstname = $_POST['firstname'];
$login_username = $_POST['username'];
$login_password = $_POST['pass'];
$login_email = $_POST['email'];

//เข้ารหัสผ่าน
$salt = 'a23d9sjdap09j3jals';
$hash_login_password = hash_hmac('sha256',$login_password,$salt);
$query ="INSERT INTO tb_login(first_name,login_username,login_password,login_email) VALUES('$login_firstname','$login_username','$hash_login_password','$login_email')";
$result = mysqli_query($dbcon,$query);
if($result){
  header("location: login.php");
}else {
  echo "เกิดข้อผิดพลาด".mysqli_error($dbcon);
}
mysqli_close($dbcon);
 ?>
