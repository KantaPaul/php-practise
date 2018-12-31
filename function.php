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
            include_once 'libarey/function.php';

            $x = 10;
            if (isEven($x)) { // $x ekhane argument
                echo "$x is even number";
            } else {
                echo "$x is odd number";
            }
            $n = 11;
            echo "</br>";
            echo "$n factorial is"." ".factorial($n);

            echo "</br>";
            $food = "Salad";
            $totalItem = "2 Plates";
            serve($food, $totalItem);
            echo "</br>";
            serve();
        ?>
    </div>
</body>
</html>