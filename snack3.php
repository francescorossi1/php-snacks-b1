<?php

$posts = [

    '27/12/2015' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Emanuele Silvestri',
            'text' => 'Testo post 2'
        ],
    ],
    '03/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Francesco Bianchi',
            'text' => 'Testo post 3'
        ]
    ],
    '18/05/2022' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Francesco Bianchi',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Laura Laurenti',
            'text' => 'Testo post 6'
        ]
    ],
];

$date = array_keys($posts);
echo $date[1][2]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack PHP #3</title>
</head>

<body>
    <?php for ($i = 0; $i < count($posts); $i++) : ?>
        <span><?= 'Post del ' . $date[$i] ?></span>
        <ul>
            <?php for ($j = 0; $j < count($posts[$date[$i]]); $j++) { ?>
            <li><?= $posts[$date[$i]][$j]['title'] ?></li>
            <li><?= $posts[$date[$i]][$j]['author'] ?></li>
            <li><?= $posts[$date[$i]][$j]['text'] ?></li>
            <? } ?>
        </ul>
    <? endfor; ?>
</body>

</html>
