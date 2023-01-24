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

        //ak je spravne vyplneny email
        if ( $errors["email"] == false ) {
            //kontrola hesla
            if( strlen( trim($_POST["passwd"]) ) < 8 || strlen( trim($_POST["passwd"]) ) > 10 ) {
                echo "<p class='eText'> Zadaj heslo zložené z ľubovoľných 8-11 znakov, čisel alebo symbolov. </p>";
                $errors["passwd"] = true;
            }
        }

        //ak je spravne vyplnene heslo
        if ( $errors["email"] == false || $errors["passwd"] == false ) {
            //potvrdenie hesla
            if( trim($_POST["co_passwd"])  != trim($_POST["passwd"]) ) {
                echo "<p class='eText'> Potvrď heslo. </p>";
                $errors["co_passwd"] = true;
            }
        }

        //ak je spravne vyplnene aj potvrdene heslo
        if ( $errors["email"] == false || $errors["passwd"] == false 
        || $errors["co_passwd"] == false ) {
            //kontrola mena
            if( trim($_POST["fname"])  == "" || strlen( trim($_POST["fname"]) ) < 2 
            || strlen( trim($_POST["fname"]) ) > 20 ) {
                echo "<p class='eText'> Zadaj meno s počtom znakov 2-20. </p>";
                $errors["fname"] = true;
            }

            //kontrola priezviska
            if( trim($_POST["lname"])  == "" || strlen( trim($_POST["lname"]) ) < 2 
            || strlen( trim($_POST["lname"]) ) > 40 ) {
                echo "<p class='eText'> Zadaj priezvisko s počtom znakov 2-40. </p>";
                $errors["lname"] = true;
            }
        }

        //ak je spravne vyplnene predosle
        if ( $errors["email"] == false || $errors["passwd"] == false 
        || $errors["co_passwd"] == false || $errors["fname"] == false 
        || $errors["lname"] == false ) {
            //kontrola pohlavia
            if( $_POST["gender"]  == 0 ) {
                echo "<p class='eText'> Vyber si pohlavie. </p>";
                $errors["gender"] = true;
            }
        }

        //ak je spravne vyplnene pohlavie
        if ( $errors["email"] == false || $errors["passwd"] == false 
        || $errors["co_passwd"] == false || $errors["fname"] == false 
        || $errors["lname"] == false || $errors["gender"] == false ) {
            //kontrola veku
            if( $_POST["age"]  == 0 ||  $_POST["age"] < 15 
            || $_POST["age"] > 150  ) {
                echo "<p class='eText'> Zadaj vek od 15r. </p>";
                $errors["age"] = true;
            }

            //kontrola vysky
            if( $_POST["height"]  == 0 || $_POST["height"] < 130 
            || $_POST["height"] > 240 ) {
                echo "<p class='eText'> Zadaj vysku. </p>";
                $errors["age"] = true;
            }

            //kontrola vahy
            if( $_POST["weight"]  == 0 || $_POST["weight"] < 30 
            || $_POST["weight"] > 220 ) {
                echo "<p class='eText'> Zadaj vahu. </p>";
                $errors["age"] = true;
            }
        }
  }

  //sprava o registracii
  function register($errors) {
    if ( $errors["checked"] == true ) {
        //uspech
        if( $errors["registered"] == true ) {
            echo "<p class='gText'> Úspešná registrácia! </p>";
        }

        //neuspech
        if( $errors["registered"] == false ) {
            echo "<p class='rText'> Neúspešná registrácia! </p>";
        }
    }
}

?>