<?php
        //kontrola cvicenia pouzivatela
        function adviceDaily($advices, $conn, $idUser){
            //rady pre hmotnost
            $advice24 = $advices[23]["name"];
            $advice25 = $advices[24]["name"];
            $advice26 = $advices[25]["name"];
            $advice27 = $advices[26]["name"];
            $advice28 = $advices[27]["name"];

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

            //priradenie dennych cvikov na zaklade spravania pouzivatela (schopnosti)
            if( $avg >= 0 && $avg < 0.5 ){
                echo "<div class='advice daily'> $advice24 </div>";                
            }

            if( $avg >= 0.5 && $avg < 1 ){
                echo "<div class='advice daily'> $advice25 </div>";                
            }

            if( $avg >= 1 && $avg < 2 ){
                echo "<div class='advice daily'> $advice26 </div>";                
            }

            if( $avg >= 2 && $avg < 2.5 ){
                echo "<div class='advice daily'> $advice27 </div>";                
            }

            if( $avg >= 2.5 && $avg < 3 ){
                echo "<div class='advice daily'> $advice28 </div>";                
            }                      

            //echo $avg;

        }
?>