<?php

require '../vendor/autoload.php';

use League\Plates\Engine;
use Model\People;

$template = new Engine('../templates', 'tpl');

$id = $_GET['id'] ?? 1;

$persona = \Model\People::getPeopleByID($id);

echo $template->render('scheda',
    [
        'titolo' => 'Personaggi informatici famosi',
        'persona' => $persona,
    ]
);
