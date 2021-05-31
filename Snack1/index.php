<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->
<?php

$matches = [
    [
        "home_team" => "Roma",
        "visiting_team" => "Pisa",
        "home_score" => 78,
        "visiting_score" => 54
    ],
    [
        "home_team" => "Milan",
        "visiting_team" => "Firenze",
        "home_score" => 33,
        "visiting_score" => 82
    ], 
    [
        "home_team" => "Crotone",
        "visiting_team" => "Rieti",
        "home_score" => 64,
        "visiting_score" => 88
    ],    
    [
        "home_team" => "Romania ",
        "visiting_team" => "Italia",
        "home_score" => 99,
        "visiting_score" => 98
    ],
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style.css">
    
    <title>snack_1</title>
</head>
<body>
    <h1>Score  Matches</h1>

    <p>Game Played: <?php echo count($matches); ?></p>

    <ol>
        <?php
           
            for ($i = 0; $i < count($matches); $i++) { ?>
                <li>
                    <?php
                    echo $matches[$i]["home_team"] . " - " . $matches[$i]["visiting_team"] . " | " . $matches[$i]["home_score"] . " - " . $matches[$i]["visiting_score"];
                    ?>
                </li>
                <?php
            }
        ?>
    </ol>

</body>
</html>
