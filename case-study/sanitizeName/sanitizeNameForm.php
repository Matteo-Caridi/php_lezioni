<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitize Name Form</title>
</head>

<body>
    <form action="sanitizeNameResponse.php" method="POST">


        <label for="name">Inserisci nome</label>
        <input type="text" name="nome-battesimo" id="name" />
        <label for="cognome">Inserisci cognome</label>
        <input type="text" name="cognome" id="cognome" />


        <button type="submit">Invia dati</button>

    </form>

</body>

</html>