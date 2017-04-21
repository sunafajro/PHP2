<?php

namespace app\services;

class Db 
{
	protected $conn;

    protected $config = [
        'driver' => 'mysql',
        'host' => 'localhost',
        'login' => 'root',
        'password' => 'password',
        'database' => 'geekdb'
    ];

    protected function prepareDSN()
    {
    	return sprintf(
            "%s:host=%s;dbname=%s;charset=UTF-8",
            $this->config['driver'],
            $this->config['host'],
            $this->config['database']
    	);
    }

    public function getConnection()
    {
        if(is_null($this->conn)) {
            $this->conn = new \PDO();
        }
        return $this->conn;
    }

	public function queryOne()
	{
		return [];
	}
}