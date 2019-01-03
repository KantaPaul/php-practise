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
            $foods = array('Milk', 'Orange', 'Apple', 'Blah', 'Hau Khau', "Bedana", "Malta", "Peanut", 12=>78);
            $arr1 = array_slice($foods, 0, 4, true);
            $arr2 = array_slice($foods, 4,null, true);
            $arr3 = array('j'=> 'Khub Jhab', 'k'=>'Seidai');
            
            // $merge = array_merge($arr1, $arr2, $arr3);
            $plus = $arr1+$arr2+$arr3;
            print_r($arr1);
            echo "</br>";
            print_r($arr2);
            echo "</br>";
            print_r($arr3);
            echo "</br>";
            // print_r($foods);
            echo "</br>";
            // print_r($merge);
            echo "</br>";
            print_r($plus);
        ?>
    </div>
</body>
</html>