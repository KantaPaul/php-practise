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
            $n = 3;
            for($i = $n, $factorial = 1; $i > 1; $i--) {
                $factorial *= $i;
            }
            $result = 1;
            for($i = 1; $i <= 10; $i++) {
                $result *= $i;
                printf("Factorial is %d and %d", $i, $result);
                echo "</br>";
            }
            echo "</br>";
            printf("Factorial is %d and %d", $n, $factorial);
        ?>
    </div>
</body>
</html>