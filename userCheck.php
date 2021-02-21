<?php
  $flag = true;
  if($_POST["user_number"] == ""){
    $flag = false;
  }
  if($_POST["user_name"] == ""){
    $flag = false;
  }
  if($_POST["user_password"] == ""){
    $flag = false;
  }
  if($_POST["user_password"] != $_POST["user_password2"]){
    $flag = false;
  }
  // if ($flag){
  //   echo "OK";
  // }
  // else{
  //   echo "NG";
  // }
  //転送
  $host = $_SERVER['HTTP_HOST'];
  $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

  if($flag)  {
      include "dbConnect.php";

      $user_number = $_POST["user_number"];
      $user_name = $POST[]
    }
    else {
      $extra = "userRegister.html";
      header("Location: http://$host$uri/$extra");
      exit();
    }

?>
