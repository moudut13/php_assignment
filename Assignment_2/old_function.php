<?php

function old($birthday = null,$name= "null"){
    $old = date("Y") - $birthday;
    echo "$name is $old years old"
;
}
old(1998,"Shuvo");

