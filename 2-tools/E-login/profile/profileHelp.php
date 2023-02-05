<?php
    function gender($conn){
        $email = $_SESSION['email'];
        $sql = "SELECT genders.name FROM users  
        LEFT JOIN genders ON users.genderId = genders.idGender
        WHERE users.email='$email'";

        $row = mySQLassoc($conn, $sql);
        return $row['name'];
    }

    function age($conn){
        $email = $_SESSION['email'];
        $sql = "SELECT age FROM users  
        WHERE email='$email'";

        $row = mySQLassoc($conn, $sql);
        return $row['age'];
    }

    function height($conn){
        $email = $_SESSION['email'];
        $sql = "SELECT height FROM users  
        WHERE email='$email'";

        $row = mySQLassoc($conn, $sql);
        return $row['height'];
    }

    function weight($conn){
        $email = $_SESSION['email'];
        $sql = "SELECT weight FROM users  
        WHERE email='$email'";

        $row = mySQLassoc($conn, $sql);
        return $row['weight'];
    }
?>