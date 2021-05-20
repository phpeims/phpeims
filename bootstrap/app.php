<?php

$_ENV = [
    'APP_DEBUG' => in_array(@$_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1']),
    'APP_NAME' => 'PHPEIMS',
    'APP_VERSION' => 'v1.0.0',
    'APP_RELEASE' => '20210520',
    'ADMIN_PATH' => 'admin',
];

return new think\App();
