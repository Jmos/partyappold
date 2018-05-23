<?php

require 'init.php';

$app = new myApp($is_admin = true);

$app->add(new Dashboard())->setModel(new Guest($app->db));