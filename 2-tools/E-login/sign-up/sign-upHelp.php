<?php 
    //funkcia vykona prikaz spojeny s databazou
    function SQLquery($conn, $query) {
      $result = $conn->query($query);

      if($result->num_rows> 0){
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
      }
    }

    function errorLOG($conn, $email) {
        $errors = [
            "check" => false,
            "email" => false,
            "passwd" => false,
            "co_passwd" => false,
            "fname" => false,
            "lname" => false,
            "gender" => false,
            "age" => false,
            "height" => false,
            "weight" => false,
        ];

        if ( trim($_POST["email"])  == "" || trim($_POST["passwd"])  == "" || 
        trim($_POST["co_passwd"])  == "" || trim($_POST["lname"])  == "" ||
        trim($_POST["fname"])  == "" || trim($_POST["gender"])  == "" ||
        trim($_POST["age"])  == "" || trim($_POST["height"])  == "" || 
        trim($_POST["weight"])  == "" ) {
            echo "<p class='eText'> Vypln udaje. </p>";
            $errors["check"] = true;
        }

        //nesprávnom formáte emailu
        if( ! (filter_var(trim($_POST["email"]), FILTER_VALIDATE_EMAIL)) ) {
            echo "<p class='eText'> E-mail je v nesprávnom formáte. </p>";
            $errors["email"] = true;
        } 

        //kontrola emailu
        if( strlen( trim($_POST["email"]) ) > 60 ) {
            echo "<p class='eText'> E-mail je dlhý. </p>";
            $errors["email"] = true;
        } 

        //kontrola emailu
        if( SQLquery($conn, "SELECT email FROM users WHERE email='$email' ") ) {
            echo "<p class='eText'> E-mail už existuje. </p>";
            $errors["email"] = true;
        } 

      if ( $errors["email"] == false ) {
        //kontrola hesla
        if( strlen( trim($_POST["passwd"]) ) < 8 || strlen( trim($_POST["passwd"]) ) > 10 ) {
            echo "<p class='eText'> Zadaj heslo zložené z ľubovoľných 8-11 znakov, čisel alebo symbolov. </p>";
            $errors["passwd"] = true;
        }

        //ak je spravne vyplnene heslo, moze sa potvrdit
        if ( $errors["passwd"] == false ) {
            //potvrdenie hesla
            if( trim($_POST["co_passwd"])  != trim($_POST["passwd"]) ) {
            echo "<p class='eText'> Potvrd heslo. </p>";
            $errors["co_passwd"] = true;
            }

            //kontrola mena
            if ( $errors["co_passwd"] == false ) {

                if( trim($_POST["fname"])  == "" || strlen( trim($_POST["fname"]) ) < 2 
                || strlen( trim($_POST["fname"]) ) > 20 ) {
                    echo "<p class='eText'> Zadaj meno s poctom znakov 2-20. </p>";
                    $errors["fname"] = true;
                }
            }
        }    
    }


      //kontrola priezviska
      if( trim($_POST["lname"])  == "" || strlen( trim($_POST["lname"]) ) < 2 
      || strlen( trim($_POST["lname"]) ) > 40 ) {

      }

      //kontrola pohlavia
      if( $_POST["gender"]  == 0 ) {

      }

      //kontrola veku
      if( $_POST["age"]  == 0 ||  $_POST["age"] < 15 
      || $_POST["age"] > 150  ) {

      }

      //kontrola vysky
      if( $_POST["height"]  == 0 || $_POST["height"] < 130 
      || $_POST["height"] > 240 ) {

      }

      //kontrola vahy
      if( $_POST["weight"]  == 0 || $_POST["weight"] < 30 
      || $_POST["weight"] > 220 ) {

      }
  }

?>