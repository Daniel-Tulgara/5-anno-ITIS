<?php
$password = $_POST["password"] ?? "";

$flag = false;

$lunghezza = false;
$maiuscola = false;
$numero = false;

if (mb_strlen($password) < 8) {
    $flag = true;
    $lunghezza = true;
}

if (!preg_match('/[A-Z]/', $password)) {
    $flag = true;
    $maiuscola = true;
}

if (!preg_match('/[0-9]/', $password)) {
    $flag = true;
    $numero = true;
}

if (!$flag) {
    header("Location: areaPrivata.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Controllo del login</title>
</head>
<body>

<h3>ACCESSO NEGATO</h3>

<?php
if ($lunghezza) {
    echo "La password deve contenere almeno 8 caratteri.<br>";
}

if ($maiuscola) {
    echo "La password deve contenere almeno una lettera maiuscola.<br>";
}

if ($numero) {
    echo "La password deve contenere almeno un numero.<br>";
}
?>

<br>
<a href="login.php">Torna indietro</a>

</body>
</html>