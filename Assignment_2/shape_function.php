<?php




function math(float $Length = null ,$Width = null, string $shape = "null"){
    if ($shape === "rectangle"){
         $sum = $Length * $Width;
        echo "Area Of Rectangle = $sum";
        echo "<br>";
    }
    elseif ($shape === "square" ){
        $sum = $Length*$Length;
        echo "Area Of Square = $sum";
        echo "<br>";
    }
    elseif ($shape === "circle"){
        $sum = 3.1416 * $Length * $Length;
        echo  "Area Of Circle = $sum";
        echo "<br>";
    }
}

math(4.1,3,"square");