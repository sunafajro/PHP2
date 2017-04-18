<?php

namespace app\services;

class Autoloader
{
    
    protected $fileExtention = '.php';

	public function loadClass($className) {
        $className = str_replace(['app\\', '\\'], ['', '/'], $className);
        $filename = ROOT_DIR . $className . $this->fileExtention;
        if(file_exists($filename)) {
        	include($filename);
        }
	}
}