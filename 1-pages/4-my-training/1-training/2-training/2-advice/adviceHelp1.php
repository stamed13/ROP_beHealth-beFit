<?php
//kontrola vahy pouzivatela podla bmi
    function adviceWeight($advices, $body_mass){
        //rady pre hmotnost
        $advice1 = $advices[0]["name"];
        $advice2 = $advices[1]["name"];
        $advice3 = $advices[2]["name"];
        $advice4 = $advices[3]["name"];

        //vyhodnotenie
        if($body_mass > 30){
            //echo $advices[3]["name"];
            echo "<div class='advice weight'> $advice4 Nemozem ti pomoct. Vyhladaj si prosim odbornika. </div>";
        }
        if($body_mass < 30){
            if($body_mass > 18.5 && $body_mass < 24.99){
                echo "<div class='advice weight'> $advice1 </div>";
            }
            if($body_mass > 25 && $body_mass < 29.99){
                echo "<div class='advice weight'> $advice2 </div>";
            }
            if($body_mass  < 18.5){
                echo "<div class='advice weight'> $advice3 </div>";
            }
        }
    }
?>