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
            $i = 0;
            echo "Example of i++ </br>";
            while ($i++ < 5) {
                // $i++ er mane i er man aghe i = 0 te asign hossaye then i = i + 0 somadhan korse tai value ase
                echo "</br>";
                echo $i;
            }
            echo "</br>";
            echo "</br>";
            echo "Example of ++i";
            $j = 0;
            while (++$j < 5) {
                // ei khane aghe j = j + 0 hossae then j er man jasse j ar kase
                echo "</br>";
                echo $j;
            }
        ?>
    </div>
</body>
</html>