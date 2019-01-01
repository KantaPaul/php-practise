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
            
            $students = [
                "Kanta",
                "Paul",
                "Pobon",
                24
            ];

            $students[] = "Hindu";
            
            array_shift($students); // array item remove first
            array_pop($students); // array item remove last

            array_unshift($students, "Bangladesh"); // array item add first
            array_push($students, "Dhaka"); // array item add last
            
            $n = count($students);

            for ($i=0; $i < $n; $i++) { 
                echo $students[$i]."</br>";
            }

            // reverse array
            echo "<p>Reverse Array</p>";
            for ($i=$n - 1; $i >= 0 ; $i--) { 
                echo $students[$i]."</br>";
            }
        ?>
    </div>

</body>
</html>