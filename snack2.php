<?php 
$name = '';
$mail = '';
$age =  '';

if(isset($_GET['name'])) $name = $_GET['name'];
if(isset($_GET['mail'])) $mail = $_GET['mail'];
if(isset($_GET['age'])) $age = $_GET['age'];

$has_success = false;

if (strlen(trim($name)) > 3 && (strpos($mail, '@') && strpos($mail, '.')) && is_numeric($age)) $has_success = true;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack PHP #2</title>
</head>
<body>
    <?php if($has_success) { ?>
        <h2>Accesso Riuscito</h2>
    <?php } else { ?>
        <h2>Accesso Negato</h2>
    <?php } ?>
</body>
</html>