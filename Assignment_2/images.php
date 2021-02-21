<?php

function images($src = "null",$height = 'null',$width = "null" ,$name = "null"){
    echo "<img src='$src' style='height: $height;width: $width;'><br><br><br>";
    echo "<p style='color: #0c5460;font-size: 20px;'>$name</p>";
}
$src = "1.webp";
images($src,"400","500","Test Images");
