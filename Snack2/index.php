<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<?php
// recupero $_GET localhost
$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

var_dump($name);
var_dump($mail);
var_dump($age);

// verifico che name > 3 caratteri
$name_valid = (strlen($name) > 3);
var_dump($name_valid);
// verifico mail (. /@)
$mail_valid = (strpos($mail, '.') == true && strpos($mail, '@') == true);
var_dump($name_valid);

// verifico  age 
$age_valid = (is_numeric($age) && $age > 0);
var_dump($name_valid);
 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack2</title>
</head>
<body>
    <h1>Ciao</h1>

    <h2>
        <?php
             if($name_valid && $mail_valid && $age_valid) {
               echo "Accesso riuscito";
            } else {
            echo "Accesso negato";
            }
        ?>
    </h2>
</body>
</html>