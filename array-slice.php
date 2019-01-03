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
            $foods = array('Milk', 'Orange', 'Apple');
            $array = array('a'=>12, 'b'=> 13, 'c'=>45,45,85,'d'=>45);
            print_r($foods);
            echo "</br>";
            // $slice = array_slice($foods, 0,2);
            //$slice = array_slice($foods, 1,2, true); // if set true array index currect previus array index
            $slice = array_slice($foods, 0,-1, true); // laster er thake
            print_r($slice);
            echo "</br>";
            $slice2 = array_slice($array, -3, 2, true);
            print_r($array);
            echo "</br>";
            print_r($slice2);
        ?>
    </div>
</body>
</html>