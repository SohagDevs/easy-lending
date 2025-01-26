<?php


use Core\Router;

Router::add('/', 'HomeController@index');
Router::add('/details', 'HomeController@show');
