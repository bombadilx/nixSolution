<?php

return [
    
    '' => [
        'controller' => 'main',
        'action' => 'index',
    ],

    'post' => [
        'controller' => 'article',
        'action' => 'post',
    ],

    'profile' => [
        'controller' => 'users',
        'action' => 'profile',
    ],
    
    'login' => [
        'controller' => 'auth',
        'action' => 'login',
    ],

    'registration' => [
        'controller' => 'auth',
        'action' => 'registration',
    ],

    'enter' => [
        'controller' => 'auth',
        'action' => 'enter',
    ],

    'logout' => [
        'controller' => 'auth',
        'action' => 'logout',
    ],

    'reg' => [
        'controller' => 'auth',
        'action' => 'reg',
    ],

    'create' => [
        'controller' => 'users',
        'action' => 'create',
    ],

    'status' => [
        'controller' => 'users',
        'action' => 'status',
    ],
];
