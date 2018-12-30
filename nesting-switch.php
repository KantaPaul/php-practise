<?php

$n = -13;
$r = $n % 2;

switch ($r) {
    case 0:
        switch ($n) {
            case $n > 0:
                echo "{$n} is positive even number";
                break;
            case $n < 0:
                echo "{$n} is negative even number";
                break;
        }
        break;
    default:
        switch ($n) {
            case $n > 0:
                echo "{$n} is positive odd number";
                break;
            case $n < 0:
                echo "{$n} is negative odd number";
                break;
        }
}

echo "</br>";

switch (true) {
    case (0 == $r && $n > 0):
        echo "$n is positive even number";
        break;
    case (0 == $r && $n < 0):
        echo "$n is negative even number";
        break;
    case (0 != $r && $n > 0):
        echo "$n is positive odd number";
        break;
    case (0 != $r && $n < 0):
        echo "$n is negative odd number";
        break;
}

?>