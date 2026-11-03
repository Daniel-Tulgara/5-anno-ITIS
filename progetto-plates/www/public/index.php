<?php

require '../vendor/autoload.php';

use League\Plates\Engine;

$template = new Engine('../templates', 'tpl');


$zona = $_GET['zona'] ?? 1;
$errore = false;
$biglietti = [];

if (isset($_POST["invio"])) {

    if (!empty($_POST['nome']) && !empty($_POST['tipo']) && !empty($_POST['quantita'])) {
        $nome = $_POST['nome'];
        $tipo = $_POST['tipo'];
        $quantita = $_POST['quantita'];

        if ($zona == 1) {
            $costoBase = 1.40;
        } elseif ($zona == 2) {
            $costoBase = 1.80;
        } else {
            $costoBase = 2.20;
        }

        if ($tipo == 'orario') {
            $costoSingolo = $costoBase * 1.5;
            $testoTipo = 'Durata oraria (+50%)';
        } elseif ($tipo == 'giornaliero') {
            $costoSingolo = $costoBase * 2;
            $testoTipo = 'Giornaliero (Raddoppio)';
        } else {
            $costoSingolo = $costoBase;
            $testoTipo = 'Corsa singola';
        }

        for ($i = 0; $i < $quantita; $i++) {
            $codice18 = '';
            for ($c = 0; $c < 18; $c++) {
                $codice18 .= rand(0, 9);
            }

            $biglietti[] = [
                'nome' => $nome,
                'zona' => $zona,
                'tipo' => $testoTipo,
                'costo' => $costoSingolo,
                'data' => date('d/m/Y H:i'),
                'codice' => $codice18
            ];
        }

        echo $template->render('biglietti', [
            'biglietti' => $biglietti,
            'zona' => $zona
        ]);
        exit;

    } else {
        $errore = true;
    }
}

echo $template->render('form', [
    'zona' => $zona,
    'errore' => $errore
]);