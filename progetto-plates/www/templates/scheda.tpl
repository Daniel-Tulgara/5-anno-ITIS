<?php $this->layout('layout', [
'titolo' => $titolo
]); ?>

<main>
    <h1>Pagina Personale di: <?= $persona['nome'] . ' ' . $persona['cognome'] ?></h1>
    <div>
        <img src="../../img/<?= $persona['immagine'] ?>" alt="<?= $persona['descrizione-immagine'] ?>">
    </div>
</main>