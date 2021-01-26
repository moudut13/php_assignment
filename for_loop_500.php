<?php
    echo "For Loop and Division 3 or 4<br><br><br>";
    for($i = 1; $i <= 500; $i++){
        if($i%3 == 0 || $i%4 == 0){
            echo "$i<br>";
        }
    }
