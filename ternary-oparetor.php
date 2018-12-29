<?php

// ternary oparetor

$n = 10;

// nested ternary oparetor
$numberWord = (12 == $n) ? "Twelve" : (10 == $n) ? "Ten" : "A Number";

echo $numberWord;

echo "</br>";

// ternary oparetor
$oddEvenCheck = ($n % 2 == 0) ? "Even" : "Odd";

echo $oddEvenCheck;

?>