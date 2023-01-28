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
?>