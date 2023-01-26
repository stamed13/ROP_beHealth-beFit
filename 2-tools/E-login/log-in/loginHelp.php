<?php 
    //funkcia vykona prikaz spojeny s databazou
    function SQLquery($conn, $query) {
      $result = $conn->query($query);

      if($result->num_rows> 0){
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
      }
    }

    function errorLOG($conn, $email, $passwd) {
        $errors = [
            "check" => false,
            "email" => false,
            "passwd" => false,
        ];

        if ( trim($_POST["email"])  == "" || trim($_POST["passwd"])  == "" ) {
            echo "<p class='eText'> Vypln udaje. </p>";
            $errors["check"] = true;
        }

        //kontrola emailu
        if( ! (SQLquery($conn, "SELECT email FROM users WHERE email='$email' ")) ) {
            echo "<p class='eText'> E-mail neexistuje. </p>";
            $errors["email"] = true;
        } 

        //ak je spravne vyplneny email
        if ( $errors["email"] == false ) {
            //password($conn, $email, $passwd);

            //kontrola hesla
            if( password($conn, $email, $passwd) == true ) {
                echo "<p class='eText'> Nesprávne heslo. </p>";
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
  function password($conn, $email, $passwd) {
    $sql = "SELECT * FROM users WHERE email='$email'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) == 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['email'] == $email && password_verify($passwd, $row['passwd']) ) {
                return false;
            }else{
                return true;
			}
		}else{
            return true;
		}
  }

    //inicialy
    function inicialy($conn, $email) {
        $sql = "SELECT * FROM users WHERE email='$email'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) == 1) {
			$row = mysqli_fetch_assoc($result);

            $fname = substr($row['fname'], 0, 1);
            $lname = substr($row['lname'], 0, 1);
            $inicialy = substr_replace($fname, $lname, 1, 0);

            return $inicialy;
		}
    }

    function fullname($conn, $email) {
        $sql = "SELECT * FROM users WHERE email='$email'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) == 1) {
			$row = mysqli_fetch_assoc($result);

            //$fname = $row['fname'];
            $fname = substr_replace(" ", $row['fname'], 0, 0);
            //$lname = $row['lname'];
            $fullname = substr_replace($row['lname'], $fname, 0, 0);

            return $fullname;
		}
    }


?>