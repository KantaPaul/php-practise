<?php

// $fName = "Kanta";
// $mName = "Chandra";
// $lName = "Paul";

// normal print f
// printf("My full name is %s %s %s", $fName, $mName , $lName);
// echo "</br>";
// variable swaping adjusting variable postion example === %1$s
// printf('My full name is %2$s %1$s %3$s', $mName, $fName, $lName);

// echo "</br>";
// $n = 45.6555;
// number por dui ghor doshomik ber korte .2f use kora hoy
// printf('%.2f', $n);
// echo "</br>";

// smane usnnyo padding diye number sajano
// $n = 123;
// $m = 12;

// printf('%04d', $n);
// echo "</br>";
// printf('%04d', $m);

// smane sunnyo padding diye float number ber kora
$n = 123.12;
$m = 12;

printf('%07.2f', $n);
echo "</br>";
printf('%07.2f', $m);

?>