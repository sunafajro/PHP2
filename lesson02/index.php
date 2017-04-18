<?php

include './config/main.php';
include './services/Autoloader.php';

use app\services\Autoloader;
use app\models\ProductDigital;
use app\models\ProductStandard;
use app\models\ProductByWeight;

spl_autoload_register([new Autoloader(), 'loadClass']);

$p1 = new ProductDigital();
$p2 = new ProductStandard();
$p3 = new ProductByWeight();

var_dump($p1->costCalculation());
var_dump($p1->marginCalculation());
var_dump($p2->costCalculation());
var_dump($p2->marginCalculation());
var_dump($p3->costCalculation());
var_dump($p3->marginCalculation());