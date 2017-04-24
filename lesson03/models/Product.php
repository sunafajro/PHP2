<?php

namespace app\models;

use app\services\DB;

abstract class Product 
{
	public $id;
	public $name;
	public $description;
	public $cost;
	public $quantity;

	protected static $table = 'tbl_product';

	protected $db;
	
	abstract public function costCalculation();

	abstract public function marginCalculation(); 

	abstract public function getTableName();

	public static function getAll() {
		$table = static::getTableName();
		$sql = 'SELECT * FROM ' . $table;
		return static::getDb()->queryAll($sql);
	}

	public static function getById($id) {
		$table = static::getTableName();
		$sql = 'SELECT * FROM ' . $table . ' WHERE id=:id';
		return static::getDb()->queryOne($sql, [':id' => $id]);
	}

	public static function getDb() {
		return Db::getInstance();
	}
}