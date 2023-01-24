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
            if( $errors["passwd"] == true ) {
                echo "<p class='eText'> Nesprávne heslo. </p>";
            }
        }
  }

  //sprava o prihlaseni
  function login($errors) {
    if ( $errors["checked"] == true ) {
        //uspech
        if( $errors["registered"] == true ) {
            echo "<p class='gText'> Úspešná prihlasenie! </p>";
        }
    }
}

  //sprava o prihlaseni
  function password($conn, $email, $passwd) {
    $sql = "SELECT * FROM users WHERE email='$email'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) == 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['email'] == $email && password_verify($passwd, $row['passwd']) ) {
                $errors["passwd"] = false;
                echo "<p class='gText'> Úspešná registrácia! </p>";
            }else{
                $errors["passwd"] = true;
                echo "<p class='eText'> Nesprávne heslo. </p>";
			}
		}else{
            $errors["passwd"] = true;
            echo "<p class='eText'> Nesprávne heslo. </p>";
		}
}

?>