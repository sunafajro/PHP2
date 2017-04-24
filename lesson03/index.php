<?php

include './config/main.php';
include './services/Autoloader.php';

use app\services\Autoloader;
use app\models\ProductDigital;
use app\models\ProductStandard;
use app\models\ProductByWeight;
use app\services\DB;

spl_autoload_register([new Autoloader(), 'loadClass']);

$product = new ProductStandard();

var_dump($product->getAll());