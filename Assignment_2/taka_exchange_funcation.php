<?php

function takaToUsaDoller(int $taka = 84){
    $exchange = 0.012 * $taka;
    echo "Your USD Doller : <b>$</b>$exchange .";
    echo "<br>";
}
$sa = takaToUsaDoller(890);
echo $sa;
function takaToCanDoller(int $taka = 84){
    $exchange = 0.015 * $taka;
    echo "Your Canadian Doller : <b>$</b>$exchange .";
    echo "<br>";
}

$sd = takaToCanDoller(960);
echo $sd;
function takaToCanPound(int $taka = 84){
    $exchange = 0.0097 * $taka;
    echo "Your Euro Pound : <b>£</b>$exchange .";
    echo "<br>";
}
$sf = takaToCanPound(450);

echo $sf;