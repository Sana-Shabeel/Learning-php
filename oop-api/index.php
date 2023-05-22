<?php 

declare(strict_types=1);

// load class files automatically
spl_autoload_register(function ($class_name) {
    require __DIR__ . '/src/' . $class_name . '.php';
});


$controller = new ProductController();

$controller->proccessRequest($_SERVER['REQUEST_METHOD'], $_GET['id'] ?? null);