
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>

<body>
    <form action="badword.php" method="get">
        <label for="paragraph">Inserisci un paragrafo:</label>
        <input id="paragraph" type="text" name="paragraph">
        <br>
        <label for="badword">Inserisci una parola da censurare:</label>
        <input id="badword" type="text" name="badword">
        <br>
        <button type="submit">Invia</button>
    </form>
</body>

</html>