<?php
        //kontrola cvicenia pouzivatela
        function adviceExercise($advices, $conn, $idUser){
            //rady pre hmotnost
            $advice5 = $advices[4]["name"];
            $advice6 = $advices[5]["name"];
            $advice7 = $advices[6]["name"];
            $advice8 = $advices[7]["name"];
            $advice9= $advices[8]["name"];
            $advice10= $advices[9]["name"];
            $advice11 = $advices[10]["name"];
            $advice12 = $advices[11]["name"];
            $advice13 = $advices[12]["name"];
            $advice14 = $advices[13]["name"];
            $advice15= $advices[14]["name"];
            $advice16 = $advices[15]["name"];

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
            //c = a / (b / 7)
            $howOffen = $activityCount / ( $odpocetActual_First / 7 );

            //spocitam levely, zistim podla priemeru a priradim
            $activity = mySQLall($conn, "SELECT SUM(pullCa) AS pullCa FROM useractivity WHERE userId='$idUser'");
            $pullCa = $activity[0]["pullCa"] / $activityCount;

            if( $pullCa > 0 && $pullCa <= 6 ){
                $pullCa = 1;
            }
            if( $pullCa <= 12 && $pullCa > 6 ){
                $pullCa = 2;
            }
            if( $pullCa > 12 ){
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
            if( $pushCa > 30 ){
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
            if( $legCa > 48 ){
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
            if( $neckSt > 76 ){
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
            if( $handSt > 86 ){
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
            if( $backSt > 98 ){
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
            if( $legSt > 110 ){
                $legSt = 3;
            }

            //je disbalancia
            //nerovnomerne
            if( ( $pullCa == 1 || $pushCa == 1 || $coreCa == 1 || $legCa == 1 || $neckSt == 1 || $neckSt == 1 || $backSt == 1 || $legCa == 1 ) 
            && ( $pullCa == 3 || $pushCa == 3 || $coreCa == 3 || $legCa == 3 || $neckSt == 3 || $handSt == 3 || $backSt == 3 || $legCa == 3 )  ){
                //vyhodnotenie
                if( $howOffen <= 1 ){
                    echo "<div class='advice exercise'> $advice16 </div>";
                }
                if( $howOffen > 1 && $howOffen <= 2.5 ){
                    echo "<div class='advice exercise'> $advice11 </div>";
                }
                if( $howOffen > 2.5 && $howOffen <= 3.5 ){
                    echo "<div class='advice exercise'> $advice12 </div>";
                }
                if( $howOffen > 3.5 && $howOffen <= 4.5 ){
                    echo "<div class='advice exercise'> $advice13 </div>";
                }
                if( $howOffen > 4.5 && $howOffen <= 5.5 ){
                    echo "<div class='advice exercise'> $advice14 </div>";
                }
                if( $howOffen > 5.5 ){
                    echo "<div class='advice exercise'> $advice15 </div>";
                }
            //rovnomerne
            } else {
                //vyhodnotenie
                if( $howOffen <= 1 ){
                    echo "<div class='advice exercise'> $advice10 </div>";
                }
                if( $howOffen > 1 && $howOffen <= 2.5 ){
                    echo "<div class='advice exercise'> $advice5 </div>";
                }
                if( $howOffen > 2.5 && $howOffen <= 3.5 ){
                    echo "<div class='advice exercise'> $advice6 </div>";
                }
                if( $howOffen > 3.5 && $howOffen <= 4.5 ){
                    echo "<div class='advice exercise'> $advice7 </div>";
                }
                if( $howOffen > 4.5 && $howOffen <= 5.5 ){
                    echo "<div class='advice exercise'> $advice8 </div>";
                }
                if( $howOffen > 5.5 ){
                    echo "<div class='advice exercise'> $advice9 </div>";
                }
            }

        }
?>