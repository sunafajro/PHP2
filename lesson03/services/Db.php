<?php

namespace app\services;

class Db 
{
	protected static $conn;

    protected static $config = [
        'driver' => 'mysql',
        'host' => 'localhost',
        'login' => 'root',
        'password' => 'password',
        'database' => 'geekdb'
    ];

    protected static $instance = NULL;

    private function __construct() {}
	private function __wakeup() {}
    private function __clone() {}

    public static function getInstance() {
    	if(is_null(static::$instance)) {
    		static::$instance = new static();
    	}
    	return static::$instance;
    }

    protected static function prepareDSN()
    {
    	return sprintf(
            "%s:host=%s;dbname=%s;charset=UTF8",
            static::$config['driver'],
            static::$config['host'],
            static::$config['database']
    	);
    }

    public static function getConnection()
    {
        if(is_null(static::$conn)) {
            static::$conn = new \PDO(
            	static::prepareDSN(),
            	static::$config['login'],
            	static::$config['password']
            );
        }
        /* по умолчанию все данные возвращать в виде ассоциативного массива */
        static::$conn->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
        static::$conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        return static::$conn;
    }

	public static function query($sql, $params = [])
	{
		$sth = static::getConnection()->prepare($sql);
		$sth->execute($params);
		return $sth;
	}

	public static function queryOne($sql, $params = [])
	{
		$sth = static::query($sql, $params);
        return $sth->fetch();
	}

	public static function queryAll($sql, $params = [])
	{
		$sth = static::query($sql, $params);
		return $sth->fetchAll();
	}

    public static function queryOneObject($sql, $params = [], $class)
    {
        $sth = static::query($sql, $params);
        $sth->setFetchMode(\PDO::FETCH_CLASS, $class);
        return $sth->fetch();
    }

    public static function queryAllObjects($sql, $params = [], $class)
    {
        $sth = static::query($sql, $params);
        $sth->setFetchMode(\PDO::FETCH_CLASS, $class);
        return $sth->fetchAll();
    }

	public static function queryExecute($sql, $params = [])
	{
		$sth = static::query($sql, $params);
		return true;
	}
}