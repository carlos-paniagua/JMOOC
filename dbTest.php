

  // $sql = "INSERT INTO stockUser (user_number , user_name , user_password , enable) ";
  // $sql .= " VALUES ('A12' , '毘沙門太郎' , '111' , 1)";
  // echo $sql;

  // if($result = mysqli_query($conn , $sql) ){
  //   echo " insert OK <BR>";
  // }
  // else {
  //   echo " insert NG <BR> ";
  // }

  $sql = "select * from stockUser";

  if($result = mysqli_query($conn,$sql)){
    echo "select OK";
    echo "<br>レコード件数".mysqli_num_rows($result)."<br>";
  }
  else{
    echo mysqli_error($conn)."<BR>";
  }

  while($row = mysqli_fetch_assoc($result)){
    echo $row['user_id'].",".$row['user_number'].".".$row['user_name'].".".$row["user_password"]."<br>";
  }

  mysqli_close($conn);

  
  finish