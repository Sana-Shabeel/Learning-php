<?php


abstract class Animal {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    abstract public function makeSound();
    
    public function getName() {
        return $this->name;
    }
}

class Dog extends Animal {
    public function makeSound() {
        return "Woof!";
    }
}

class Cat extends Animal {
    public function makeSound() {
        return "Meow!";
    }
}

// Creating instances of derived classes
$dog = new Dog("Buddy");
$cat = new Cat("Whiskers");

// Calling methods on derived objects
echo $dog->getName() . ": " . $dog->makeSound() . "\n";
echo $cat->getName() . ": " . $cat->makeSound() . "\n";
