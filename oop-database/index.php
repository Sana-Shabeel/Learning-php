<?php

include "includes/class-autoloader.inc.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch DB data</title>
</head>
<body>
    

    <?php
    

 
    
    
    $testObj = new Test();
    
    $testObj->getPostsStmt(2);
    
      echo "FETCH ALL POSTS: <br>";
      $testObj->getPosts();
      
      echo "INSERT NEW POST: <br>";
      $testObj->setPostStmt("New Post", "This is a new post", "2021-05-05");
        
     
    ?>



</body>
</html>