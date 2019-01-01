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
            $students = array(
                "Kanta",
                "Paul",
                "Pobon",
                24
            );
            
            $students = [
                "Kanta",
                "Paul",
                "Pobon",
                24
            ];

            var_dump($students);
            echo "</br>";
            echo($students[0]);
            echo "</br>";
            echo("Total Array Element ".count($students));
            echo "</br>";
            echo "</br>";

            $n = count($students);

            // top to bottom
            for ($i=0; $i < $n; $i++) { 
                echo $students[$i]."</br>";
            }

            // bottom to top
            echo "</br>";
            for ($i= $n - 1; $i >= 0 ; $i--) { 
                echo $students[$i]."</br>";
            }
        ?>
    </div>

</body>
</html>