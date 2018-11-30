<?php
session_start();

/*
 * Classes autoloading
 */
spl_autoload_register(function($class)
{
  if (file_exists('./model/' . $class . '.php'))
    require_once './model/' . $class . '.php';
  elseif (file_exists('./entities/' . $class . '.php'))
    require_once './entities/' . $class . '.php';
  else die('Class ' . $class . ' not found.');
});

$router = new Router($_GET['page'] ?? null);
$router->callController();
