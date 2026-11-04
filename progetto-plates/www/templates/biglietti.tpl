<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Stampa Biglietti</title>
</head>
<body>

<?php foreach ($biglietti as $b): ?>
<div class="biglietto">
    <h3>Azienda Trasporti</h3>
    <p>Acquirente: <?= $b['nome'] ?></p>
    <p>Zona: <?= $b['zona'] ?> | Tipo: <?= $b['tipo'] ?></p>
    <p>Costo: <?= $b['costo'] ?></p>
    <p>Data e ora: <?= $b['data'] ?></p>
    <p>Codice univoco: <?= $b['codice'] ?> </p>
</div>
<?php endforeach; ?>

</body>
</html>