<?php

use App\Controller\ErrorController;

include __DIR__ . '/../vendor/autoload.php';

// $connection = Connection::getConnection();

// $query = 'SELECT * FROM category;';

// $return = $connection->prepare($query);
// $return->execute();

// var_dump($return->fetchAll());


$uri = explode('?', $_SERVER['REQUEST_URI'])[0];

$routes = include __DIR__ . '/../config/routes.php';

if (!isset($routes[$uri])) {
	(new ErrorController())->notFound();
	exit;
}

$controllerName = $routes[$uri]['controller'];
$methodName = $routes[$uri]['method'];

(new $controllerName())->$methodName();

// echo "Hello World!";