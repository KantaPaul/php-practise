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
            $favorites = [ 
                "Dave Punk" => [ 
                    "mob" => "5689741523", 
                    "email" => "davepunk@gmail.com", 
                ], 
                "Pobon Paul" => [ 
                    "mob" => "2584369721", 
                    "email" => "montysmith@gmail.com", 
                ], 
                "John Flinch" => [ 
                    "mob" => "9875147536", 
                    "email" => "johnflinch@gmail.com", 
                ] 
            ]; 
            $keys = array_keys($favorites); 
            for($i = 0; $i < 3; $i++) { 
                echo "<div>$keys[$i]</div>"; 
                foreach($favorites[$keys[$i]] as $key => $value) { 
                    $class = $key;
                    $title = $value;
                    echo "<span class='$class'>$title</span>";
                    echo "<hr>";
                } 
            } 

            echo "</br>";
            echo "</br>";
            echo "</br>";
            echo "</br>";
            echo "</br>";

            $favorites2 = [ 
                [ 
                    "mob" => "5689741523", 
                    "email" => "davepunk@gmail.com", 
                ], 
                [ 
                    "mob" => "2584369721", 
                    "email" => "montysmith@gmail.com", 
                ], 
                [ 
                    "mob" => "9875147536", 
                    "email" => "johnflinch@gmail.com", 
                ],
                [ 
                    "mob" => "5689741523", 
                    "email" => "davepunk@gmail.com", 
                ], 
                [ 
                    "mob" => "2584369721", 
                    "email" => "montysmith@gmail.com", 
                ], 
                [ 
                    "mob" => "9875147536", 
                    "email" => "johnflinch@gmail.com", 
                ] 
            ];
            for($i = 0; $i < count($favorites2); $i++) { 
                $mob = $favorites2[$i]["mob"];
                $email = $favorites2[$i]["email"];
                echo "<div>$mob</div>"; 
                echo "<div>$email</div>"; 
                echo "<hr>";
            } 

            $cars = array(
                array("Make"=>"Toyota", "Model"=>"Corolla", "Color"=>"White", "Mileage"=>24000, "Status"=>"Sold"),
                array("Make"=>"Toyota", "Model"=>"Camry", "Color"=>"Black", "Mileage"=>56000, "Status"=>"Available"),
                array("Make"=>"Honda", "Model"=>"Accord", "Color"=>"White", "Mileage"=>15000, "Status"=>"Sold"),
                array("Make"=>"Nissan", "Model"=>"Juke", "Color"=>"Red", "Mileage"=>4500, "Status"=>"Sold"),
                );

                // var_dump($cars);
            
            echo "<table cellpadding='10' cellspacing'10' border='1'>";
            echo "<tr> <th>Make</th> <th>Model</th> <th>Color</th> <th>Mileage</th> <th>Status</th> </tr>";
            foreach($cars as $car) {
                echo "<tr> <td>$car[Make]</td> <td>$car[Model]</td> <td>$car[Color]</td> <td>$car[Mileage]</td> <td>$car[Status]</td> </tr>";
            }
            echo "</table>";
        ?>
    </div>
</body>
</html>