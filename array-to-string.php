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
            $student = array(
                'fname' => 'Kanta',
                'lname' => 'Paul',
                'age' => 25,
                'shift' => 'Morining',
            );

            include_once 'data/data.php';

            
            include 'show/show.php';
            get_content($arrusers, 3);

            print_r($student);
            printf("%s %s",$student['fname'], $student['lname']);

            $serial = serialize($student); // array to string
            echo $serial;
            echo "</br>";
            $unserial = unserialize($serial); // string to array
            // print_r($unserial);
            echo "</br>";
            $json = json_encode($student); // convert to json
            print_r($json);
            echo "</br>";
            $decodeJson = json_decode($json, true); // json to array convert true set nah korle array te convert hobe nah
            print_r($decodeJson);

            foreach ($student as $key => $value) {
                echo "<div class='$key'>$value</div>";
            }
        ?>
    </div>
</body>
</html>