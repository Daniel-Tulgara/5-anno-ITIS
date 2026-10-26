<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Conferma</title>
</head>
<body>
<?php
if(!empty($_POST['email']) && !empty($_POST['sport'])){
    echo '<p>i dati sono validi</p>';
} else {
    echo '<p>i dati sono non validi</p>';
}
?> <br> <br>

<a href="prova.php?stringa=piena">Stringa piena e non vuota</a> <br> <br>
<a href="prova.php?stringa=ciao">Stringa non e vuota</a> <br> <br>
<a href="prova.php">Stringa vuota e errore</a> <br> <br>

<a href="home.php"> torna al from</a>
</body>
</html>


