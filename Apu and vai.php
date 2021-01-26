<?php

    $name= "Shuvo";
    $apu = array("a","b","c","d");
    $mark = 99;
    //echo $apu[1];
    echo "<br>";
    if ($mark >= 33 && $mark <=99){
        if ($name == $apu[0] || $name == $apu[1] || $name == $apu[2] || $name == $apu[3]){
            echo $name . " " ."Apu Pass.";
        }else{
            echo  $name ." "."Vai pass.";
        }
    }elseif ($mark >= 0 && $mark <= 32){
        if ($name == $apu[0] || $name == $apu[1] || $name == $apu[2] || $name == $apu[3]){
            echo $name . " " ."!Apu Fall.";
        }else{
            echo  $name ." "."!Vai Fall.";
        }
    }else{
        echo "Incorrect your Mark";
        //if ($name == $apu[0] || $name == $apu[1] || $name == $apu[2] || $name == $apu[3]){
        //    echo $name . " " ."!Incorrect your Mark.";
        //}else{
        //    echo  $name ." "."!Incorrect your Mark.";
        //}
    }