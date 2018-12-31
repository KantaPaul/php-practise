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
            function recursive ($i) {
                if ($i >= 100) {
                    return;
                }
                echo "$i </br>";
                $i++;
                recursive($i);
            }
            // recursive(0);

            function printNumber ($counter, $end, $steping = 1) {
                if ($counter > $end) {
                    return;
                }
                echo "$counter </br>";
                $counter += $steping;
                printNumber($counter, $end, $steping);
            }
            printNumber(100, 150, 5);
        ?>
    </div>
</body>
</html>