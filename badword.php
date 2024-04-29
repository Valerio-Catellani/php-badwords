<?php
$paragraph = $_GET['paragraph'];
$badword = $_GET['badword'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>

<body>
    <h2>
        <?php echo 'la lungezza della frase è: ' . strlen($paragraph) ?>
        <br>
        <?php echo "la frase modificata rimuovendo la parola ($badword) è: " . str_replace($badword, '***', $paragraph) . '' ?>
    </h2>

</body>
</html>