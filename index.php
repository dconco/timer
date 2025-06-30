<?php

use phpSPA\App;

require_once 'vendor/autoload.php';

$app = new App(require 'src/Layout.php');
$app->defaultTargetID('root');

$app->attach(require 'src/pages/HomePage.php');
$app->run();
