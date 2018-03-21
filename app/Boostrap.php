<?php

require __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\Console\Application;

$app = new Application();

// Hello program
$app->add(new Cmds\Hello());
$app->add(new Cmds\Find());

$app->run();