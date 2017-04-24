<?php

namespace app\models;

use app\services\DB;

abstract class Model 
{
	public $id;
	protected $db;
	protected static $table;

	public static function getAll() 
	{
		$table = static::getTableName();
		$sql = 'SELECT * FROM ' . $table;
		return static::getDb()->queryAllObjects($sql, [], static::class);
	}

	public static function getById($id) 
	{
		$table = static::getTableName();
		$sql = 'SELECT * FROM ' . $table . ' WHERE id=:id';
		return static::getDb()->queryOneObject($sql, [':id' => $id], static::class);
	}

	public static function saveModel($obj) 
	{
		$table = static::getTableName();
		if($obj->id) {
			$sql = 'INSERT INTO ' . $table . 'VALUES ()';
		} else {
			$sql = 'UPDATE ' . $table . 'SET ';
		}
		return static::getDb()->execute($sql);
	}

	public static function deleteModel($id) 
	{
		$table = static::getTableName();
		$sql = 'DELETE FROM ' . $table . ' WHERE id=:id';
		return static::getDb()->queryExecute($sql, [':id' => $id]);
	}

	public static function getDb() 
	{
		return Db::getInstance();
	}

	abstract public function getTableName();
}