<?php

include "dbConnect.php";

 $sql  = "SELECT * FROM stockList";

  if($result = mysqli_query($conn , $sql) ){
		echo "select OK<br>";
  }
  else {
    echo mysqli_error($conn)."<BR>";
    exit();
  }

  while($row = mysqli_fetch_assoc($result)){
      echo $row['stock_id'] . "," . $row['stock_name'] . "," . $row['amount']  . "," .
  			  $row["type"] . "," . $row["remarks"] ."<br>";
  }



  mysqli_close($conn);

?>
finished
