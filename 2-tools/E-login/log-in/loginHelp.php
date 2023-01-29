<?php 
    function errorLOG($conn, $email, $passwd) {
        $errors = [
            "check" => false,
            "email" => false,
            "passwd" => false,
        ];

        if ( isset($_POST["submit"])) {
            if ( trim($_POST["email"])  == "" || trim($_POST["passwd"])  == "" ) {
                echo "<p class='eText'> Vypln udaje. </p>";
                $errors["check"] = true;
            }
    
            //kontrola emailu
            if( ! (mySQLall($conn, "SELECT email FROM users WHERE email='$email' ")) ) {
                echo "<p class='eText'> E-mail neexistuje. </p>";
                $errors["email"] = true;
            } 
    
            //ak je spravne vyplneny email
            if ( $errors["email"] == false ) {
                //password($conn, $email, $passwd);
    
                //kontrola hesla
                if( password($conn, "SELECT * FROM users WHERE email='$email'", $email, $passwd) == true ) {
                    echo "<p class='eText'> Nesprávne heslo. </p>";
                }
            }
        }
  }

  //sprava o prihlaseni
  function login($errors) {
    //uspech
    if ( $errors["checked"] == true ) {
        echo "<p class='gText'> Úspešné prihlasenie! </p>";
    }
}

  //sprava o prihlaseni
  function password($conn, $sql, $email, $passwd) {
    $row = mySQLassoc($conn, $sql);

    if ($row['email'] == $email && password_verify($passwd, $row['passwd']) ) {
        return false;
    } else {
        return true;
    }
  }

    //inicialy
    function inicialy($conn, $sql) {
        $row = mySQLassoc($conn, $sql);

        $fname = substr($row['fname'], 0, 1);
        $lname = substr($row['lname'], 0, 1);
        $inicialy = substr_replace($fname, $lname, 1, 0);

        return $inicialy;
    }

    function fullname($conn, $sql) {
        $row = mySQLassoc($conn, $sql);

		//$fname = $row['fname'];
        $fname = substr_replace(" ", $row['fname'], 0, 0);
        //$lname = $row['lname'];
        $fullname = substr_replace($row['lname'], $fname, 0, 0);

        return $fullname;
    }

    //funkcia vykona prikaz spojeny s databazou
    /*function SQLquery($conn, $query) {
        $result = $conn->query($query);

        if($result->num_rows> 0){
            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        }
    }*/
?>