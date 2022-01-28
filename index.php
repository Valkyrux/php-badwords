<?php
$text = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Lorem ipsum dolor sit amet consectetur, adipisicing elit.";
$input_text = $_GET["input"];
// rimpiazzo tutte le lettere dell'input con degli * in modo tale da avere tanti asterischi quanta la parola data
$censured_word = str_replace(str_split($input_text), "*", $input_text);
// sostituisco all'input la parola censurata nel testo, utilizzo str_ireplace piuttosto che str_replace così la rendo casa-insensitive
$new_text = str_ireplace($input_text, $censured_word, $text);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bad_words</title>
</head>

<body>
    <h2>Testo inserito da variabile:</h2>
    <p>
        <?= $text ?>
    </p>
    <h2>Testo con <?= $_GET["input"] ?> censurato:</h2>
    <p>
        <?= $new_text ?>
    </p>
</body>

</html>