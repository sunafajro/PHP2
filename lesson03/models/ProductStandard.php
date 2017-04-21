<?php

namespace app\models;

class ProductStandard extends Product 
{

    public function __construct()
    {
    	$this->cost = 1000;
    }

    public function costCalculation() 
	{
		return $this->cost;
	}

	public function marginCalculation()
	{
        return $this->costCalculation() * 0.1;
	}
}