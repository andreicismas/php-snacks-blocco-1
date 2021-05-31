<!-- ## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
codepile.netcodepile.net
CodePile | Easily Share Piles of Code
{{ description }} -->

<?php

$arrayNumbers = [];

while (count($arrayNumbers) < 15) {
    $temp = rand(0, 50);
    if (!in_array($temp, $arrayNumbers)) {
        $arrayNumbers[] = $temp;
    }
}

// for ($i=0; $i < 15; $i++) {
//     $temp = rand(0, 50);
//     if (!in_array($temp, $arrayNumbers)) {
//         $arrayNumbers[] = $temp;
//     } if else(in_array($temp, $arrayNumbers) ){
//         $i--
//     }
    
// };
var_dump($arrayNumbers);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack4</title>
</head>
<body>
    <ul>
        
    </ul>
</body>
</html>
