<?php

return [

    'default' => env('DB_CONNECTION', 'sqlite'),

    'connections' => [
        'sqlite' => [
            'driver' => 'sqlite',
            'database' => env('DB_DATABASE', database_path('/Users/admin/Herd/Portofolio/database/database.sqlite')),
            'prefix' => '',
            'foreign_key_constraints' => true,
        ],
    ],

    'migrations' => 'migrations',

];
