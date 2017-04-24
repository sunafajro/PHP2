<?php

include './config/main.php';
include './services/Autoloader.php';

use app\services\Autoloader;
use app\models\Product;

spl_autoload_register([new Autoloader(), 'loadClass']);

$product = new Product();
$product = $product->getById(2);
$product->deleteModel($product->id);
//var_dump($product);