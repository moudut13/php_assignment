<?php

function dheader($head= "nul",$tag = "null",$color = "null" ,$align = "null",$font_size = "null",$margin_top= "null",$transform = "null"){
    echo "<$tag style='font-size:$font_size;text-align: $align;color: $color; margin-top: $margin_top;text-transform: $transform'>$head</$tag>";

}
$txt = "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.";
dheader("$txt","h2","#2fc00b","center","20","30","capitalize");