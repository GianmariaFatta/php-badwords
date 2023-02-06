<?php
$paragraph = $_GET['paragraph'];
$bad_word = $_GET['bad_word'];
$good_paragraph = str_replace($bad_word,"***",$paragraph);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>il tuo Paragrafo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container d-flex flex-column align-items-center p-5">
        <div class="text-start mb-3">
            <h1 class="text-danger" >Il tuo paragrafo</h1>
            <p class="fs-4"> <?= $paragraph ?></p>
            <h5><i>il tuo paragrafo è lungo <?= strlen($paragraph)?><i> caratteri </h5>
        </div>
        <div class="text-start">
            <h1 class="text-success">Il tuo paragrafo censurato</h1>
            <p class="fs-4"> <?= $good_paragraph  ?></p>
            <h5><i> il tuo paragrafo è lungo <?= strlen($good_paragraph)?> caratteri <i> </h5>
        </div>
    </div>

</body>
</html>