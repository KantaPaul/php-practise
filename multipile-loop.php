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
            for ($i = 1; $i < 10; $i++) {
                echo "</br>";
                echo $i." : ". ($i - 1);
            }

            echo "</br>";
            for ($i = 1, $j = 10; $i <= 10; $i++, $j--) {
                echo "</br>";
                echo $i." : ".$j;
            }
        ?>
    </div>
</body>
</html>