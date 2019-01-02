<?php

function get_content($arrusers, $n){
    $main = $arrusers;
    $total = count($main);

    for ($i=0; $i < $n; $i++) { 
        $class = $main[$i]["class"];
        $title = $main[$i]["title"];
        include 'test.php';
    }
    // for ($i=0; $i < $total; $i++) { 
    //     $class = $main[$i]["class"];
    //     $title = $main[$i]["title"];
    //     echo "<div><a href='mailTo:$title' class='btn $class'>$title</a></div>";
    //     include 'test.php';
    // }
}
