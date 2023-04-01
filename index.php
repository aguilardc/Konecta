<?php

require_once realpath(__DIR__ . '/vendor/autoload.php');

use Core\libs\App;
use Core\libs\Controller;
use Core\libs\Model;
use Core\libs\View;
use Core\libs\Database;


$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

require 'core/config/config.php';


$app = new App();

