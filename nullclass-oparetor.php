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
            $default_lat = 15.545;
            $default_lan = 4565.78;

            $userLat;

            // $rst = isset($userLat) ? $userLat : $default_lat;

            // null class oparetor updated version of if else
            $rst = $userLat ?? $default_lat;

            echo $rst;
        ?>
    </div>
</body>
</html>