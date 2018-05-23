<?php

require 'init.php';

$app = new myApp();

$columns = $app->add('Columns');
$left = $columns->addColumn();
$right = $columns->addColumn();


$right->add(['Message','Welcome to party','info'])->text->addParagraph('Policy');
$left->add('Form')->setModel(new Guest($app->db));

exit;