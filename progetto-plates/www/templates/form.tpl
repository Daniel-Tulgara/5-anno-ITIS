<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Acquisto Biglietti</title>
</head>
<body>
<h1>Acquisto Biglietti Autobus</h1>

<p>Zona selezionata: Zona <?= $zona ?> </p>
<p>
    Cambia zona:
    <a href="index.php?zona=1">Zona 1 (1.40€)</a> |
    <a href="index.php?zona=2">Zona 2 (1.80€)</a> |
    <a href="index.php?zona=3">Zona 3 (2.20€)</a>
</p>

<form action="index.php?zona=<?= $zona ?>" method="POST">
    Nome acquirente: <input type="text" name="nome"><br><br>

    Tipo di biglietto:
    <select name="tipo">
        <option value="" disabled selected></option>
        <option value="singolo">Corsa singola (Costo base)</option>
        <option value="orario">Durata oraria (+50%)</option>
        <option value="giornaliero">Giornaliero (Raddoppio)</option>
    </select><br><br>

    Quantità (max 5):
    <select name="quantita">
        <option value="" disabled selected></option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select><br><br>

    <?php if ($errore): ?>
    <p>Inserisci tutti i valori richiesti!</p>
    <?php endif; ?>

    <input type="submit" value="Genera biglietti" name="invio">
</form>
</body>
</html>