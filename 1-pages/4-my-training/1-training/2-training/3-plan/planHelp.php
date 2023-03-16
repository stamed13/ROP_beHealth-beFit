<?php
    //$status = adviceStatus($conn, $idUser);

    //ak nema ziadnu aktivitu
    function getPlanForMe( $status ){
        //$status = adviceStatus($conn, $idUser);

        //uplny zaciatocnik
        if( $status >= 0 && $status <= 0.5 ){
            return 0;
        }

        //zaciatocnik
        if( $status > 0.5 && $status <= 1.5 ){
            return 1;
        }

        //menej pokrocily
        if( $status > 1.5 && $status <= 2 ){
            return 2;
        }

        //viacej pokrocily
        if( $status > 2 && $status <= 2.5 ){
            return 3;
        }

        //expert
        if( $status > 2.5 && $status <= 3 ){
            return 4;
        }

    }   



    function getHowOffen( $plan, $offen ){
        //ma cvicit 3x tyzdenne
        if($plan == 0 || $plan == 1){
            //ak cvici aspon 3x do tyzdna, je to spravne
            if($offen > 2.5){
                echo "<div class='gText'> Super, ideš podľa nastaveného plánu! </div>";
            }
            //ak cvici menej ako 3x a zaroven aspon 1x do tyzdna, je to dobre
            if($offen > 1 && $offen <= 2.5){
                echo "<div class='oText'> Pokiaľ máš dosť času, skús cvičiť 3x do týždňa! </div>";
            }
            //ak cvici menej ako 1x do tyzdna, je to zle
            if($offen <= 1 ){
                echo "<div class='rText'> Pozor, cvicíš menej ako 1x do týždňa! Nájdi si prosím viac času. </div>";
            }
        }

        //ma cvicit 7x tyzdenne
        if($plan > 1 && $plan < 5){
            //ak cvici aspon 5x do tyzdna, je to spravne
            if($offen > 5.5){
                echo "<div class='gText'> Super, ideš podľa nastaveného plánu! </div>";
            }
            //ak cvici menej ako 3x a zaroven aspon 1x do tyzdna, je to dobre
            if($offen > 2.5 && $offen <= 5.5){
                echo "<div class='oText'> Pokiaľ máš dosť času, skús cvičiť 5x do týždňa! </div>";
            }
            //ak cvici menej ako 3x a zaroven aspon 1x do tyzdna do tyzdna, je to zle
            if($offen > 1 && $offen <= 2.5 ){
                echo "<div class='rText'> Pozor, cvicíš menej ako 1x do týždňa! Nájdi si prosím viac času. </div>";
            }
            //ak cvici menej ako 1x do tyzdna, je to velmi zle
            if($offen <= 1 ){
                echo "<div class='rText'> Cvicíš veľmi málo! Skús cvičiť pravidelnejšie a budeš lepšie regenerovať. </div>";
            }
        }
    }


    
    //stav kondicie
    function status($conn, $idUser){
        //pocet aktivit pouzivatela
        $activity = mySQLall($conn, "SELECT count(*) AS activityCount FROM useractivity WHERE userId='$idUser'");
        $activityCount = $activity[0]["activityCount"];

        //spocitam levely, zistim podla priemeru a priradim
        $activity = mySQLall($conn, "SELECT SUM(pullCa) AS pullCa FROM useractivity WHERE userId='$idUser'");
        $pullCa = $activity[0]["pullCa"] / $activityCount;

        if( $pullCa > 0 && $pullCa <= 6 ){
            $pullCa = 1;
        }
        if( $pullCa <= 12 && $pullCa > 6 ){
            $pullCa = 2;
        }
        if( $pullCa <= 18 && $pullCa > 12 ){
            $pullCa = 3;
        }
        
        $activity = mySQLall($conn, "SELECT SUM(pushCa) AS pushCa FROM useractivity WHERE userId='$idUser'");
        $pushCa = $activity[0]["pushCa"] / $activityCount;

        if( $pushCa > 0 && $pushCa <= 25 ){
            $pushCa = 1;
        }
        if( $pushCa <= 30 && $pushCa > 25 ){
            $pushCa = 2;
        }
        if( $pushCa <= 36 && $pushCa > 30 ){
            $pushCa = 3;
        }

        $activity = mySQLall($conn, "SELECT SUM(legCa) AS legCa FROM useractivity WHERE userId='$idUser'");
        $legCa = $activity[0]["legCa"] / $activityCount;

        if( $legCa > 0 && $legCa <= 42 ){
            $legCa = 1;
        }
        if( $legCa <= 48 && $legCa > 42 ){
            $legCa = 2;
        }
        if( $legCa <= 54 && $legCa > 48 ){
            $legCa = 3;
        }

        $activity = mySQLall($conn, "SELECT SUM(coreCa) AS coreCa FROM useractivity WHERE userId='$idUser'");
        $coreCa = $activity[0]["coreCa"] / $activityCount;
        
        if( $coreCa > 0 && $coreCa <= 60 ){
            $coreCa = 1;
        }
        if( $coreCa <= 67 && $coreCa > 60 ){
            $coreCa = 2;
        }
        if( $coreCa <= 72 && $coreCa > 67 ){
            $coreCa = 3;
        }

        $activity = mySQLall($conn, "SELECT SUM(neckSt) AS neckSt FROM useractivity WHERE userId='$idUser'");
        $neckSt = $activity[0]["neckSt"] / $activityCount;

        if( $neckSt > 0 && $neckSt <= 74 ){
            $neckSt = 1;
        }
        if( $neckSt <= 76 && $neckSt > 74 ){
            $neckSt = 2;
        }
        if( $neckSt <= 78 && $neckSt > 76 ){
            $neckSt = 3;
        }
        
        $activity = mySQLall($conn, "SELECT SUM(handSt) AS handSt FROM useractivity WHERE userId='$idUser'");
        $handSt = $activity[0]["handSt"] / $activityCount;

        if( $handSt > 0 && $handSt <= 82 ){
            $handSt = 1;
        }
        if( $handSt <= 86 && $handSt > 82 ){
            $handSt = 2;
        }
        if( $handSt <= 90 && $handSt > 86 ){
            $handSt = 3;
        }

        $activity = mySQLall($conn, "SELECT SUM(backSt) AS backSt FROM useractivity WHERE userId='$idUser'");
        $backSt = $activity[0]["backSt"] / $activityCount;

        if( $backSt > 0 && $backSt <= 94 ){
            $backSt = 1;
        }
        if( $backSt <= 98 && $backSt > 94 ){
            $backSt = 2;
        }
        if( $backSt <= 102 && $backSt > 98 ){
            $backSt = 3;
        }
        
        $activity = mySQLall($conn, "SELECT SUM(legSt) AS legSt FROM useractivity WHERE userId='$idUser'");
        $legSt = $activity[0]["legSt"] / $activityCount;          

        if( $legSt > 0 && $legSt <= 102 ){
            $legSt = 1;
        }
        if( $legSt <= 110 && $legSt > 102 ){
            $legSt = 2;
        }
        if( $legSt <= 114 && $legSt > 110 ){
            $legSt = 3;
        }

        //vypocet stavu, priemer celkoveho cvicenia
        $avg = ( $pullCa + $pushCa + $coreCa + $legCa + $neckSt + $handSt + $backSt + $legSt ) / 8; 

        //echo $avg;

        return $avg;
    }



    //kontrola cvicenia pouzivatela
    function offen($conn, $idUser){
        //pocet aktivit pouzivatela
        $activity = mySQLall($conn, "SELECT count(*) AS activityCount FROM useractivity WHERE userId='$idUser'");
        $activityCount = $activity[0]["activityCount"];
        
        //prva aktivita pouzivatela
        $activity = mySQLall($conn, "SELECT * FROM useractivity WHERE userId='$idUser'");
        $activityFirst = $activity[0]["date"];

        //aktualny datum
        $date = mySQLall($conn, "SELECT CURDATE()");
        $actualDate = $date[0]["CURDATE()"];
        //$actualDate = "2023-02-08";

        //devat mesacny zaznam
        //o kolko mesiacov je rozdiel prvej aktivity a aktualneho dna
        $mothFirstAct = ( substr($activityFirst, 0, 4) * 12 ) + substr($activityFirst, 5, 2);
        $mothActDate = ( substr($actualDate, 0, 4) * 12 ) + substr($actualDate, 5, 2);
        $monthRozdiel = $mothActDate - $mothFirstAct;

        if($monthRozdiel > 9){
            //echo "<div>Velku rozdiel!<div>";
            //zmena $activityFirst a pocet aktivit od noveho $activityFirst
        }

        //podmienka ak cislo zacina nulou nedavaj nulu
        //prva aktivita, vsetko potrebne
        $activityFirstYear = substr($activityFirst, 0, 4);
        $activityFirstMonth = substr($activityFirst, 5, 2);

        if( substr($activityFirstMonth, 0, 1) == 0 ){
            $activityFirstMonth = substr($activityFirstMonth, 1, 1);
        }

        $activityFirstDay = substr($activityFirst, 8, 2);

        if( substr($activityFirstDay, 0, 1) == 0 ){
            $activityFirstDay = substr($activityFirstDay, 1, 1);
        }

        //aktualny datum, vsetko potrebne
        $actualDateYear = substr($actualDate, 0, 4);
        $actualDateMonth = substr($actualDate, 5, 2);

        if( substr($actualDateMonth, 0, 1) == 0 ){
            $actualDateMonth = substr($actualDateMonth, 1, 1);
        }

        $actualDateDay = substr($actualDate, 8, 2);

        if( substr($actualDateDay, 0, 1) == 0 ){
            $actualDateDay = substr($actualDateDay, 1, 1);
        }

        //dni od prvej aktivity
        //aktualny datum - prva aktivita
        //odcitame roky
        //prevediem vsetko na dni (rok * mesiac * 30 dni) + den
        //rok uz odpocitam bez roznasobovania
        $rozdielYear = $actualDateYear - $activityFirstYear;
        $activityDays = (($activityFirstMonth - 1) * 30) + $activityFirstDay;
        $actualDays = ($rozdielYear * 12 * 30) + (($actualDateMonth - 1) * 30) + $actualDateDay;

        //odcitam 
        //mam vysledok
        $odpocetActual_First = $actualDays - $activityDays;

        //ako casto cvici
            //ak nema ziadnu aktivitu
            if( $activityCount == 0 ){
                $howOffen = 0;
            }

            //ak ma 1 aktivitu a rozdiel je 0
            if( $activityCount == 1 && $odpocetActual_First == 0 ){
                $howOffen = 14;
            }

            //ak ma viac aktivit a rozdiel viacej ako 0
            if( $activityCount > 1 || $odpocetActual_First > 0 ){
                //c = a / (b / 7)
                $howOffen = $activityCount / ( $odpocetActual_First / 7 );
            }

        return $howOffen; 

    }
?>