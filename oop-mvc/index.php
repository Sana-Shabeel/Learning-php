<?php

  include 'includes/class-autoload.inc.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC with OOP</title>
</head>
<body>
    <h1>MVC with OOP</h1>
    <?php
        $usersObj = new UserView();
        $usersObj->showAllUsers();
        
        echo "<br>";
        echo "<h4>Insert new user</h4>";
        $usersObj = new UserController();
        // $usersObj->createUser("John", "Doe", "1980-01-01");
        echo "<br>";
        echo "User created successfully!"
        
    ?>
    
</body>
</html>