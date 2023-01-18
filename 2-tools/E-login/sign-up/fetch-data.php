<?php 
    $query ="SELECT * FROM genders";
    $result = $conn->query($query);
    if($result->num_rows> 0){
      $genders= mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
?>