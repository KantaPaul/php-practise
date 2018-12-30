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
            $veryOld = 0;
            $old = 1;
            $new = 1;

            for ($i=0; $i < 10; $i++) { 
                echo $veryOld."  ";
                $old = $new;
                $new = $old + $veryOld;
                $veryOld = $old;
            }
        ?>
        intial value
        v = 0;
        o = 1;
        n = 1;

        1st loop
        v = 1 <!-- o er man v te hobe -->
        o = 1 <!-- agher n er man o te hobe -->
        n = 1 <!-- o er man abong agher v er man jog hoye ekhane hobe -->

        2nd loop
        v = 1 <!-- o er man v te hobe -->
        o = 1 <!-- agher n er man o te hobe -->
        n = 2 <!-- o er man abong agher v er man jog hoye ekhane hobe -->

        2nd loop
        v = 2 <!-- o er man v te hobe -->
        o = 2 <!-- agher n er man o te hobe -->
        n = 3 <!-- o er man abong agher v er man jog hoye ekhane hobe -->

        2nd loop
        v = 3 <!-- o er man v te hobe -->
        o = 3 <!-- agher n er man o te hobe -->
        n = 5 <!-- o er man abong agher v er man jog hoye ekhane hobe -->
    </div>
</body>
</html>