<?php


require 'init.php';

$app = new myApp($is_admin = true);
$app->add(new Dashboard());
//$app->add('CRUD')->setModel(new Guest($app->db));


