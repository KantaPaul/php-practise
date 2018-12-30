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
            $x = 7;
            $y = 10;
            function greaterAndSmaller($a, $b) {
                if ($a > $b) {
                    return 1;
                } else if ($a == $b) {
                    return 0;
                } else {
                    return -1;
                }
            }

            if (greaterAndSmaller($x, $y) == 1) {
                echo "$x is greater then $y";
            } else if (greaterAndSmaller($x, $y) == 0) {
                echo "$x is equal to $y";
            } else {
                echo "$x is less then $y";
            }

            // latest version upoer version er
            echo "</br>";
            $result = $x<=>$y;
            if ($result == 1) {
                echo "$x is greater then $y";
            } else if ($result == 0) {
                echo "$x is equal to $y";
            } else {
                echo "$x is less then $y";
            }
        ?>
    </div>
</body>
</html>