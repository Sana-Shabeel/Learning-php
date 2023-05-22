<?php
declare(strict_types=1);
include 'includes/autoloader.inc.php';



$object = new Person("John", "blue", 28);

 
try {
   
    echo  $object->setName(7896);
} catch (TypeError $e) {
    echo "Error!: " . $e->getMessage();
}
  
  

  echo "<br>";

// Creating instances of the Counter class
$counter1 = new Counter();
$counter2 = new Counter();
$counter3 = new Counter();

// Accessing the static property
 echo Counter::$count;  // Output: 3
  

?>