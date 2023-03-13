<?php
    // kontrola vyplnenia prveho formularu - chyby
    function errorCALI($errors, $conn){
        $idUSer = $_SESSION['idUser'];
        $activityCount = mySQLassoc($conn, "SELECT COUNT(*) AS count FROM useractivity WHERE (userId='$idUSer')");

        if( $_POST['saveCali'] ){

            if( $activityCount["count"] > 1 ){
                // ak nevyplnil apon jeden cvik
            if( $_POST["pull"] == 0 && $_POST["push"] == 0 
            && $_POST["legC"] == 0 && $_POST["core"] == 0 ){
                echo "<div class='rText'>Vyber aspoň jeden cvik na posilňovanie!</div>";
            } 
            }
            // ak vyplnil apon jeden cvik
            if($errors["checked"] == false) {
                
            }
        }

    }

    // kontrola vyplnenia druheho formularu - chyby
    function errorSTRETCH($errors, $conn){
        $idUSer = $_SESSION['idUser'];
        $activityCount = mySQLassoc($conn, "SELECT COUNT(*) AS count FROM useractivity WHERE (userId='$idUSer')");

        if( $_POST['saveStre'] ){

            if( $activityCount["count"] > 1 ){
                // ak nevyplnil apon jeden cvik
                if( $_POST["neck"] == 0 && $_POST["hand"] == 0 
                && $_POST["back"] == 0 && $_POST["leg"] == 0 ){
                    echo "<div class='rText'>Vyber aspoň jeden cvik na strečing!</div>";
                } 
            }
            // ak vyplnil apon jeden cvik
            if($errors["checked"] == false) {
                
            }
        }
    }

    // kontrola vyplnenia prveho formularu - varovania
    function warningCALI($errors, $conn){
        $idUSer = $_SESSION['idUser'];
        $activityCount = mySQLassoc($conn, "SELECT COUNT(*) AS count FROM useractivity WHERE (userId='$idUSer')");

        if( $_POST['saveCali'] ){

            
        }

        // prvy zaznam, upozornim, ze ma vyplnit tym co dokaze
        if( $activityCount["count"] == 0 || $activityCount["count"] == 1 ){
            if( $_POST["pull"] == 0 || $_POST["push"] == 0 
            || $_POST["legC"] == 0 || $_POST["core"] == 0 ){
                echo "<div class='oText'>Ahoj! Toto je tvoja prvá aktivita. Vyplň prosím všetky možnosti. Ukáž mi prosím, čo všetko dokážeš!</div>";
                //echo "Ahoj! Vidim, ze si tu este kratko. Vyber prosim cviky, ktore ";
    
                // ak je extrem
                if( $_POST["pull"] == 1 || $_POST["push"] == 1 
                || $_POST["legC"] == 1 || $_POST["core"] == 1
                && $_POST["pull"] == 3 || $_POST["push"] == 3 
                || $_POST["legC"] == 3 || $_POST["core"] == 3 ){
                    //echo "<div class='oText'>Urcite to dokazes?</div>";
                }
            }
        }
    }

    // kontrola vyplnenia druheho formularu - varovania
    function warningSTRE($errors, $conn){
        $idUSer = $_SESSION['idUser'];

        //echo "pocet-aktivit pouzivatela:    ";
        $activityCount = mySQLassoc($conn, "SELECT COUNT(*) AS count FROM useractivity WHERE (userId='$idUSer')");
        //echo $activityCount["count"];
        //echo "  ";

        if( $_POST['saveCali'] ){

            
        }

        // prvy zaznam, upozornim, ze ma vyplnit tym co dokaze
        if( $activityCount["count"] == 0 || $activityCount["count"] == 1 ){
            if( $_POST["neck"] == 0 || $_POST["hand"] == 0 
            || $_POST["back"] == 0 || $_POST["leg"] == 0 ){
                echo "<div class='oText'>Ahoj! Toto je tvoja prvá aktivita. Vyplň prosím všetky možnosti. Ukáž mi prosím, čo všetko dokážeš!</div>";
                //echo "Ahoj! Vidim, ze si tu este kratko. Vyber prosim cviky, ktore ";

                //extrem
            }
        }
    }

    // kontrola vyplnenia prveho formularu - informacie
    function infoCALI($errors, $conn){
        $idUSer = $_SESSION['idUser'];
        $activityCount = mySQLassoc($conn, "SELECT COUNT(*) AS count FROM useractivity WHERE (userId='$idUSer')");

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
    function infoSTRETCH($errors, $conn){
        $idUSer = $_SESSION['idUser'];
        $activityCount = mySQLassoc($conn, "SELECT COUNT(*) AS count FROM useractivity WHERE (userId='$idUSer')");
        
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