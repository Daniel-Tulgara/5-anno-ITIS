<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="color-scheme" content="light dark">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
    <title>Richiesta corsi di lingua</title>


    <title>corso di lingua</title>
</head>

<body>

<h2>Richiesta corsi di lingua</h2>

<form action="formCorsi.php" method="post">

    Cognome: <input type="text" name="cognome" required><br><br>
    Nome: <input type="text" name="name" required><br><br>
    E-mail: <input type="email" name="email" required><br><br>

    corso di lingua:<br>
    <select name="lingua" required>
        <option value="inglese">inglese</option>
        <option value="francese">francese</option>
        <option value="spagnolo">spagnolo</option>
        <option value="tedesco">tedesco</option>
    </select><br><br>

    livello:<br>
    <input type="radio" name="livello" value="base" checked> Base
    <input type="radio" name="livello" value="intermedio"> Intermedio
    <input type="radio" name="livello" value="avanzato"> Avanzato<br><br>

    Preferenza orario:<br>
    <input type="checkbox" name="orarioM" value="mattino" checked> Mattino<br>
    <input type="checkbox" name="orarioP" value="pomeriggio"> Pomeriggio<br>
    <input type="checkbox" name="orarioS" value="sera"> Sera<br><br>

    Altre richieste:<br>
    <textarea name="richieste" rows="4" cols="30">nessuna</textarea><br><br>

    <input type="reset" value="Reset">
    <input type="submit" value="Invia">

</form>

</body>
</html>