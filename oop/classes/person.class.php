<?php

class Person 
{
    
    // Properties
    public $name;
    public $eyeColor;
    public $age;
    
    
    public static $drinkingAge = 21;

    
    public function __construct($name, $eyeColor, $age) {
      $this->name = $name;
      $this->eyeColor = $eyeColor;
      $this->age = $age;
        
    }
    
    // Methods
    public function setName(string $name) {
        $this->name = $name;
    }
    
    public static function setDrinkingAge(int $newDA) {
        self::$drinkingAge = $newDA;
    }

}


class Counter {
  public static $count = 0;

  public function __construct() {
      self::$count++;  // Accessing the static property using self::
  }
}