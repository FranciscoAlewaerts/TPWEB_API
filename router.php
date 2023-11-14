<?php
require_once './app/controllers/categoria.controller.php';
require_once './app/controllers/product.controller.php';

require_once './libs/Router.php';

$router = new Router();

// Productos
$router->addRoute("productos", "GET", "ProductController", "get");
$router->addRoute("productos/:id", "GET", "ProductController", "get");

$router->addRoute("productos", "POST", "ProductController", "post");

$router->addRoute("productos/:id", "PUT", "ProductController", "putById");
$router->addRoute("productos/:id", "DELETE", "ProductController", "deleteById");

// Categorias
$router->addRoute("categorias", "GET", "CategoriaController", "get");
$router->addRoute("categorias/:id", "GET", "CategoriaController", "get");

$router->addRoute("categorias", "POST", "CategoriaController", "post");

$router->addRoute("categorias/:id", "PUT", "CategoriaController", "putById");
$router->addRoute("categorias/:id", "DELETE", "CategoriaController", "deleteById");


$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);
?>