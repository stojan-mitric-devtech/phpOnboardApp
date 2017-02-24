<?php

use NewProject\Repositories\UserRepository as UserRepository;
use NewProject\Filters\AuthFilter as AuthFilter;
use NewProject\Routes\Routes as Routes;
//use NewProject\Repositories;

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



