<?php

$user_access_system = 22;

if ($user_access_system >= 20 && $user_access_system <= 35){
    echo "<span style='color: green; font-weight: bold;'>Congratulations!</span> <br>";
    echo "This user will have access to this site. <br>";
    echo "You are $user_access_system years old.";
}elseif ($user_access_system >= 1 && $user_access_system <= 19){
    echo "<span style='color: red;font-weight: bold;'>Sorry!</span> <br>";
    echo "This user will not be able to access this site because you are too young. <br>";
    echo "You are $user_access_system years old.";
}elseif ($user_access_system <= 35 && $user_access_system >= 2000){
    echo "<span style='color: red;font-weight: bold;'>Sorry!</span> <br>";
    echo "This user will not be able to access this site because you are too old. <br>";
    echo "You are $user_access_system years old.";
}else{
    echo "<span style='color: red;font-weight: bold;'>Sorry!</span> <br>";
    echo "Your age is not correct.";
}