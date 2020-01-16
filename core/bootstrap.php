<?php

use App\Core\App;
use App\Core\Database\Connection;
use App\Core\Database\QueryBuilder;

App::bind('config', require 'config.php');
App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

function view($viewName, $data = [])
{
    extract($data);

    return require "app/views/{$viewName}.view.php";
}

function redirect($path)
{
    header("location: /{$path}");
}

function dd($var)
{
    echo '<pre>';
    die(var_dump($var));
}
