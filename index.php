<?php

require __DIR__ .'/app/init.php';

$routeExplode = explode('?', $_SERVER['REQUEST_URI']);
$routeArrayMerge = array_filter(explode('/', $routeExplode[0]));
$route = array_merge($routeArrayMerge);

if (SUBFOLDER_NAME != '/'){
	array_shift($route);
}

if (!route(0)) {
	$route[0] = 'index';
}

if (!file_exists(controller(route(0)))) {
	$route[0] = '404';
}

require controller(route(0));