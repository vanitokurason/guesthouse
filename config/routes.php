<?php
namespace App;

use Core\Route;


return [
    'controllerNamespace' => 'App\\Controllers\\',
    'route' => [
        new Route('GET /', 'MessageController@getList'),
        new Route('GET /createMessage', 'MessageController@create')
    ]
];