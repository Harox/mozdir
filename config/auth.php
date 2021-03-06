<?php

return [

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    'guards' => [
        'provider' => [
            'driver'   => 'session',
            'provider' => 'providers',
        ],

        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'user' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'customer' => [
            'driver' => 'session',
            'provider' => 'customers',
        ],

        'api' => [
            'driver' => 'token',
            'provider' => 'users',
            'hash' => false,
        ],
    ],

    'providers' => [
        'providers' => [
            'driver' => 'eloquent',
            'model'  => App\Provider::class,
        ],

        'users' => [
            'driver' => 'eloquent',
            'model' => App\User::class,
        ],

        'customers' => [
            'driver' => 'eloquent',
            'model' => App\Customer::class,
        ],
    ],

    'passwords' => [
        'providers' => [
            'provider' => 'providers',
            'table'    => 'password_resets',
            'expire'   => 60,
        ],

        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    'password_timeout' => 10800,

];
