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
  // $host = $_SERVER['HTTP_HOST'];
  // $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

  if($flag)  {
      include "dbConnect.php";

      $user_number = $_POST["user_number"];
      $user_name = $_POST["user_name"];
      $user_password = $_POST["user_password"];

      $sql = "INSERT INTO stockUser (user_number , user_name , user_password , enable) ";
      $sql .= " VALUES('$user_number' , '$user_name' , '$user_password' , 1)";
      echo $sql;

      if($result = mysqli_query($conn,$sql)){
        echo " insert OK<BR>";
      }
      else{
        echo " insert NG<BR>";
      }

      $sql = "select * from stockUser";
      if($result = mysqli_query($conn,$sql)){
        echo "select OK<BR>";
      }
      else{
        echo "select NG<BR>";
      }

      while($row = mysqli_fetch_assoc($result)){
        echo $row['user_id'].",".$row['user_number'].",".$row['user_name'].",".
        $row['user_password']."<br>";
      }

      mysqli_close($conn);
    }

    else {
      $host = $_SERVER['HTTP_HOST'];
      $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
      $extra = "userRegister.html";
      header("Location: http://$host$uri/$extra");
      exit();
    }
?>
