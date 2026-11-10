<?php

require '../vendor/autoload.php';

use League\Plates\Engine;
use Model\People;

$template = new Engine('../templates', 'tpl');

$persone = \Model\People::getPeople() ?? 1;

echo $template->render('schede',
    [
        'titolo' => 'Personaggi infomatici famosi',
        'persone' => $persone,
    ]
);
