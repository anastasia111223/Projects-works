<?php

return [
    [
        'path' => '/',
        'method' => 'GET',
        'controller' => 'Cakes\Controllers\IndexController::index'
    ],
    [
        'path' => '/addcake',
        'method' => 'GET',
        'controller' => 'Cakes\Controllers\CakeController::showAddForm'
    ],
    [
        'path' => '/search',
        'method' => 'GET',
        'controller' => 'Cakes\Controllers\CakeController::showSearch'
    ],
    [
        'path' => '/addcake',
        'method' => 'POST',
        'controller' => 'Cakes\Controllers\CakeController::addNewCake'
    ],
    [
        'path' => '/search',
        'method' => 'POST',
        'controller' => 'Cakes\Controllers\CakeController::searchCake'
    ]
];