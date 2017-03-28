<?php

return [
    'default-connection' => 'concrete',
    'connections' => [
        'concrete' => [
            'driver' => 'c5_pdo_mysql',
            'server' => 'localhost',
            'database' => 'IUTFactorian',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
    ],
];
