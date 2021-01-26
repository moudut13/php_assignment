<?php
    $name = "Shuvo";
    $level =  250;
    if($name){
        if ($level >= 0 && $level <= 100){
            echo "<span style='color: green; font-weight: bold;'>Congratulations!</span> <br>";
            echo "$name You are level 1. Your Point is $level .";
        }elseif ($level >= 101 && $level <= 300){
            echo "<span style='color: green; font-weight: bold;'>Congratulations!</span> <br>";
            echo "$name You are level 2.";
        }
        elseif ($level >= 301 && $level <= 500){
            echo "<span style='color: green; font-weight: bold;'>Congratulations!</span> <br>";
            echo "$name You are level 3.";
        }
        else{
            echo "<span style='color: red; font-weight: bold;'>Sorry! $name,your level Undefined.</span> <br>";
        }
    }