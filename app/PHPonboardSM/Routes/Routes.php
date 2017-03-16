<?php
namespace PHPonboardSM\Routes;

class Routes
{
	private $_uri = array();
	private $_callback = array();

	public function add($uri= '', $callback ='') 
	{
		$this->_uri[] = $uri;
		$this->_callback[] = $callback;
	}

	public function run() 
	{
        $url = isset($_GET['route']) ? '/' . $_GET['route'] : '/' ;

		foreach($this->_uri as $key => $value)
		{

			if(preg_match("#^$value$#", $url, $params)){
				array_shift($params);
				//return callback if the url match with a route
				call_user_func_array($this-> _callback[$key], $params);

			}
		}
	}
}