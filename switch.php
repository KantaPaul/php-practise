<?php

$n = 12;
$r = $n % 2;

switch ($r) {
    case 0:
        echo "{$n} is even number";
        break;
    
    default:
        echo "{$n} is odd number";
        break;
}

$color = "black";

echo "</br>";

switch ($color) {
    case 'red' :
    case 'green' :
        echo ucwords($color)." our fav color";
        break;
    case 'blue' :
        echo ucwords($color)." our not fav color";
        break;
    default:
        echo ucwords($color)." color is ok";
        break;
}

?>