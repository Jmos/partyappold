<?php


require 'init.php';

$app = new myApp($is_admin = true);

$app->add('CRUD')->setModel(new Guest($app->db));


