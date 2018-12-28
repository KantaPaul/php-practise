<?php

// $name = "Bangladesh";
// $age = 24;
// $question = "how are you";

// echo $name;
// echo "\n";
// echo $age;
// echo "Hello $name";
// echo "My Name is".$name;
// echo "{$name} is beautifull country. {$question}";

// $task = "read";
// echo $task;
// echo "<br />";
// $task = "write";
// echo $task;


// ------------- declear constant
// define('PI', 22/7);
// echo "Value of pi = ".PI;
// echo "<br />";
// echo constant('PI');

// -------------------get constant value
// $constant = 'constant';

// --------------------princt constant value
// echo "Value of PI {$$constant('PI')}";

// $name1 = 02;
// $name2 = "Paul";

// echo var_dump($name1, $name2);

// $name = "kanta paul pobon";
// $uName = strtoupper($name);

// echo "my name is {$uName}";
// echo "</br>";

// ----------Example of printf
// printf("My full name is %s", $uName);

$fName = "Kanta";
$lName = "Paul";

// ---------- print f basic example
printf("My Name is %s %s", $fName, $lName);
echo "</br>";
// -----------------printf advanced example
printf ("His %s Name is %s %s", "Full", $fName, $lName);
// -----------last name not print because place holder (%s) not avaliabe 
echo "</br>";
printf ("His %s Name is %s", "Full", $fName, $lName);
// -------------- this time php is error because extra placeholder available but argument not available
echo "</br>";
printf ("His %s Name is %s %s %s", "Full", $fName, $lName);