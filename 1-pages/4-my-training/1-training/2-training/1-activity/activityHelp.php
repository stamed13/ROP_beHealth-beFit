<?php
    // kontrola vyplnenia prveho formularu - chyby
    function errorCALI($errors){
        if( $_POST['saveCali'] ){

            // ak nevyplnil apon jeden cvik
            if( $_POST["pull"] == 0 && $_POST["push"] == 0 
            && $_POST["leg"] == 0 && $_POST["core"] == 0 ){
                echo "<div class='rText'>Vyber aspon jeden cvik na posilovanie!</div>";
            }
        }

        if($errors["success"]){

        }
    }

    // kontrola vyplnenia druheho formularu - chyby
    function errorSTRETCH(){
        
    }

    // kontrola vyplnenia prveho formularu - varovania
    function warningCALI(){
        if( $_POST['saveCali'] ){

            
        }

        // prvy zaznam, upozornim, ze ma vyplnit tym co dokaze
        if( 1 + 1 != 2 ){
            //echo "Ahoj! Vidim, ze si tu este kratko. Vyber prosim cviky, ktore ";

            // ak je extrem
            if( $_POST["pull"] == 1 || $_POST["push"] == 1 
            || $_POST["leg"] == 1 || $_POST["core"] == 1
            && $_POST["pull"] == 3 || $_POST["push"] == 3 
            || $_POST["leg"] == 3 || $_POST["core"] == 3 ){
                echo "<div class='oText'>Urcite to dokazes?</div>";
            }
        }
    }

    // kontrola vyplnenia prveho formularu - informacie
    function infoSTRETCH(){
        if( $_POST['saveStre'] ){
            
        }
    }

    // ulozenie aktivity
    function saveActivity($conn, $calisthenics, $errors){
        $idUSer = $_SESSION['idUser'];

        // ak nie je vytvorena aktivita od pouzivatela v dnesnom dni, vytvorim
        if( ! mySQLall($conn, "SELECT * FROM useractivity WHERE userId='$idUSer' AND (SELECT CURDATE())") ){
            // vytvorenie aktivity z cvikov posilovania
            if( $_POST['saveCali'] ){
                // kontrola formularu
                if( $_POST["pull"] == 0 && $_POST["push"] == 0 
                && $_POST["leg"] == 0 && $_POST["core"] == 0 ) {
                    $sql = "INSERT INTO useractivity (date, userId, pullCa, pushCa, coreCa, legCa) 
                    VALUES ( (SELECT CURDATE()), $idUSer, $calisthenics['pull'], $calisthenics['push'], $calisthenics['core'], $calisthenics['leg'] )";

                    mysqli_query($conn, $sql);

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


        }
    }

?>