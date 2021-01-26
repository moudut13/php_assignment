<?php

$name= "Suraiya";
$apu = array("Farah Tabira","Aditi Ghosh","Suraiya","d");
$mark = 33;
//echo $apu[1];
echo "<br>";
if ($mark >= 33 && $mark <=99){
    if ($name == $apu[0] || $name == $apu[1] || $name == $apu[2] || $name == $apu[3]){
        echo "<span style='color: green; font-weight: bold;'>Congratulations!</span> <br>";
        echo $name . " " ."Apu Pass.";
    }else{
        echo "<span style='color: green; font-weight: bold;'>Congratulations!</span> <br>";
        echo  $name ." "."Vai pass.";
    }
}elseif ($mark >= 0 && $mark <= 32){
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