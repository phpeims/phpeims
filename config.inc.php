<?php

return [
    'APP_DEBUG' => in_array(@$_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1']),
    'DB_CONNECTION' => 'mysql',
    'DB_HOST' => '127.0.0.1',
    'DB_PORT' => 3306,
    'DB_DATABASE' => 'phpeims',
    'DB_USERNAME' => 'root',
    'DB_PASSWORD' => '',
];
