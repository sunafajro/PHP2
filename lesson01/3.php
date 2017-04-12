<?php 

/* класс товар */
class Product 
{
	/* свойства товара */
	public $id;
	public $nomination;
	public $description;
	public $cost;
	public $quantity;

	/* методы товара */
	public function getProduct($id)
	{

	}

	public function setProduct($id)
	{

	}
	
	public function deleteProduct($id)
	{

	}
}

/* класс Корзина товаров */
class Cart
{
	/* свойства корзины */
	public $id;
	public $product_id;
	public $total_quantity;
	public $total_cost;

	/* методы корзины товаров */
	public function getCart($id)
	{

	}

	public function setCart($id)
	{

	}

	public function addProduct($id, $product_id)
	{

	}

	public function removeProduct($id, $product_id)
	{

	}

	public function deleteCart($id)
	{

	}
}