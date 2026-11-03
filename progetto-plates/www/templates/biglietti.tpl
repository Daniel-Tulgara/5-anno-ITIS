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
    <p><strong>Acquirente: <?= $this->e($b['nome']) ?></p>
    <p><strong>Zona:</strong> <?= $this->e($b['zona']) ?> | <strong>Tipo:</strong> <?= $this->e($b['tipo']) ?></p>
    <p><strong>Costo:</strong> <?= $this->e($b['costo']) ?></p>
    <p><strong>Data e ora:</strong> <?= $this->e($b['data']) ?></p>
    <p><strong>Codice univoco:</strong> <code><?= $this->e($b['codice']) ?></code></p>
</div>
<?php endforeach; ?>

</body>
</html>