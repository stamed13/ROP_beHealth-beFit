<?php
    // kontrola vyplnenia prveho formularu - chyby
    function errorCALI($errors){
        if( $_POST['saveCali'] ){

            // ak nevyplnil apon jeden cvik
            if( $_POST["pull"] == 0 && $_POST["push"] == 0 
            && $_POST["legC"] == 0 && $_POST["core"] == 0 ){
                echo "<div class='rText'>Vyber aspon jeden cvik na posilovanie!</div>";
            } 
            // ak vyplnil apon jeden cvik
            if($errors["checked"] == false) {
                
            }
        }

    }

    // kontrola vyplnenia druheho formularu - chyby
    function errorSTRETCH($errors){
        if( $_POST['saveStre'] ){

            // ak nevyplnil apon jeden cvik
            if( $_POST["neck"] == 0 && $_POST["hand"] == 0 
            && $_POST["back"] == 0 && $_POST["leg"] == 0 ){
                echo "<div class='rText'>Vyber aspon jeden cvik na strecing!</div>";
            } 
            // ak vyplnil apon jeden cvik
            if($errors["checked"] == false) {
                
            }
        }
    }

    // kontrola vyplnenia prveho formularu - varovania
    function warningCALI($errors){
        if( $_POST['saveCali'] ){

            
        }

        // prvy zaznam, upozornim, ze ma vyplnit tym co dokaze
        if( 1 + 1 != 2 ){
            //echo "Ahoj! Vidim, ze si tu este kratko. Vyber prosim cviky, ktore ";

            // ak je extrem
            if( $_POST["pull"] == 1 || $_POST["push"] == 1 
            || $_POST["legC"] == 1 || $_POST["core"] == 1
            && $_POST["pull"] == 3 || $_POST["push"] == 3 
            || $_POST["legC"] == 3 || $_POST["core"] == 3 ){
                echo "<div class='oText'>Urcite to dokazes?</div>";
            }
        }
    }

    // kontrola vyplnenia prveho formularu - informacie
    function infoCALI($errors){
        if( $_POST['saveCali'] ){
            // ak nevyplnil apon jeden cvik
            if( $_POST["pull"] == 0 && $_POST["push"] == 0 
            && $_POST["legC"] == 0 && $_POST["core"] == 0 ){
                
            } 
            if($errors["checked"] == false) {
                
            }
        }
    }

    // kontrola vyplnenia prveho formularu - informacie
    function infoSTRETCH($errors){
        if( $_POST['saveStre'] ){
            // ak nevyplnil apon jeden cvik
            if( $_POST["neck"] == 0 && $_POST["hand"] == 0 
            && $_POST["back"] == 0 && $_POST["leg"] == 0 ){
                
            } 
            if($errors["checked"] == false) {
                
            }
        }
    }

    // ulozenie aktivity
    /*function saveActivity($conn, $calisthenics, $errors){
        $idUSer = $_SESSION['idUser'];
        $pull = $calisthenics["pull"];
        $push = $calisthenics["push"];
        $core = $calisthenics["core"];
        $leg = $calisthenics["leg"];

        // ak nie je vytvorena aktivita od pouzivatela v dnesnom dni, vytvorim
        if( mySQLall($conn, "SELECT * FROM useractivity 
        WHERE userId='$idUSer' AND (SELECT CURDATE())") == 0 ){
        //if(1 == 1){
            echo "Dnes nie je aktivita.  ";

            // vytvorenie aktivity z cvikov posilovania
            if( $_POST['saveCali'] ){
                echo "Odoslany formular. ";

                // kontrola formularu
                if( $errors["checked"] == false ) {
                    echo "Spravny formular.";

                    $sql = "INSERT INTO useractivity (date, userId, pullCa, pushCa, coreCa, legCa) 
                    VALUES ( (SELECT CURDATE()), $idUSer, $pull, $push, $core, $leg )";

                    //$sql = "SELECT CURDATE()";

                    if (mysqli_query($conn, $sql)) {
                        $errors["success"] = true;
                    } else {
                        $errors["success"] = false;
                    }
  
                    mysqli_close($conn);
                }
            }

        } 
        // ak je vytvorena, aktualizujem aktivitu 
        else {
            echo "Dnes uz je aktivita.  ";

            // aktualizovanie aktivity z cvikov posilovania
            if( $_POST['saveCali'] ){
                echo "Odoslany formular. ";

                // kontrola formularu
                if( $errors["checked"] == false ) {
                    echo "Spravny formular.";

                    $sql = "UPDATE useractivity SET pullCa='$pull', pushCa='$push', coreCa='$core', 
                    legCa='$leg' WHERE userId='$idUSer' AND (SELECT CURDATE())";

                    //$sql = "SELECT CURDATE()";

                    if (mysqli_query($conn, $sql)) {
                        $errors["success"] = true;
                    } else {
                        $errors["success"] = false;
                    }
  
                    mysqli_close($conn);
                }
            }

        }
    }*/

?>