<?php
    function adviceWeight($advices, $body_mass){
        if($body_mass > 30){
            echo $advices[3]["name"];
            echo " Nemozem ti pomoct. Vyhladaj si prosim odbornika. ";
        }
        if($body_mass < 30){
            if($body_mass > 18.5 && $body_mass < 24.99){
                echo $advices[0]["name"];
                echo " ";
            }
            if($body_mass > 25 && $body_mass < 29.99){
                echo $advices[1]["name"];
                echo " ";
            }
            if($body_mass  < 18.5){
                echo $advices[2]["name"];
                echo " ";
            }
        }

        function adviceExercise($advices, $conn){
            $pull = mySQLall($conn, "");

            if( $pull ){echo "pullCheck";}
            
            $disbalanc = false;
        }
    }
?>