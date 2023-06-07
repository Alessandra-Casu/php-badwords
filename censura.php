<?php
// var_dump($_GET);

$word =$_GET['word'];
$text = $_GET['text'];
$censored_text= str_replace($word, '****', $text);

    
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Testo originale</h2>
    <p><?= $text ?></p>
    <h3>Il testo originale ha <?= strlen($text)?>  parole</h3>

    <h2>Testo censurato</h2>
    <p><?= $censored_text ?></p>
    <h3>Il testo censurato ha <?= strlen($censored_text)?>  parole</h3>
</body>
</html>
