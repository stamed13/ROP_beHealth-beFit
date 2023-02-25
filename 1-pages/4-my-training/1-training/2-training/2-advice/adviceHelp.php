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
            echo "<div>---------------------------------------</div>";
            //pocet aktivit pouzivatela
            $activity = mySQLall($conn, "SELECT count(*) AS activityCount FROM useractivity WHERE userId='$idUser'");
            $activityCount = $activity[0]["activityCount"];
            
            //prva aktivita pouzivatela
            $activity = mySQLall($conn, "SELECT * FROM useractivity WHERE userId='$idUser'");
            $activityFirst = $activity[0]["date"];

            //datum prvej aktivity
            $date = mySQLall($conn, "SELECT CURDATE()");
            $actualDate = $date[0]["CURDATE()"];

            //dni od prvej aktivity
            //aktualny datum - prva aktivita
            //odcitame roky
            //prevediem vsetko na dni (rok * mesiac * 30 dni) + den
            //odcitam 
            //mam vysledok
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

            //prva aktivita, vsetko potrebne
            $actualDateYear = substr($actualDate, 0, 4);
            $actualDateMonth = substr($actualDate, 5, 2);

            if( substr($actualDateMonth, 0, 1) == 0 ){
                $actualDateMonth = substr($actualDateMonth, 1, 1);
            }

            $actualDateDay = substr($actualDate, 8, 2);

            if( substr($actualDateDay, 0, 1) == 0 ){
                $actualDateDay = substr($actualDateDay, 1, 1);
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

            echo "<div> 31</div>";
            echo "<div>-25</div>";
            echo "<div>-------</div>";

            //if( $activityCount > 0 ){echo "pullCheck";}
            
            $disbalanc = false;
        }
    }
?>