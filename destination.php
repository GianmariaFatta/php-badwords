<?php
$paragraph = $_GET['paragraph'];
$length = strlen($paragraph)
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
    <div>
        <h1>Il tuo paragrafo</h1>
        <p> <?= $paragraph ?></p>
        <p>il tuo paragrafo è lungo <?= $length?> caratteri </p>
    </div>
    <div>
        <h1>Il tuo paragrafo censurato</h1>
        <p> <?= $paragraph ?></p>
        <p>il tuo paragrafo è lungo <?= $length?> caratteri </p>
    </div>

</body>
</html>