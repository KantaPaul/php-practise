<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <div style="width: 80%; margin: 0 auto;">
        <?php
            $foods = [
                'vage' => 'brinjal, brocoli, carrot',
                'fruits' => 'orange, banana, apple',
                'drinks' => 'water, milk'
            ];

            $foods['drinks'] .= ', orange juice';

            // echo  $foods['vage'];

            // for ($i=0; $i < count($foods); $i++) { 
            //     echo $foods[$i];
            // }

            // foreach ($foods as $key => $value) {
            //     echo $key."=".$value;
            // }

            // $keys = array_keys($foods);
            // for ($i=0; $i < count($keys); $i++) { 
            //     $key = $keys[$i];
            //     echo $foods[$key];
            // }

            $values = array_values($foods);
            // for ($i=0; $i < count($values); $i++) { 
            //     $key = $values[$i];
            //     echo $key;
            // }

            
            for ($i=0; $i < count($values) ; $i++) { 
                echo $values[$i];
            }

        ?>
    </div>

</body>
</html>