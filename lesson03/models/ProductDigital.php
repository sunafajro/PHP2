<?php

namespace app\models;

class ProductDigital extends Product 
{

    public function __construct()
    {
    	$this->cost = 1000;
    }

    public function costCalculation() 
	{
		return $this->cost/2;
	}

	public function marginCalculation()
	{
        return $this->costCalculation() * 0.1;
	}
}