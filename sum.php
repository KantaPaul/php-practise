<?php

// + - * / %  Arithmetic Oparetor

$number = 12;

// ---- add numer
// $number += 10;
// or
// $number = $number + 10;

// ---- minus number
// $number -= 5;
// or
// $number = $number - 5;

// -----divide number
// $number /= 2;
// or
// $number = $number / 2;

// --- multiplication number
// $number *= 5;
// or
// $number = $number * 5;

// ---- modulas
// $number %= 5;
// or 
// $number = $number % 5;

// ---- math one
// $math = (10 * 2) / 2;

// ----- math two
// $math = (10 + 2) - 5;

// math three
// $math = (10 * 5) - (10 / 2);

// $number++;
// $number--;

// math metical program with variable
// $number1 = 50;
// $number2 = 10;
// $number3 = $number1 + $number2;

// echo $number3;
// echo "</br>";
// echo $math;

// $n = 7;
// $m = $n++;
/*
Brcause $n er man prothome $m er kase jabe then increase hobe $n + 1
$n = 7;
$m = $n++;

$m = $n; // or 7
$n = $n + 1;
*/
// echo "M == {$m}  N == {$n}";

$n = 7;
$m = ++$n;
/*
Brcause $n er man aghe $n + 1 bah aghe jog hobe then $m er kase jabe
$n = 7;
$m = ++$n;

$n = $n + 1;
$m = $n; // or 7 + 1
*/
echo "M == {$m}  N == {$n}";

?>