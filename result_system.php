<?php

$mark = 0;
if ($mark >= 80 && $mark <= 99){
    echo  "Your are got A+ <br>";
    echo "Your CGPA 5.00";
}elseif ($mark >= 70 && $mark <= 79){
    echo  "Your are got A <br>";
    echo "Your CGPA 4.00";
}elseif ($mark >= 60 && $mark <= 69){
    echo  "Your are got A- <br>";
    echo "Your CGPA 3.50";
}elseif ($mark >= 50 && $mark <= 59){
    echo  "Your are got B <br>";
    echo "Your CGPA 3.00";
}elseif ($mark >= 40 && $mark <= 49){
    echo  "Your are got C <br>";
    echo "Your CGPA 2.50";
}elseif ($mark >= 33 && $mark <= 39){
    echo  "Your are got D <br>";
    echo "Your CGPA 2.00";
}elseif ($mark >= 0 && $mark <= 32){
    echo  "<span style='color: red;font-weight: bold;'>Sorry!</span> Your are Fall.";
}else {
    echo  "Your are Mark Incorrect";
}