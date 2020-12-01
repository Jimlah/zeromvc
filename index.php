<?php

// require_once './router/Router.php';

$url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'], '/')) : [] ;
echo var_dump($url);
// $url = Router::getUrl();
// echo $url;

// if ($url != "/") {
//     $controller_name = array_shift($url);
//     $function_name = array_shift($url);
//     $args = $url;
//     call_user_func_array(array(new $controller_name, $function_name), $args);
// }else {
//     echo "404 not Found";
// }

// $Router = new Router;

// $start = $Router->getArgumentStart($parameters);