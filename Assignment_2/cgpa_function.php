<?php


function cgpa($name,$mark){
    //$name= "Shuvo";
   // $apu = array("Farah Tabira","Aditi Ghosh","Suraiya","d");
    //$mark = 33;
//echo $apu[1];

    $apu = array("Farah ","Tabira","Aditi Ghosh","Suraiya","d");

    echo "<br>";
    if ($mark >= 33 && $mark <=39){
        if ($name == $apu[0] || $name == $apu[1] || $name == $apu[2] || $name == $apu[3]){
            echo "<span style='color: green; font-weight: bold;'>Congratulations!</span> <br>";
            echo $name . " " ."Apu Pass.<br>";
            echo "Your CGPA 2.00";
        }else{
            echo "<span style='color: green; font-weight: bold;'>Congratulations!</span> <br>";
            echo  $name ." "."Vai pass.<br>";
            echo "Your CGPA 2.00";
        }} elseif ($mark >= 40 && $mark <= 49){
        if ($name == $apu[0] || $name == $apu[1] || $name == $apu[2] || $name == $apu[3]){
            echo "<span style='color: green; font-weight: bold;'>Congratulations!</span> <br>";
            echo $name . " " ."Apu Pass.<br>";
            echo "Your CGPA 2.50";
        }else{
            echo "<span style='color: green; font-weight: bold;'>Congratulations!</span> <br>";
            echo  $name ." "."Vai pass.<br>";
            echo "Your CGPA 2.50";

        }}elseif ($mark >= 50 && $mark <= 59){
            if ($name == $apu[0] || $name == $apu[1] || $name == $apu[2] || $name == $apu[3]){
                echo "<span style='color: green; font-weight: bold;'>Congratulations!</span> <br>";
                echo $name . " " ."Apu Pass.<br>";
                echo "Your CGPA 3.00";
            }else{
                echo "<span style='color: green; font-weight: bold;'>Congratulations!</span> <br>";
                echo  $name ." "."Vai pass.<br>";
                echo "Your CGPA 3.00";

            }}elseif ($mark >= 60 && $mark <= 69){
        if ($name == $apu[0] || $name == $apu[1] || $name == $apu[2] || $name == $apu[3]){
            echo "<span style='color: green; font-weight: bold;'>Congratulations!</span> <br>";
            echo $name . " " ."Apu Pass.<br>";
            echo "Your CGPA 3.50";
        }else{
            echo "<span style='color: green; font-weight: bold;'>Congratulations!</span> <br>";
            echo  $name ." "."Vai pass.<br>";
            echo "Your CGPA 3.50";

        }}elseif ($mark >= 70 && $mark <= 79){
            if ($name == $apu[0] || $name == $apu[1] || $name == $apu[2] || $name == $apu[3]){
                echo "<span style='color: green; font-weight: bold;'>Congratulations!</span> <br>";
                echo $name . " " ."Apu Pass.<br>";
                echo "Your CGPA 4.00";
            }else{
                echo "<span style='color: green; font-weight: bold;'>Congratulations!</span> <br>";
                echo  $name ." "."Vai pass.<br>";
                echo "Your CGPA 4.00";

            }}elseif ($mark >= 80 && $mark <= 99){
            if ($name == $apu[0] || $name == $apu[1] || $name == $apu[2] || $name == $apu[3]){
                echo "<span style='color: green; font-weight: bold;'>Congratulations!</span> <br>";
                echo $name . " " ."Apu Pass.<br>";
                echo "Your CGPA 5.00";
            }else{
                echo "<span style='color: green; font-weight: bold;'>Congratulations!</span> <br>";
                echo  $name ." "."Vai pass.<br>";
                echo "Your CGPA 5.00";
    }}elseif ($mark >= 0 && $mark <= 32){
        if ($name == $apu[0] || $name == $apu[1] || $name == $apu[2] || $name == $apu[3]){
            echo "<span style='color: red;font-weight: bold;'>Sorry!</span> <br>";
            echo $name . " " ."!Apu Fall.";
        }else{
            echo "<span style='color: red;font-weight: bold;'>Sorry!</span> <br>";
            echo  $name ." "."!Vai Fall.";
        }
    }else{
        //echo "Incorrect your Mark";
        if ($name == $apu[0] || $name == $apu[1] || $name == $apu[2] || $name == $apu[3]){
            echo $name . " Apu " ."!Incorrect your Mark.";
        }else{
            echo  $name ." Viya "."!Incorrect your Mark.";
        }
    }
}

cgpa("Moudut",243);