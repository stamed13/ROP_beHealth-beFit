<?php
    //vypis pola
    function debug($data, $title = null, $stop = false) {
        if($title) {
            echo "<br><strong>$title</strong>";
        }

        echo "<pre>";
        print_r($data);
        echo "</pre>";

        if($stop) {
            exit;
        }
    }

    //priradenie triedy ku komponentu
    function AddClass($condition, $class) {
        if($condition) {
            return $class;
        }
    }

    //funkcia vykona prikaz spojeny s databazou
    function mySQLall($conn, $query) {
        $result = $conn->query($query);
  
        if($result->num_rows> 0){
            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        }
    }

    //funkcia vykona prikaz spojeny s databazou
    function mySQLassoc($conn, $sql) {
	    $result = mysqli_query($conn, $sql);

	    if (mysqli_num_rows($result) == 1) {
	    	$row = mysqli_fetch_assoc($result);
            return $row;
	    }
    }

    //funkcia vykona prikaz spojeny s databazou
    function mySQLupdate($conn, $sql) {
        if ($conn->query($sql) === TRUE) {
            echo true;
        }
    }

    //funkcia na presmerovanie na aktualnu stranku
    function actualLocation() {
        $location = substr_replace(" ", "Location:", 0, 0);
        $headerLocation = substr_replace($_SESSION["location"], $location, 0, 0);
        return $headerLocation;
    }

?>