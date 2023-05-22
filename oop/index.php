<?php

include 'includes/autoloader.inc.php';



$object = new Person("John", "blue", 28);

  echo $object->name;
  
  echo "<br>";
  $object->setName("John Doe");
  
  echo $object->name;
  
  echo "<br>";
  
  echo Person::$drinkingAge;
  
  echo "<br>";
  
  Person::setDrinkingAge(18);
  
  echo Person::$drinkingAge;
  
  

  echo "<br>";

// Creating instances of the Counter class
$counter1 = new Counter();
$counter2 = new Counter();
$counter3 = new Counter();

// Accessing the static property
echo Counter::$count;  // Output: 3
  

?>