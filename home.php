<?php 
  include 'mysqloperations/mysqldb.php';
  $query = "SELECT * FROM USER";
  
  $result = db_query($query);
  if($result === false) {
      echo "failed";
  } else {
      echo mysqli_fetch_assoc($result)['UserName'];
  }
  
  
  echo mysqli_fetch_assoc($result);
?>