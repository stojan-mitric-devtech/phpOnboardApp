<?php

use PHPonboardSM\Repositories\UserRepository as UserRepository;
use PHPonboardSM\Filters\AuthFilter as AuthFilter;
use PHPonboardSM\Routes\Routes as Routes;

require_once 'app/start.php';

//$user = new User();

//$topic = new Topic();

//$userRepo = new UserRepository();

//$filter = new Authfilter();

$routes = new Routes();

$routes->add('/', function(){
	echo "Hello from home";
});

$routes->add('/test', function(){
	echo "Hello from test";
});

$routes->add('/params/(.*)', function($x = ''){
	echo "Hello from params", $x;
});

echo $routes->run();



