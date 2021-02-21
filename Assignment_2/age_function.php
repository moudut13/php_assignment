<?php


function ageDefine(string $name = "Moudut Ahmed", int $age = 21){
    //$name = "Shuvo Ahmed";
    //$age = 46;
    if ($name){
        if ($age >= 0 && $age <= 2){
            echo  "You are $name .Your $age year Old . <br> You are baby.";
        }elseif ($age >= 2 && $age <= 5){
            echo  "You are $name .Your $age year Old . <br> You are bal pakna.";
        }elseif ($age >= 6 && $age <= 10){
            echo  "You are $name .Your $age year Old . <br> You are lol.";
        }elseif ($age >= 11 && $age <= 18){
            echo  "You are $name .Your $age year Old . <br> You are prem korar boyos.";
        }elseif ($age >= 19 && $age <= 25){
            echo  "You are $name .Your $age year Old . <br> You are young.";
        }elseif ($age >= 26 && $age <= 40){
            echo  "You are $name .Your $age year Old . <br> You are xyz.";
        }
        elseif ($age >= 45){
            echo  "You are $name .Your $age year Old . <br> You are old man.";
        }
    }
    else{
        echo "Plase Insert Your Name";
    }
}

$sa = ageDefine('Shuvo',52);
echo $sa;