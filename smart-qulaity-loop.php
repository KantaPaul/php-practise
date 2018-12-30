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
            $j = 1;
            for ($n = 1; $n <= 10; $n++) {
                $result = 1;
                for ($i=$n; $i > 1; $i--) { 
                    $result *= $i;
                    $j++;
                    echo "Factorial number $result";
                    echo "</br>";
                }
            }
            echo "</br>";
            echo "Total oparetion $j";
            echo "</br>";
            echo "</br>";

            $l = 1;
            $k = 1;
            for($i = 1; $i <= 10; $i++) {
                $l *= $i;
                $k++;
                echo "Factorial number $l";
                echo "</br>";
            }
            echo "</br>";
            echo "Total oparetion $k";
        ?>
    </div>
</body>
</html>