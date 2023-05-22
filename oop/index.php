<?php

include 'includes/newclass.inc.php';



$object = new Person("John", "blue", 28);

  echo $object->name;
  
  echo "<br>";
  $object->setName("John Doe");
  
  echo $object->name;

?>