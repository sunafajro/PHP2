<?php

namespace app\models;

class Product extends Model
{
	public $name;
	public $description;
	public $cost;
	public $quantity;
	public $type;
	public $weight;

	public function totalCostCalculation() 
	{
		$total_cost = 0;
		switch($this->type) {
		    case 'standard': $total_cost = $this->cost; break;
		    case 'weighted': $total_cost = $this->cost * $this->weight; break;
		    case 'digital': $total_cost = $this->cost/2; break;
		    default: $total_cost = $this->cost;
		}
		return $total_cost;
	}

	public function productMarginCalculation()
	{
        return $this->totalCostCalculation() * 0.1;
	} 

    public function getTableName()
    {
    	return 'tbl_product';
    }
}