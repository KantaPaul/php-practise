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
            $name = '';
            
            // isset test kora
            if (isset($name)) {
                echo "Name is set";
            } else {
                echo "Name is un set";
            }

            echo "</br>";
            // empty test kora
            if (empty($name)) {
                echo "Name is empty";
            } else {
                echo "Name is not empty";
            }

            echo "</br>";
            // advanced label check
            if (isset($name) && (is_numeric($name) || $name != '')) {
                echo "Name is set";
            } else {
                echo "Name is un set";
            }
        ?>
    </div>
</body>
</html>