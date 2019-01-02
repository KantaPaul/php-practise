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
            $foods = [
                'vege' => explode(', ', 'brinjal, banana'),
                'fruit' => explode(', ', 'apple, orange')
            ];

            $example = [
                'test' => [
                    'test-again' => [
                        'a',
                        'b',
                        'c',
                        'd',
                    ],
                ],
            ];

            // print_r($example);
            // echo $example['test']['test-again'][2];

            $example2 = [
                [1,2,3,4],
                [11,22,33,44],
                [111,222,333,444,[555,666,777]],
            ];

            // print_r($example2);
            echo $example2[2][4][1];
        ?>
    </div>
</body>
</html>