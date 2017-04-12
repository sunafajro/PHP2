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
}

/* класс Корзина товаров */
class Cart
{
	/* свойства корзины */
	public $id;
	public $product_name;
	public $total_quantity;
	public $total_cost;
}
