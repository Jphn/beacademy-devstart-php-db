<?php

use App\Controller\CategoryController;
use App\Controller\IndexController;
use App\Controller\ProductController;

function createRoute(string $controllerName, string $methodName): array
{
	return [
		'controller' => $controllerName,
		'method' => $methodName
	];
}

$routes = [
	'/' => createRoute(IndexController::class, 'indexAction'),
	'/entrar' => createRoute(IndexController::class, 'loginAction'),

	'/categorias' => createRoute(CategoryController::class, 'readAction'),
	'/categorias/adicionar' => createRoute(CategoryController::class, 'createAction'),
	'/categorias/deletar' => createRoute(CategoryController::class, 'deleteAction'),
	'/categorias/atualizar' => createRoute(CategoryController::class, 'updateAction'),

	'/produtos' => createRoute(ProductController::class, 'readAction'),
	'/produtos/adicionar' => createRoute(ProductController::class, 'createAction'),
	'/produtos/deletar' => createRoute(ProductController::class, 'deleteAction'),
	'/produtos/atualizar' => createRoute(ProductController::class, 'updateAction'),
	'/produtos/relatorio' => createRoute(ProductController::class, 'reportAction'),
];

return $routes;
