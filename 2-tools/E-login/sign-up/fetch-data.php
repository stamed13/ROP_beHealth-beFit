<?php 
    //funkcia vykona prikaz spojeny s databazou
    function SQLquery($conn, $query) {
      $result = $conn->query($query);

      if($result->num_rows> 0){
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
      }
    }

    /*
    function SQLquery($conn, $query) {
      $result = mysqli_query($conn, $query);
      $resultCheck = mysqli_num_rows($result);
      
      if( $resultCheck > 0){
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
      }
    }
    */

    /*
    //cvicny kod, nahradil som ho funkciou
    $query ="SELECT * FROM genders";
    
    $result = $conn->query($query);
    if($result->num_rows> 0){
      $genders= mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
    */

?>