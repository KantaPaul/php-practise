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
            function febonaci ($old, $new, $end) {

                static $start;
                $start = $start ?? 1;

                if ($start > $end) {
                    return;
                }
                $start++;
                echo $old."  ";
                $_temp = $old + $new;
                $old = $new;
                $new = $_temp;
                febonaci($old, $new, $end);
            }

            febonaci(0,1,5);
        ?>
    </div>
</body>
</html>