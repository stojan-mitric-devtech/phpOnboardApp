<?php

namespace PHPonboardSM\model;

class Person {
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function sentence() {
        return $this->name . ' is ' . $this->age . ' years old';
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }
}

?>