<?php

require '../vendor/autoload.php';

use League\Plates\Engine;

$template = new Engine(directory: '../templates', fileExtension: 'tpl');

echo $template->render('esempio',
    ['nome' => 'Alessandro']
);