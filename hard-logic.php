<?php

$year = 1900;
if ($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0) {
    echo "{$year} is a leap year";
} elseif ($year % 4 == 0 && $year % 100 == 0) {
    echo "{$year} is not a leap year";
} elseif ($year % 4 == 0) {
    echo "{$year} is a leap year";
} else {
    echo "{$year} is not a leap year";
}

echo "</br>";

if ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)) {
    echo "{$year} is a leap year";
} else {
    echo "{$year} is not a leap year";
}

// true and false all time false
// false and true all time false
// true or false all time true

?>