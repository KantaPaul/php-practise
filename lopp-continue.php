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
            for ($i=1; $i < 30; $i++) { 
                if ($i == 5) {
                    break;
                }
                echo $i;
                echo "</br>";
            }
            echo "</br>";
            echo "</br>";
            echo "</br>";
            for ($i=1; $i < 50; $i++) { 
                if ($i % 10 == 0) {
                    echo $i;
                    echo "</br>";
                    continue;
                }
            }

            echo "</br>";
            echo "</br>";
            echo "</br>";
            for ($i=1; $i < 50; $i++) { 
                if ($i % 10 == 0) {
                    echo $i;
                    echo "</br>";
                    break;
                }
            }

            echo "</br>";
            echo "</br>";
            echo "</br>";
            for ($i=1; $i < 30; $i++) { 
                if ($i < 27) {
                    continue;
                }
                echo $i;
                echo "</br>";
            }
        ?>
    </div>
</body>
</html>