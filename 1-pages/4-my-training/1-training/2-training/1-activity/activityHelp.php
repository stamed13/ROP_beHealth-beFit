<?php
    // kontrola vyplnenia prveho formularu
    function errorCALI(){
        if( $_POST['saveCali'] ){

            // ak nevyplnil apon jeden cvik
            if( $_POST["pull"] == 0 || $_POST["push"] == 0 
            || $_POST["leg"] == 0 || $_POST["core"] == 0 ){
                echo "<div class='rText'>Vyber cviky na posilovanie!</div>";
            }
        }
    }

    function errorSTRETCH(){
        if( $_POST['saveCali'] ){

            // ak nevyplnil apon jeden cvik
            if( $_POST["pull"] == 0 || $_POST["push"] == 0 
            || $_POST["leg"] == 0 || $_POST["core"] == 0 ){
                echo "<div class='rText'>Vyber cviky na posilovanie!</div>";
            }
        }
    }

    // upozornenia vyplnenia prveho formularu
    function warningCALI(){
        if( $_POST['saveCali'] ){
            
        }

        // prvy zaznam, upozornim, ze ma vyplnit tym co dokaze
        if( 1 == 1 ){
            //echo "Ahoj! Vidim, ze si tu este kratko. Vyber prosim cviky, ktore ";
        }
    }
?>