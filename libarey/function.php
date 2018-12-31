<?php

function isEven($n) { // $n ekahne parameter
    if ($n % 2 == 0) {
        return true;
    }
    return false;
}

function factorial ($n) {
    if (gettype($n) != "integer") {
        return "Invalid ";
    }
    $result = 1;
    for ($i=$n; $i > 1; $i--) { 
        $result *= $i;
    }
    return $result;
}

// default value set
function serve($foodtype = "Coffe", $items = "1 Cup") {
    echo "$items of $foodtype has/have been served";
}

?>