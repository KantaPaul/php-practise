<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div style="width: 80%; margin: 0 auto">
        <?php
            // simple for loop
            for($i = 1; $i <= 10; $i++) {
                echo "{$i} </br>";
            }
            // even number
            echo "Even Number";
            echo "</br>";
            for($i = 2; $i <= 20; $i+=2) {
                echo "{$i} </br>";
            }
            // odd number
            echo "Odd Number";
            echo "</br>";
            for($i = 1; $i <= 20; $i+=2) {
                echo "{$i} </br>";
            }
            // star
            echo "For loop use kore star print";
            for($i = 1; $i <= 10; $i++) {
                echo "</br>";
                for ($j = 1; $j < $i; $j++) {
                    echo "*";
                }
            }
            echo "</br>";

            // while loop
            echo "While loop";
            echo "</br>";
            $a = 0;
            while ($a < 10) {
                $a++;
                echo "{$a} </br>";
            }

            // do while loop
            echo "Do While loop";
            echo "</br>";
            $b = 0;
            do {
                $b++;
                echo "{$b} </br>";
            } while ($b < 10);
        ?>
    </div>
</body>
</html>