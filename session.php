<?php
session_start();
if (!isset($_SESSION['login_id'])){
  header("Location: f_login.php");
}

require 'connect.php';
$session_login_id = $_SESSION['login_id'];

$qry_user = "SELECT * FROM tb_login WHERE login_id='$session_login_id'";
$result_user = mysqli_query($dbcon,$qry_user);
if ($result_user){
  $row_user = mysqli_fetch_array($result_user,MYSQLI_ASSOC);
  $s_login_username =$row_user['login_username'];
  $s_login_email = $row_user['login_email'];
  $s_login_first_name = $row_user['first_name'];
  $s_login_last_name = $row_user['last_name'];
  mysqli_free_result($result_user);
}
mysqli_close($dbcon);
 ?>
