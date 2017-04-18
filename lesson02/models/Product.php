<?php

namespace app\models;

abstract class Product 
{
	public $id;
	public $name;
	public $description;
	public $cost;
	public $quantity;
	
	abstract public function costCalculation();

	abstract public function marginCalculation(); 
}