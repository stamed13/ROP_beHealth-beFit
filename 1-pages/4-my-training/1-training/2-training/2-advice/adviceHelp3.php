<?php
        //kontrola cvicenia pouzivatela
        function adviceImprove($advices, $conn, $idUser){
            //rady pre hmotnost
            $advice20 = $advices[19]["name"];
            $advice31 = $advices[32]["name"];
            $advice32 = $advices[33]["name"];
            $advice33 = $advices[34]["name"];
            $advice34 = $advices[35]["name"];
            $advice35 = $advices[36]["name"];
            $advice36= $advices[37]["name"];

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

            //je disbalancia
            //nerovnovaha
            if( ( $pullCa == 1 || $pushCa == 1 || $coreCa == 1 || $legCa == 1 || $neckSt == 1 || $neckSt == 1 || $backSt == 1 || $legCa == 1 ) 
            && ( ( $pullCa == 2 || $pushCa == 2 || $coreCa == 2 || $legCa == 2 || $neckSt == 2 || $handSt == 2 || $backSt == 2 || $legCa == 2 ) ||
            ( $pullCa == 3 || $pushCa == 3 || $coreCa == 3 || $legCa == 3 || $neckSt == 3 || $handSt == 3 || $backSt == 3 || $legCa == 3 ) ) ){
                $balance = true;
            } //rovnovaha
            else {
                $balance = false;
            }

            /*$disbalance = [
                "pullCa" => false,
                "pushCa" => false,
                "coreCa" => false,
                "legCa" => false,
            ];*/

            //zistim co je chyba
            if( $balance == true ){
                //echo "<div class='advice improve'> $advice34 </div>";
                echo "<div class='advice improve improve1'> $advice20 ";

                if( $pullCa == 1 ){
                    //$disbalance["pullCa"] = true;
                    //echo $advice31;
                    echo " posilňovať biceps ";
                }

                if( $pushCa == 1 ){
                    //echo $advice32;
                    echo " posilňovať triceps ";
                }

                if( $legCa == 1 ){
                    //echo $advice36;
                    echo " posilňovať nohy";
                }

                if( $backSt == 1 ){
                    //echo $advice34;
                    echo " strečovať  chrbát";
                }

                if( $legSt == 1 ){
                    //echo $advice33;
                    echo " strečovať  nohy";
                }

                echo ".</div>";

                if( $neckSt == 1 || $handSt == 1 ){
                    echo "<div class='advice improve improve2'> $advice34 </div>";
                }

            }

        }
?>