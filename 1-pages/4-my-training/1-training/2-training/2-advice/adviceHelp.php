<?php
//kontrola vahy pouzivatela podla bmi
    function adviceWeight($advices, $body_mass){
        //rady pre hmotnost
        $advice1 = $advices[0]["name"];
        $advice2 = $advices[1]["name"];
        $advice3 = $advices[2]["name"];
        $advice4 = $advices[3]["name"];

        if($body_mass > 30){
            //echo $advices[3]["name"];
            echo "<div class='advice'> $advice4 Nemozem ti pomoct. Vyhladaj si prosim odbornika. </div>";
        }
        if($body_mass < 30){
            if($body_mass > 18.5 && $body_mass < 24.99){
                echo "<div class='advice'> $advice1 </div>";
            }
            if($body_mass > 25 && $body_mass < 29.99){
                echo "<div class='advice'> $advice2 </div>";
            }
            if($body_mass  < 18.5){
                echo "<div class='advice'> $advice3 </div>";
            }
        }

        //kontrola cvicenia pouzivatela
        function adviceExercise($advices, $body_mass, $conn, $idUser){
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

            echo "<div>---------------------------------------</div>";
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
            
            //echo "<div>mothFirstAct: $mothFirstAct</div>";
            //echo "<div>mothActDate: $mothActDate</div>";
            //echo "<div>monthRozdiel: $monthRozdiel</div>";
            //echo "<div>---------------------------------------</div>";

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
            if( $howOffen <= 1 ){
                echo "<div class='advice'> $advice16 </div>";
            }
            if( $howOffen > 1 && $howOffen <= 2.5 ){
                echo "<div class='advice'> $advice11 </div>";
            }
            if( $howOffen > 2.5 && $howOffen <= 3.5 ){
                echo "<div class='advice'> $advice12 </div>";
            }
            if( $howOffen > 3.5 && $howOffen <= 4.5 ){
                echo "<div class='advice'> $advice13 </div>";
            }
            if( $howOffen > 4.5 && $howOffen <= 5.5 ){
                echo "<div class='advice'> $advice14 </div>";
            }
            if( $howOffen > 5.5 ){
                echo "<div class='advice'> $advice15 </div>";
            }

            //vypis hodnot
            echo "<div>activityCount: $activityCount</div>";
            echo "<div>activityFirst: $activityFirst</div>";
            echo "<div>actualDate: $actualDate</div>";
            echo "<div>---------------------------------------</div>";
            echo "<div>activityFirstYear: $activityFirstYear</div>";
            echo "<div>activityFirstMonth: $activityFirstMonth</div>";
            echo "<div>activityFirstDay: $activityFirstDay</div>";
            echo "<div>---------------------------------------</div>";
            echo "<div>activityFirstYear: $actualDateYear</div>";
            echo "<div>activityFirstMonth: $actualDateMonth</div>";
            echo "<div>activityFirstDay: $actualDateDay</div>";
            echo "<div>---------------------------------------</div>";
            echo "<div>rozdielYear: $rozdielYear</div>";
            echo "<div> $actualDays</div>";
            echo "<div>-$activityDays</div>";
            echo "<div>$odpocetActual_First</div>";

            //if( $activityCount > 0 ){echo "pullCheck";}
            
            $disbalanc = false;
        }
    }
?>