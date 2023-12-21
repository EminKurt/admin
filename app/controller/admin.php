<?php

if (!route(1)) {
	$route[1] = 'index';
}

if (!file_exists(admin_controller(route(1)))){
    $route[1] = 'index';
}

if (!session('user_rank') && route(1) != 'api' && route(1) != 'register'){
	$route[1] = 'login';
}


require admin_controller(route(1));