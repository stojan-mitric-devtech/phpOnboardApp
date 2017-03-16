<?php

use PHPonboardSM\Routes\Routes;

use PHPonboardSM\model\Person;
use PHPonboardSM\model\birds\Pigeon;
use PHPonboardSM\model\birds\Pinguin;
use PHPonboardSM\model\Iexamples\Cat;
use PHPonboardSM\model\Iexamples\Dog;

require_once '../app/start.php';

$routes = new Routes();

$routes->add('/', function(){
    $person = new Person('John', 20);
	echo $person->sentence();
});

$routes->add('/Iexamples', function(){
    $dog = new Dog();

    echo $dog->talk() . "</br>";

    $cat = new Cat();
    echo $cat->talk();

});

$routes->add('/birds', function(){

    $pigeon = new Pigeon(true, 2);
    $pinguin = new Pinguin(false, 2);

	echo 'Pigeon has ' . $pigeon->getLegCount() . ' legs.' . "</br>";
    echo $pigeon->pigeonFunction() . "</br>";

	if($pigeon->canFly()) {
	    echo 'Pigeon can fly' . "</br>";
    }

    echo 'Pinguin has ' . $pinguin->getLegCount() . ' legs.' . "</br>";
    echo $pigeon->pigeonFunction() . "</br>";

    if($pinguin->canFly()) {
        echo 'Pinguin can fly.';
    }
});

$routes->add('/params/(.*)', function($x = ''){
	echo "Hello from params", $x;
});


echo $routes->run();

?>



