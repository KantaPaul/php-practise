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
            $foods = ['Apple', 'Orange', 'Jack Fruit', 'Pine Apple'];
            // print_r($foods);
            echo "</br>";
            $addFoods = ['Bedana', 'Malta', 'Angur'];
            $newFoods = array_splice($foods, 1,2, $addFoods);
            // $newFoodsAdd = array_splice($foods, 1,2, $newFoods);
            print_r($newFoods);
            echo "</br>";
            // print_r($newFoodsAdd);
            echo "</br>";
            print_r($foods);

            $fruits = [
                "fruit"  => ["a" => "orange", "b" => "banana", "c" => "apple"],
                "numbers" => [1, 2, 3, 4, 5, 6],
                "holes"   => ["first", 5 => "second", "third"]
            ];
            foreach ($fruits as $key => $value) {
                echo "<div class='$key'></div>";
            }
        ?>
    </div>
</body>
</html>