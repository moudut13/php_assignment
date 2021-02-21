<?php

function bmi(string $name = "Shuvo",float $mass = 0, float $height = 0){
    if ($name){
        if ($height= $height*0.3048){
            $bmi = $mass/($height*$height);
            echo "$name ,Your Body Mass Index : $bmi .";
            //echo $height;
            echo "<br>";
        }
    }

}
$sa = bmi("Moudut",75,5.6);
//echo $sa;