<?php
//বড় হাত, ছোট হাত, উভয় হাত এর লেখা কনভাসন করার জন্য একটিং ফাংসন বানান

function soto_hat($txt = "null"){
    echo "<span style='text-transform: lowercase'>$txt</span><br><br>";
}

function boro_hat($txt = "null"){
    echo "<span style='text-transform: uppercase'>$txt</span><br><br>";
}

function any_hat($txt = "null", $hat = "nul"){
        if ($hat == "soto_hat"){
            echo "<span style='text-transform: lowercase'>$txt</span><br><br>";
        }elseif ($hat == "boro_hat"){
            echo "<span style='text-transform: uppercase'>$txt</span><br><br>";
        }
}

$txt = "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.";
soto_hat($txt);
boro_hat($txt);
any_hat($txt,"boro_hat");
any_hat($txt,"soto_hat");