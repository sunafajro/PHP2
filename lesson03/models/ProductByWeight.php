<?php

namespace app\models;

class ProductByWeight extends Product 
{
	public $weight;

    public function __construct()
    {
    	$this->cost = 100;
    	$this->weight = 100;
    }

	public function costCalculation() 
	{
		return $this->cost * $this->weight;
	}

	public function marginCalculation()
	{
        return $this->costCalculation() * 0.1;
	}
}