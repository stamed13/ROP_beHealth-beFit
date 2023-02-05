<?php
    function gender($conn){
        $email = $_SESSION['email'];
        $sql = "SELECT genders.name FROM users  
        LEFT JOIN genders ON users.genderId = genders.idGender
        WHERE users.email='$email'";

        $row = mySQLassoc($conn, $sql);
        $gender = $row['name'];
        return $gender;
    }

    function age($conn){
        $email = $_SESSION['email'];
        $sql = "SELECT age FROM users  
        WHERE email='$email'";

        $row = mySQLassoc($conn, $sql);
        $age = $row['age'];
        return $age;
    }
?>