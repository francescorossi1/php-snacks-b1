<?php
$matches = [
    [
        'home_team' => 'Torino',
        'visiting_team' => 'Genova',
        'home_score' => '38',
        'visiting_score' => '50'
    ],
    [
        'home_team' => 'Roma',
        'visiting_team' => 'Bergamo',
        'home_score' => '27',
        'visiting_score' => '40'
    ],
    [
        'home_team' => 'Brescia',
        'visiting_team' => 'Firenze',
        'home_score' => '60',
        'visiting_score' => '45'
    ],
    [
        'home_team' => 'Milano',
        'visiting_team' => 'Napoli',
        'home_score' => '54',
        'visiting_score' => '48'
    ],
];

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack PHP</title>
</head>

<body>
    <ul>
        <?php for ($i = 0; $i < count($matches); $i++) : ?>
            <li><?= $matches[$i]['home_team'] . ' - ' . $matches[$i]['visiting_team'] . ' | ' . $matches[$i]['home_score'] . ' - ' . $matches[$i]['visiting_score'] ?></li>
        <? endfor; ?>
    </ul>
</body>

</html>