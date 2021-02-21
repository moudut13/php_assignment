<?php

//একটা হেডিং এ বাংলায় লাল, সবুজ, নিল, হলুদ, বেগুনি, কাল এই রং গুলা দিয়ে হেডিং এর কালার টা চেঞ্জ করে এমন করে একটা ফাংসন বানান
function color_header($txt = "null",$tag = "null",$color = "null"){
    if ($color == "সবুজ"){
        echo "<$tag style='color: green'>$txt</$tag>";
    }elseif ($color == "নিল"){
        echo "<$tag style='color: B=blue'>$txt</$tag>";
    }elseif ($color == "লাল"){
        echo "<$tag style='color: red'>$txt</$tag>";
    }elseif ($color == "হলুদ"){
        echo "<$tag style='color: yellow'>$txt</$tag>";
    }elseif ($color == "বেগুনি"){
        echo "<$tag style='color: purple'>$txt</$tag>";
    }elseif ($color == "কাল"){
        echo "<$tag style='color: #000000'>$txt</$tag>";
    }else{
        echo "Invalid your color!";
    }
}


$txt = "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.";
color_header($txt,"h5","বেগুনি");