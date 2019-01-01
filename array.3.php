<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <div style="width: 80%; margin: 0 auto;">
        <?php
            $vegetables = explode(", ", 'Brocoli, Banana, Potato,Guava'); // eida array te convert kora hoyse string thake
            $vegetablesRegex = preg_split("/, |,/", 'Brocoli, Banana, Potato,Guava');
            // "/, |,/" eidar mane hoy tumi koma abong space neu othoba khali koma neu
            $vegetablesString = join(", ", $vegetables);
            // eiad array to string e convert kora hoyse

            print_r($vegetables); // eida array
            echo "</br>";
            print_r($vegetablesString); // eida array to string convert
            echo "</br>";
            print_r($vegetablesRegex); // eida array
            echo "</br>";
            // var_dump($vegetables);
            echo count($vegetables); // eida array
            echo "</br>";
            echo count($vegetablesRegex); // eida asche regular expression thake
        ?>
    </div>

</body>
</html>