 <!-- Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z -->

<?php

$posts = [

    '10/01/2021' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2021' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2021' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack_3  </title>
</head>
<body style="text-align:center  ">
        <h1>Posts list</h1>

        <?php
        // ciclo tutti i post
        foreach ($posts as $date => $value) { ?>
            <h2 style="color : red"><?php echo $date ?></h2>
                    <?php
                        // recupero dati date
                        foreach ($value as $post) { 
                    ?>
                    
                    <div >
                        <h4 style="text-decoration : underline" ><?php echo $post['title']?></h4>
                        <p><?php echo $post['text'] ?></p>
                        <h6 style="color:blue"><?php echo $post['author'] ?></h6>
                    </div>

                    <?php
                } 
                ?>
            <?php
        } 
        ?>
</body>
</html>